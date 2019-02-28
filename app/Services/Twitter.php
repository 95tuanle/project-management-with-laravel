<?php
/**
 * Created by PhpStorm.
 * User: mediba013
 * Date: 2019-02-28
 * Time: 12:06
 */

namespace App\Services;


class Twitter
{

    protected $api_key;
    /**
     * Twitter constructor.
     * @param $api_key
     */public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

}