<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "volume".
 *
 * @property integer $id
 * @property string $unit
 * @property string $teaspoon
 * @property string $tablespoon
 * @property string $ounce
 * @property string $cup
 * @property string $pint
 * @property string $milliliter
 * @property string $liter
 */
class Volume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit', 'teaspoon', 'tablespoon', 'ounce', 'cup', 'pint', 'milliliter', 'liter'], 'string', 'max' => 255]
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
            'teaspoon' => 'Teaspoon',
            'tablespoon' => 'Tablespoon',
            'ounce' => 'Ounce',
            'cup' => 'Cup',
            'pint' => 'Pint',
            'milliliter' => 'Milliliter',
            'liter' => 'Liter',
        ];
    }
}
