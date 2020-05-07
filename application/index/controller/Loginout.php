<?php


namespace app\index\controller;
use think\Controller;

class Loginout extends Controller
{
    public function index(){

        return $this->fetch('login');

    }
}
