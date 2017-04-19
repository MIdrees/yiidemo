<?php
/* @var $this yii\web\View */
//echo $content;

namespace app\controllers;

//use app\controllers;
//use yii\web\Controller;
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\Html;
//use app\assets\AppAsset;

?>

<div class="page-header text-center">
  <h1>PHP Yii2 - Internationalization Demo</h1>
</div>

<div class="well center-block"  style="max-width:400px">  

<div class="btn-group btn-toggle">
        <!-- <button class="btn btn-xs btn-default"
            ng-class="{ar:'active'}<?php echo \Yii::$app->language  ?>"
            ng-click="languagePreference.switchLanguage('ar')">
            Arabic</button>

        <button class="btn btn-xs btn-default"
            ng-class="{ur:'active'}<?php echo \Yii::$app->language  ?>"
            ng-click="languagePreference.switchLanguage('ur')">
            Urdu</button>

        <button class="btn btn-xs btn-default"
            ng-class="{en:'active'}<?php echo \Yii::$app->language  ?>"
            ng-click="languagePreference.switchLanguage('en')">
            English
        </button>
 -->


        <?= Html::a('Arabic', ['/test/internationalization','language'=>'ar-SA'], ['class'=>'btn btn-default']) ?> 
        <?= Html::a('Urdu', ['/test/internationalization','language'=>'ur-PK'], ['class'=>'btn btn-default']) ?> 
        <?= Html::a('English', ['/test/internationalization','language'=>'en-US'], ['class'=>'btn btn-default']) ?> 
    </div>

<br/>
<br/>

<!-- <div class="alert alert-success"  >   -->
    
	<?php 
// 	echo $content;
// echo nl2br("\n");
// echo 'test';
// echo nl2br("\n");
// echo 'Original String: This is a string to translate!';
// echo nl2br("\n");
// echo \Yii::t('app', 'This is a string to translate!');
// echo nl2br("\n");
// echo \Yii::t('app', 'This is another string to translate!');
// echo nl2br("\n");
//echo \Yii::t('app', $this->context->messageToTranslate);

//echo $this->context->messageToTranslate;

	?>
</br>

<?php 

    echo \Yii::t('app', $this->context->messageToTranslate);
    //echo \Yii::t('app', 'Internationalization (I18N) refers to the process of designing a software application so that it can be adapted to various languages and regions without engineering changes. For Web applications, this is of particular importance because the potential users may be worldwide. Yii offers a full spectrum of I18N features that support message translation, view translation, date and number formatting.');

    //echo 'Internationalization (I18N) refers to the process of designing a software application so that it can be adapted to various languages and regions without engineering changes. For Web applications, this is of particular importance because the potential users may be worldwide. Yii offers a full spectrum of I18N features that support message translation, view translation, date and number formatting.'
?>


</div>

