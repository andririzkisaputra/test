<?php
namespace common\components;

use Yii;
use linslin\yii2\curl;

/**
 * Description of Facom
 *
 * @author andri
 */

 class Facom
 {
    protected function getCurl()
    {
        $curl = new curl\Curl();
        // if ($port) {
        //     $response = $curl
        //     ->setGetParams($params)
        //     ->get(Yii::$app->params['Facom']['url'].':'.Yii::$app->params['Facom']['port'].$path);
        // } else {
        //     if ($urlSaldo) {       
        //         $response = $curl
        //         ->setGetParams($params)
        //         ->get(Yii::$app->params['Facom']['urlSaldo'].$path);
        //     } else {
        //         $response = $curl
        //         ->setGetParams($params)
        //         ->get(Yii::$app->params['Facom']['url'].$path);    
        //     }
        // }
        // return $response;
    }

    function createToken($api_key, $api_secretword){
        $str = $api_key.":".$api_secretword.":".gmdate("YmdH");
        return hash('sha256',$str);
    }

    function buildAuth($api_key, $token){
        $str = '
            <auth>
                <api_key>'.$api_key.'</api_key>
                <token>'.$token.'</token>
            </auth>
        ';
     
        return $str;
    }

    function buildTransfer($id, $to, $amount, $currency="IDR", $note=""){
        $str = '
            <transfer id="'.$id.'">
                <to>'.$to.'</to>
                <amount>'.$amount.'</amount>
                <currency>'.$currency.'</currency>
                <note>'.$note.'</note>
            </transfer>
        ';
     
        return $str;
    }

    public function buildXml($id, $auth, $request){
        $str = '<fasa_request id="'.$id.'">';
            $str .= $auth;
            if(is_array($request)){
                foreach($request as $value){
                    $str .= $value;
                }
            } else {
                $str .= $request;
            }       
        $str .= '</fasa_request>';
        return $str;
    }

    public function testApi()
    {
        $api_key = Yii::$app->params['Facom']['api_key'];
        $api_secretword = Yii::$app->params['Facom']['api_secretword'];
        $token = $this->createToken($api_key, $api_secretword);
        $auth = $this->buildAuth($api_key, $token);
        $id = rand(1000, 9999);
        $transfer = $this->buildTransfer();
        print_r($id);
        exit;
        $response = $this->getCurl();
        // return json_decode($response);
    }
}
