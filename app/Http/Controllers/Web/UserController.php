<?php

namespace App\Http\Controllers\Web;

use App\Events\UserRegistered;
use App\Http\Controllers\ApiController;
use App\Http\Requests\UserPasswordUpdateRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends ApiController
{

    public function updateSettingsProfile(UserUpdateRequest $request)
    {
        $user = Auth::user();

        $user->update($request->all());

        $user->uploadAvatar($request->get('avatar'));

        return $this->respond(["message" => "User updated successfully"]);
    }

    public function avatarUpload(Request $request)
    {
        $response = app(User::class)->saveAvatar($request->files->get('file'));

        if(!$response["status"]) {
            return $this->setStatusCode(400)->respondWithError($response['message']);
        }

        return $this->respond($response["data"]);
    }

    public function updatePassword(UserPasswordUpdateRequest $request)
    {
        $user = Auth::user();

        if (!Hash::check($request->get('old_password'), $user->password))
        {
            return $this->respondValidationFailed(['old_password' => "Password is not correct"]);
        }

        $user->update(['password' => $request->get('password')]);
    }

}
