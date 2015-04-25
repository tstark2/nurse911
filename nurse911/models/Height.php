<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "height".
 *
 * @property integer $id
 * @property string $unit
 * @property string $inch
 * @property string $foot
 * @property string $millimeter
 * @property string $centimeter
 * @property string $meter
 */
class Height extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'height';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit', 'inch', 'foot', 'millimeter', 'centimeter', 'meter'], 'string', 'max' => 255]
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
            'inch' => 'Inch',
            'foot' => 'Foot',
            'millimeter' => 'Millimeter',
            'centimeter' => 'Centimeter',
            'meter' => 'Meter',
        ];
    }

    public static function findById($id)
    {
        $height = height::findOne($id);

        return $height;
    }
}
