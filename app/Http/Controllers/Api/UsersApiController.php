<?php

namespace App\Http\Controllers\Api;

use Auth;
use Response;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;

class UsersApiController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);

        // return Response::json($users);
        return UsersResource::collection($users);
    }

    public function user($iduser)
    {
        $user = User::find($iduser);

        if( $user == null){
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'Data User Not Found'
                ]
            ]);
        }

        return (new UsersResource($user))->additional([
            'status' => [
                'code' => 200,
                'descrtiption' => 'OK'
            ]
        ])->response()->setStatusCode(200);
    }

    public function login(Request $request)
    {
        // return $request->all();

        if( ! Auth::attempt(['email' => $request->email, 'password' => $request->password])  ){
            return Response::json([
                'status' => [
                    'code' => 401,
                    'description' => 'Credential is Wrong'
                ]
            ],401);
        }

        $loginUser =  Auth::user();

        return (new UsersResource($loginUser))->additional([
            'status' => [
                'code' => 202,
                'description' => 'OK'
            ]
        ])->response()->setStatusCode(202);
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:3'
        ]);

        $newUser = User::create([
            'name' => $request->name,
            'username' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->name),
        ]);

        return (new UsersResource($newUser))->additional([
            'status' => [
                'code' => 201,
                'decription' => 'User Created',
            ]
        ])->response()->setStatusCode(201);
    }

    public function update(Request $request, $iduser)
    {
        $request->validate([
            'name' => 'max:120',
            'username' => 'max:100|unique:users,id,'.$iduser,
            'email' => 'email|unique:users,id,'.$iduser,
        ]);

        $user = User::find($iduser);

        if( $user == null){
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'User Not Found'
                ]
            ],404);
        }else{

            $request->merge([
                'password' => bcrypt($request->password)
            ]);

            $user->update($request->all());
        }

        return (new UsersResource($user))
                ->additional([
                    'status' => [
                        'code' => 202,
                        'description' => 'update successfully!!'
                    ]
                ])->response()->setStatusCode(202);
    }

    public function logout($iduser)
    {
        $user = User::find($iduser);

        if( $user == null){
            return Response::json([
                'status' => [
                    'code' => 400,
                    'desription' => 'Bad Request!'
                ]
            ],400);
        }

        Auth::logout();

        return Response::json([
            'status' => [
                'code' => 200,
                'description' => 'Logout Success',
            ]
        ],200);
    }
}
