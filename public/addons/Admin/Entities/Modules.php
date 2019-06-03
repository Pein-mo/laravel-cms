<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    protected $fillable = ['title','name','is_default','front_access'];


    public function setDefault(){
        \DB::table('modules')->update(['is_default'=>0]);
//        dd($this);
        $this->is_default = 1;
        return $this->save();
    }

    public function getDefaultModule(){

        $module = $this->where(['is_default'=>1,'front_access'=>1])->first();
        return $module?$module:$this->where('name','article')->first();
    }
}
