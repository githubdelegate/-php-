<?php
/**
 * Created by PhpStorm.
 * User: zhangyun
 * Date: 2018/2/5
 * Time: 17:16
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{

    public function getBanner($id){

        (new IDMustBePostiveInt())->goCheck();
//        (new IDMustBePostiveInt()->goCheck());
        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
            throw new BannerMissException();
        }
        return $banner;

    }
}