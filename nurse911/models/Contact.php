<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $description
 * @property string $phone
 * @property string $extension
 * @property string $email
 * @property string $fax
 * @property integer $userRef
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userRef'], 'integer'],
            [['description', 'phone', 'extension', 'email', 'fax'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'phone' => 'Phone',
            'extension' => 'Extension',
            'email' => 'Email',
            'fax' => 'Fax',
            'userRef' => 'User Ref',
        ];
    }
}
