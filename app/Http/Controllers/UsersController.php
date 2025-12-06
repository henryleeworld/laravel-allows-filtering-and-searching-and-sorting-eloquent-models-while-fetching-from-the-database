<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class UsersController extends Controller 
{
    public function filter() 
    {
        echo User::filter(['created_after_filter' => Carbon::yesterday()->toDateString()])->toRawSql() . PHP_EOL;
    }
}