<?php


namespace app\index\model;
use think\Model;

class User extends BaseModel
{


    //查询表
    public function getUserByUsername($username) {
        if(!$username) {
            exception('用户名不合法');
        }

        $data = ['username' => $username];
        return $this->where($data)->find();
    }

    public function add($data = []) {

        $res = [
            "username" => $data['username'],
            "password" => $data['password'],
            "name" => $data['name'],
            "collge" => $data['collge'],
            "char" => $data['char'],
        ];
        $res2 = $this->save($res);
        /*return $this->data($res)->allowField(true)
            ->save();*/
    }

}
