<?php

namespace app\components;

use yii\base\Component;
use yii\base\Event;

class Order extends Component
{
    const EVENT_ORDER_REGISTERED = 'ORDER_REGISTERED';

    public function RegisterOrder()
    {
        $this->trigger(self::EVENT_ORDER_REGISTERED);
    }
}