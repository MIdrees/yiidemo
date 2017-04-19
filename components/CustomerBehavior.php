<?php

namespace app\components;

use yii\base\Behavior;

class CustomerBehavior extends Behavior
{
    public $additionalProperty = "Some default value";

    public function additionalFunction()
    {
        $this->additionalProperty = "value changed";
    }
}