<?php

namespace app\components;

use yii\base\Component;
use yii\base\Event;

class Customer extends Component
{
    const EVENT_CUSTOMER_REGISTERED = 'CUSTOMER_REGISTERED';
    public $name = "Muhammad Idrees";


    public function RegisterCustomer()
    {
        $this->trigger(self::EVENT_CUSTOMER_REGISTERED);
    }

    public function behaviors()
    {
        return [
            // anonymous behavior, behavior class name only
            CustomerBehavior::className()
        ];
    }
}