<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiController;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Transformers\AssetTransformer;
use App\Http\Transformers\UserTransformer;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->setTransformer(new UserTransformer());
    }

    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->all());
        $user->save();

        $user->syncRoles($request->get('roles'));

        $user->uploadAvatar($request->get('avatar'));

        return $this->respond(["message" => "User created successfully"]);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        $user->update($request->all());

        $user->syncRoles($request->get('roles'));

        $user->uploadAvatar($request->get('avatar'));

        return $this->respond(["message" => "User updated successfully"]);
    }

    public function delete(Request $request, $id)
    {
        User::find($id)->delete();

        return $this->respond(["message" => "User deleted successfully"]);
    }

    public function avatarUpload(Request $request)
    {
        $response = app(User::class)->saveAvatar($request->files->get('file'));

        if(!$response["status"]) {
            return $this->setStatusCode(400)->respondWithError($response['message']);
        }

        return $this->respond($response["data"]);
    }

}
