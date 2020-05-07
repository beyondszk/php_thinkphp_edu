<?php


namespace app\index\controller;
use think\Controller;

class Assistant extends Controller
{
    public function index(){

        return $this->fetch('admin-see-message');
    }
    public function index2(){

        return $this->fetch('admin-upload-message');

    }
    public function index3(){

        return $this->fetch('admin-see-message2');

    }
}
