<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weight".
 *
 * @property integer $id
 * @property string $unit
 * @property string $ounces
 * @property string $pounds
 * @property string $grams
 * @property string $kilograms
 */
class Weight extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weight';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit', 'ounces', 'pounds', 'grams', 'kilograms'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unit' => 'Unit',
            'ounces' => 'Ounces',
            'pounds' => 'Pounds',
            'grams' => 'Grams',
            'kilograms' => 'Kilograms',
        ];
    }

    public static function findById($id)
    {
        $weight = Weight::findOne($id);
        return $weight;
    }
}
