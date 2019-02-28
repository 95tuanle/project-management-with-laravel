<?php
/**
 * Created by PhpStorm.
 * User: mediba013
 * Date: 2019-02-28
 * Time: 11:28
 */

namespace App;


class Example
{
    protected $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}