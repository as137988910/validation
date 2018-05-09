<?php
new Framework();
class Framework
{
    public function __construct()
    {
        self::initConst();
        self::initConfig();
        self::initRoutes();

    }

    private static function initConst(){
        define('ROOT_PATH',getcwd().'/');
        define('BLOG_PATH',ROOT_PATH);
        echo ROOT_PATH;
    }

}