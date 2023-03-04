<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class UsersController extends Controller 
{
    public function filter() 
    {
        // echo '使用者筆數：' . $user = User::filter(['created_after_filter' => Carbon::yesterday()->toDateString()])->count();
        dd(User::filter(['created_after_filter' => Carbon::yesterday()->toDateString()])->toSqlWithBindings());
    }
}