<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        echo "git test！";
        echo 'Hello Git';
        echo 'Hello World';
        return View::fetch();
    }
}
