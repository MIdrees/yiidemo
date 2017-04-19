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

<div class="alert alert-success"  >  

	<?php echo getSession('eventMessage'); ?>

</div>

<?= Html::a('Back to Main Page', ['/test/index'], ['class'=>'btn btn-primary']) ?> 
