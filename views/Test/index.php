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

//AppAsset::register($this);  // $this represents the view object

echo $content;

// echo nl2br("\n");
// echo $this->context->message;
// echo nl2br("\n");
// echo getGlobalVar('componentsPath');


$script = "function test() {console.log('a meesage logged in console.');alert('Assalam-o-Alaikum2');}";
//$this->registerJs("", View::POS_END, 'my-options');
$this->registerJs($script, View::POS_END);

//echo \yii\helpers\Url::toRoute(['@web']);

?>


<!-- <p>
<?= Html::a('Register Customer', ['/test/register-customer'], ['class'=>'btn btn-primary']) ?> 
</p>
<p>
<?= Html::a('Register Order', ['/test/register-order'], ['class'=>'btn btn-primary']) ?> 
</p>
 -->
<div class="well center-block"  style="max-width:400px">  

<?= Html::a('Register Customer', ['/test/register-customer'], ['class'=>'btn btn-primary btn-lg btn-block']) ?> 
<?= Html::a('Register Order', ['/test/register-order'], ['class'=>'btn btn-info btn-lg btn-block']) ?> 

<!-- <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
 -->
</div>
<!-- <br/>

<?php
	echo Url::toRoute(['@webroot'], true);
	
?>

<p id="p1">
	This is simple text in paragraph
</p>

<p>
<input type="button" value="Click Me" onclick="test();">
</p>
<p>
<input type="button" value="Click Me2" onclick="TestFunctionFromJSFile();">
</p>
 -->



