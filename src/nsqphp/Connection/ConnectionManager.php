<?php
/**
 * Created by PhpStorm.
 * User: icyboy
 * Date: 17/12/1
 * Time: 上午10:47
 */

namespace nsqphp\Connection;

class ConnectionManager extends ConnectionPool
{
    private function __construct()
    {
    }

    public static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new self;
        }
        return $instance;
    }
}