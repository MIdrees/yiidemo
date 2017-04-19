<?php

namespace app\controllers;

use app\models\Message;
use yii\web\Controller;


//class GreetingController extends \yii\web\Controller
class GreetingController extends Controller
{
    public $message = 'test';
    public $message2 = 'Message2 variable from Controller2';

    public function actionIndex()
    {
    	$message = Message::find()
    				->where(['id' => 4])
    				->one();

        $this->message = $message->content;
        return $this->render('index',array('content'=>$this->message));
    }

}
