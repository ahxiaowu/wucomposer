<?php
namespace core;

class Bootstrap {

    public static function run() {
        session_start();
        self::parseUrl();
    }

    // 分析URL
    public static function parseUrl() {

        if (isset($_GET['s'])) {

            $actList = explode("/", $_GET['s']);

            $class = "\web\controller\\" . ucfirst($actList[0]);
            $action = $actList[1];

        } else {
            $class = "\web\controller\Index";
            $action = "show";
        }

        echo (new $class)->$action();

    }
}