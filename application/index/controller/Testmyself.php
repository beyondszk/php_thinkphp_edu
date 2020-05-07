<?php


namespace app\index\controller;
use think\Controller;

class Testmyself extends Controller
{
    public function index(){

        return $this->fetch('admin-upload-test');
    }
    public function index2(){

        return $this->fetch('admin-see-test');
    }
}
