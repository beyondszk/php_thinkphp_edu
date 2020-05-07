<?php
namespace app\index\model;
use  think\Model;

class BaseModel extends Model
{

    //自动时间戳
    protected $autoWriteTimestamp = true;


    //修改状态码
    public function add($data)
    {
        $data['status'] = 0;
        $this->save($data);
        return $this->id;
    }

    public function updateById($data, $id)
    {
        return $this->allowField(true)->save($data, ['id' => $id]);
    }



}
