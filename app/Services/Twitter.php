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

    protected $apiKey;
    /**
     * Twitter constructor.
     * @param $apiKey
     */public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

}