<?php


namespace app\index\controller;
use think\Controller;
use think\Db;

class Student extends Controller
{

    private $obj;
    public function _initialize()
    {
        $this->obj = model('User');
    }

    public function add(){

        return $this->fetch('admin-add');
    }

    public function edit(){

        $res = input();
        $res2 = $this->obj->getUserByUsername($res['username']);
        //dump($res2);
        //exit();
        $data = [
            'id' => $res2["id"],
            "username" => $res2["username"],
            "password" => $res2["password"],
            "name" => $res2["name"],
            "collge" => $res2["collge"],
            "classname" =>$res2["classname"],
            "char" => $res2["char"],
            "charid" => $res2["charid"],
            "create_time" => $res2["create_time"],
            "state" => $res2["state"],
        ];
        $this->assign($data);
        return $this->fetch('admin-edit');
    }

    public function add1(){
        $res = input('post.');

        $time = date("Y-m-d H:i:s");

        $res['create_time'] = $time;


        Db::name('user')->insert($res);
        //$this->obj->save($res);

        return $this->success('添加成功');


    }
    public function update1(){


        $res = input('post.');
        $time = date("Y-m-d H:i:s");

        $res['create_time'] = $time;


        Db::name('user')->insert($res);
        //$this->obj->save($res);

        return $this->success('修改成功');




    }
}
