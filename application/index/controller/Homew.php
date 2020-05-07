<?php


namespace app\index\controller;
use think\Controller;

class Homew extends Controller
{
    public function index(){

        return $this->fetch('admin-upload-homework');
    }
    public function index2(){
        return $this->fetch('admin-see-homework');
    }
}
