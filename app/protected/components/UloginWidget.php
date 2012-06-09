<?php

class UloginWidget extends CWidget
{
    //параметры по-умолчанию
    private $params = array(
        'display'       =>  'panel',
        'fields'        =>  'first_name,last_name,email',
        'providers'     =>  'google,facebook,vkontakte',
//         'hidden'        =>  'twitter,google,yandex,livejournal,openid,lastfm,linkedin,liveid,soundcloud,steam,odnoklassniki,mailru',
        'hidden'        =>  '',
        'redirect'      =>  '/',
        'logout_url'    =>  '/ulogin/logout'
    );

    public function run()
    {
        Yii::app()->clientScript->registerScriptFile('http://ulogin.ru/js/ulogin.js', CClientScript::POS_HEAD);
        $this->render('uloginWidget', $this->params);
    }

    public function setParams($params)
    {
        $this->params = array_merge($this->params, $params);
    }
}
