<?php
/**
 * Created by PhpStorm.
 * User: zhangyun
 * Date: 2018/2/5
 * Time: 18:51
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    public function render(\Exception $e)
    {
        if ($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            $this->code = 500;
            $this->msg = 'servce error,you never know';
            $this->errorCode = 999;
        }

        $request = Request::instance();

        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url()
        ];

        return json($result,$this->code);
    }

}