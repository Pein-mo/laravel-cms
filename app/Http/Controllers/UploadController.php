<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    /**图片上传方法
     * @param Request $request
     * @return array
     */
    public function make(Request $request)
    {
        $file = $this->move($request->file('file'));

        return ['code' => 0, 'file' => $file];
    }

    /**b
     * 编辑器上传方法
     */
    public function simditor(Request $request)
    {

        $file = $this->move($request->file('file'));

        return [
            'success' => true,
            'mgs' => '上传成功',
            'file_path' => $file,
        ];
    }

    protected function move($file)
    {

        $fileName = str_random(8).'.'.$file->getClientOriginalExtension();
        $dir = 'uploads/'.date('Y-m-d');
        $file->move($dir, $fileName);

        return url($dir.'/'.$fileName);
    }


}
