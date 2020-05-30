<?php
/**
 * Created by PhpStorm.
 * User: NickBai
 * Email: 876337011@qq.com
 * Date: 2019/2/16
 * Time: 8:19 PM
 */
namespace app\service\controller;

use app\model\Cate;
use app\model\System;

class Index extends Base
{
    // 客服服务台
    public function index()
    {
        $sellerCode = session('kf_seller_code');

        $time = time();
        $safeToken = md5($sellerCode . config('whisper.salt') . $time);
        $token =  $sellerCode . '-' . $time  . '-' . $safeToken;

        $cateModel = new Cate();
        $systemModel = new System();

        $this->assign([
            'port' => config('whisper_socketio.socket_port'),
            'seller' => $sellerCode,
            'socket' => config('whisper.protocol') . config('whisper.socket') . '/' . $token,
            'userName' => session('kf_user_name'),
            'userCode' => session('kf_user_id'),
            'userAvatar' => session('kf_user_avatar'),
            'word' => $cateModel->getSellerWord(session('kf_seller_id'), session('kf_seller_code'))['data'],
            'system' => $systemModel->getSellerConfig(session('kf_seller_code'))['data'],
            'model' => config('seller.model')
        ]);

        if (request()->isMobile()) {
            return $this->fetch('mobile');
        }

        return $this->fetch();
    }
}