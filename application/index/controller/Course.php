<?php


namespace app\index\controller;
use think\Controller;

class Course extends Controller
{
    public function index(){

        return $this->fetch('course1');

    }
    public function list1(){
        return $this->fetch('admin-list-course');
    }
    public function listfile(){

        return $this->fetch('admin-list-course-file');
    }

}
