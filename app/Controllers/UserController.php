<?php

namespace App\Controllers;

use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;
use App\Application\Auth\Auth;

class UserController
{
    public function register(Request $request): void
    {
        $user = new User();
        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->store();
        Redirect::to('/login');
    }

    public function login(Request $request): void
    {
        $user = (new User())->find('email',$request->post('email'));

        if ($user) {
            if (password_verify($request->post('password'), $user->getPassword())) {
                $token = Random::str(50);
                $user->update([Auth::getTokenColumn()=>$token]);
                setcookie(Auth::getTokenColumn(), $token);
                Redirect::to('/login');
            } else {
                Redirect::to('/login');
            }
        } else {
            Redirect::to('/login');
        }
    }

    public function logout()
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(),NULL);
        Redirect::to('/login');
    }
}