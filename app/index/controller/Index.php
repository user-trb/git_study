<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        echo "git test！";
        echo 'Hello Git';
=======
        echo 'Hello World';
>>>>>>> main
        return View::fetch();
    }
}
