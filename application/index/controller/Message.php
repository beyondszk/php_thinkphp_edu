<?php


namespace app\index\controller;
use think\Controller;

class Message extends Controller
{
    public function index(){

        return $this->fetch('admin-upload-message');

    }
    public function index2(){

        return $this->fetch('admin-see-message');

    }
}
