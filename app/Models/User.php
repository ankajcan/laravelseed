<?php

namespace App\Models;

use App\Mail\UserResetPasswordMail;
use Aws\S3\Exception\S3Exception;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Project\Services\FileService;
use Spatie\Permission\Traits\HasRoles;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Auth\Passwords\CanResetPassword as ResetPassword;
use Project\Services\AwsService;


class User extends Model implements AuthenticatableContract,AuthorizableContract,CanResetPasswordContract
{
    use Authenticatable, Authorizable, HasRoles, ResetPassword, Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'first_name', 'last_name', 'email', 'password', 'facebook_id','confirmation_code'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    public function avatar()
    {
        return $this->hasOne(Asset::class, 'entity_id', 'id')->where(["entity_type"=>User::class, "type" => Asset::USER_TYPE_AVATAR]);
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = $value ? $value : $this->first_name." ".$this->last_name;
    }

    public function getSocialAccountAttribute()
    {
        return $this->facebook_id ? true : false;
    }

    /*
    |--------------------------------------------------------------------------
    | DOMAIN METHODS
    |--------------------------------------------------------------------------
    */

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        Mail::send(new UserResetPasswordMail($this,$token));
    }


    /**
     * Upload local file to Amazon S3
     * @param $filePath
     * @return mixed
     */
    public function uploadAvatar($filePath)
    {
        if($filePath == "") { return false; }

        $filename = FileService::getFileNameFromPath($filePath);
        $key = 'users/' . $this->id . '/' . $filename;

        $result = AwsService::uploadToS3($key,$filePath);

        if(!$result["status"]) {
            return  $result;
        }

        // REMOVE CURRENT AVATAR

        if($this->avatar) {

            AwsService::removeFromS3($this->avatar->path);

            $this->avatar->delete();
        }

        $newFile = new Asset([
            'name' => $filename,
            'path' => $key,
            'entity_id' => $this->id,
            'entity_type' => User::class,
            'type' => Asset::USER_TYPE_AVATAR
        ]);

        $newFile->save();

        // SAVE THUMB

        $thumbPath = FileService::createThumbnail($filePath);
        $key = 'users/' . $this->id . '/250x250/' . $filename;
        AwsService::uploadToS3($key,$thumbPath);

        return  ["status" => true, "message" => "Successfully", "data" => $newFile];
    }

    /**
     * Save file on local
     * @param UploadedFile $file
     * @return array
     */
    public function saveAvatar(UploadedFile $file)
    {
        try {
            $dirPath = "files/users/tmp";
            $dir = public_path($dirPath);
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }

            $filename = $file->getClientOriginalName();
            $filePath = $dirPath.'/'.$filename;
            $file->move($dir,$filename);

            return  ["status" => true, "message" => "Successfully", "data" => $filePath];

        } catch (\Exception $e) {
            return  ["status" => false, "message" => $e->getMessage()];
        }

    }

}
