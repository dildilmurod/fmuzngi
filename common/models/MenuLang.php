<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_lang".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $lang
 * @property string $label
 */
class MenuLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'lang', 'label'], 'required'],
            [['menu_id'], 'integer'],
            [['lang'], 'string', 'max' => 2],
            [['label'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'menu_id' => Yii::t('app', 'Menu ID'),
            'lang' => Yii::t('app', 'Lang'),
            'label' => Yii::t('app', 'Label'),
        ];
    }

    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }
}
