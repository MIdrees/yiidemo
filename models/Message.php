<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_message".
 *
 * @property integer $Id
 * @property string $content
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'content' => 'Content',
        ];
    }
}
