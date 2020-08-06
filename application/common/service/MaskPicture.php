<?php
namespace app\common\service;

use think\Db;
use think\Model;

class MaskPicture extends Model
{
    protected $data;

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->data = \think\Loader::model('MaskPicture','logic');
    }

    public function getOneById($id, $columns = ['*'])
    {
        return $this->data->getOneById($id, $columns);
    }

    public function getAllListsByWhere($where, $columns = ['*'])
    {
        return $this->data->getAllListsByWhere($where, $columns);
    }

}