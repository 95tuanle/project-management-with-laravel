<?php
/**
 * Created by PhpStorm.
 * User: mediba013
 * Date: 2019-02-28
 * Time: 15:28
 */

namespace App\Repositories;


class DbUserRepository implements UserRepository
{

    public function create($attributes)
    {
        dd('creating the user');
    }
}