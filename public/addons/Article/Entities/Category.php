<?php

namespace Modules\Article\Entities;

use Houdunwang\Arr\Arr;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'pid'];

    /**
     * @param null $category
     * @return 获取树状菜单
     */
    public function getAll($category = null)
    {
        $data = $this->get()->toArray();
        if (!is_null($category)) {

            foreach ($data as $k=>$v){
                $data[$k]['_selected'] = $v['id'] == $category['pid'];
                $data[$k]['_disabled'] = $v['id'] == $category['id'] || (new Arr())->isChild($data,$v['id'],$category['id'],'id',$fidldPid='pid');
            }

        }

        $data = (new Arr())->tree($data, 'name', 'id');
//        dd($data);
        return $data;
    }

    /**
     * @return 是否拥有子菜单
     */
    public function hasChildCategory(){
        $data = $this->get()->toArray();
        return (new Arr())->hasChild($data,$this->id);
    }
}
