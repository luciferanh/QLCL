<?php

namespace App\Service;

use App\Models\User;

class CheckAdminService
{

    public function get(array $mang)
    {
        $user = User::select('is_admin')->where('email', $mang['email'])->first()->is_admin;
        return $user;
    }
    public function getAll()
    {
        return User::orderbyDesc('id')->paginate(20);
    }

}
