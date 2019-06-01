<?php


namespace Modules\Article\Services;


class TemplateService
{
    public function all()
    {
        $dirs = glob(public_path('templtes/*'));
        $configs = [];
        foreach ($dirs as $v) {
            if($config = $this->parseConfig($v)){
                $configs[] = $config;
            }
        }

        return $configs;
    }

    protected function parseConfig($dir)
    {
        $file = $dir.'/package.json';
        if(is_file($file)){
            $jsonContent = file_get_contents($file);
            $config = json_decode(trim($jsonContent));
            if (is_object($config)){
                $config = (array)$config;
                $name = basename($dir);
                $config['preview'] = url('templtes/'.$name.'/'.$config['preview']);
                $config['name'] = $name;
                return $config;
            }
        }
        dd($config);
        return $file;
    }
}