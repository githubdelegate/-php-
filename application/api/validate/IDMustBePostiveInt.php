<?php
/**
 * Created by PhpStorm.
 * User: zhangyun
 * Date: 2018/2/5
 * Time: 17:50
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require | isPostiveInteger'
    ];

    protected function isPostiveInteger($value,$rule='',$data='',$field=''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }else{
            return $field.'必须是整数';
        }
    }
}