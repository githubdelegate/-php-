<?php
/**
 * Created by PhpStorm.
 * User: zhangyun
 * Date: 2018/2/5
 * Time: 18:54
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = 'banner不存在';


}