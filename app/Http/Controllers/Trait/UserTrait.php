<?php

namespace App\Http\Controllers\Trait;

use App\Models\Users;
use App\Enums\GlobalEnum;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

trait UserTrait
{
    public function createUser($form)
    {
        return Users::insert([
            "name" => $form['name'],
            "email" => $form['email'],
            "password" => Hash::make($form['password']),
            "created_at" => Carbon::now(),
        ]);
    }

}