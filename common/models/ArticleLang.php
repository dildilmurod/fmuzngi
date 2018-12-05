<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article_lang".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $lang
 * @property string $title
 * @property string $description
 * @property string $content
 *
 * @property Article $article
 */
class ArticleLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'title', 'description', 'content'], 'required'],
            [['article_id'], 'integer'],
            [['description', 'content'], 'string'],
            [['lang'], 'string', 'max' => 2],
            [['title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 150],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'article_id' => Yii::t('app', 'Article ID'),
            'lang' => Yii::t('app', 'Lang'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }
}
