<?php 
namespace Yjtec\Request\Agent;
use Illuminate\Support\ServiceProvider;
use Request;
class RequestServiceProvider extends ServiceProvider{

    public function register(){
        Request::macro('agent',function(){
            return app('agent');
        });

        Request::macro('isMobile',function(){
            return app('agent')->isMobile();
        });

        Request::macro('isWechat',function(){
            return app('agent')->is('wechat');
        });

        Request::macro('isDingtalk',function(){
            return app('agent')->match('DingTalk');
        });
    }
}