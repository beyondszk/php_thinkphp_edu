<?php
namespace app\index\controller;
use think\Controller;
use think\View;

class Index extends Controller
{


    private  $obj;


    public function _initialize() {
        $this->obj = model('User');
    }


    public function index()
    {


        return $this->fetch('login');
        /*return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';*/
    }

    public function checkLogin( ){
        //从表单获取数据
        $res = input('post.');


        //从数据库通过登录名查询信息
        $res2 = $this->obj->getUserByUsername($res['username']);


        $res3 = [
            "id" => $res2['id'],
            "username" => $res2['username'],
            "password" => $res2['password'],
            "name" => $res2['name'],
            "collge" => $res2['collge'],
            "char" => $res2['char'],
            "charid" => $res2['charid'],
            "create_time" => $res2['create_time'],
        ];

        /*dump($res3);
        exit();*/



        $res4 = $res3['username'];
        /*dump($res4);
        exit();*/
        //判断登录
        if ($res['password'] == $res2['password']){
            if ($res2['charid'] == 1){
                return $this->fetch('indexteacher',$res3);
            }elseif ($res2['charid'] == 2){

                return $this->fetch('indexstudent',$res3);
            }else{

                return $this->fetch('index',$res3);
            }
        }else{
            $this->error('error');
        }


        //dump($res2['passworld']);
        /*dump($res);*/
        //exit();

    }
}
