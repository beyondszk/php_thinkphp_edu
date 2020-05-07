<?php


namespace app\index\controller;
use think\Controller;
use think\Db;

class Add extends Controller
{

    private  $obj;


    public function _initialize() {

        $this->obj = model('User');

    }


    public function add(){

        return $this->fetch('admin-add');
    }
    public function edit(){
        $res = input();
        //dump($res);
        //exit();
        $res2 = $this->obj->getUserByUsername($res['username']);
        /*["id"] => int(3)
        ["username"] => int(10000)
        ["password"] => string(6) "123456"
        ["name"] => string(5) "admin"
        ["collge"] => string(0) ""
        ["char"] => string(9) "管理员"
        ["charid"] => int(0)
        ["create_time"] => string(19) "2020-05-07 02:33:05"
        ["state"] => int(1)*/
        $data = [
            'id' => $res2["id"],
            "username" => $res2["username"],
            "password" => $res2["password"],
            "name" => $res2["name"],
            "collge" => $res2["collge"],
            "char" => $res2["char"],
            "charid" => $res2["charid"],
            "create_time" => $res2["create_time"],
            "state" => $res2["state"],
        ];

        /*dump($res2);
        exit();*/
        $this->assign($data);
        return $this->fetch('admin-edit');

    }

    public function add1(){
        $res = input('post.');
        $res8 = date("Y-m-d H:i:s");
        $res2 = [
            "username" => $res["username"],
            'password' => $res["pass"],
            "name" => $res["name"],
            "collge" => $res["collge"],
            'char' => $res["char"],
            //'charid' => '0',
            'create_time' => $res8,
            ];
       /* dump($res2);
        exit();*/
       Db::name('user')->insert($res2);

        //$this->obj->add($res2);

        return $this->success('成功了');
    }

    //更新修改

    public function update1(){

       $res =  input('post.');
       $res2 = $this->obj->getUserByUsername($res['username']);
       $time = date("Y-m-d H:i:s");
       $res['create_time'] = $time;
       $this->obj->where('id',$res2['id'])->update($res);

       return $this->success("修改成功");



    }

    public function status1(){



    }



    public function del(){

        //$res = request()->get();
        $res = input('get.');
        dump($res);
        exit();
    }
}
