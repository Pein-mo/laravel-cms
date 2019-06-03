<?php


namespace Modules\Admin\Services;


use Modules\Admin\Entities\Modules;

class ModuleService
{

    public function updateCache():bool {
        \DB::table('modules')->truncate();
        $modules = \HDModule::getModulesLists();
        foreach ($modules as $module){
            $data = [
                'title'=>$module['title'],
                'name'=>$module['name'],
                'is_default'=>0,
                'front_access'=>$this->frontAccess($module)

            ];
//            dd($data);
            Modules::create($data);
        }
        return true;
    }

    protected function frontAccess($module){
        $class = 'Modules\\'.$module['name'].'\Http\Controllers\HomeController';
//        dd($class);
        return class_exists($class) && method_exists($class,'index');
    }
}