<?php


namespace app\index\controller;
use think\Controller;

class Manage extends Controller
{

    private  $obj;


    public function _initialize() {

        $this->obj = model('User');
    }


    public function index(){
        $res4 = [];
        $res = $this->obj
            ->where('id','>','0')
            ->paginate();
            //->select();
        //$page = $res->render();

        for ($i = 0; $i < count($res);$i++){

            if (  $res[$i]['char'] == '学生'){




            }else{
                $res4[$i]["id"] = $res[$i]['id'];
                $res4[$i]["username"] = $res[$i]['username'];
                $res4[$i]["password"] = $res[$i]['password'];
                $res4[$i]["name"] = $res[$i]['name'];
                $res4[$i]["collge"] = $res[$i]['collge'];
                $res4[$i]["classname"] = $res[$i]['classname'];
                $res4[$i]["char"] = $res[$i]['char'];
                $res4[$i]["charid"] = $res[$i]['charid'];
                $res4[$i]["create_time"] = $res[$i]['create_time'];
                $res4[$i]["state"] = $res[$i]['state'];
            }

        }

        //dump($res4);
        //exit();
        $this->assign('names',$res4);
        //return $this->obj->assign('names',$res4)->fetch('admin-list');
        return $this->fetch('admin-list');

    }
    public function index2(){

        $res4 = [];
        $res = $this->obj
            ->where('id','>','0')
            ->paginate();



        for ($i = 0; $i < count($res);$i++){
                /*ssdgahsdiognoSDVsvsvFHQTQTEHQE*/
            if (  $res[$i]['char'] == '学生'){

                $res4[$i]["id"] = $res[$i]['id'];
                $res4[$i]["username"] = $res[$i]['username'];
                $res4[$i]["password"] = $res[$i]['password'];
                $res4[$i]["name"] = $res[$i]['name'];
                $res4[$i]["collge"] = $res[$i]['collge'];
                $res4[$i]["classname"] = $res[$i]['classname'];
                $res4[$i]["char"] = $res[$i]['char'];
                $res4[$i]["charid"] = $res[$i]['charid'];
                $res4[$i]["create_time"] = $res[$i]['create_time'];
                $res4[$i]["state"] = $res[$i]['state'];

            }else{

            }

        }

        //dump($res4);
        //exit();
        $this->assign('names',$res4);
        //return $this->obj->assign('names',$res4)->fetch('admin-list');
        return $this->fetch('admin-list-student');


    }
}
