<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sms_tag".
 *
 * @property string $id
 * @property string $sms
 * @property string $tag
 * @property string $created
 * @property string $modified
 *
 * @property Sm $sms0
 * @property Tag $tag0
 */
class SmsTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sms_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sms', 'tag'], 'required'],
            [['created', 'modified'], 'safe'],
            [['id', 'sms', 'tag'], 'string', 'max' => 255],
            [['sms', 'tag'], 'unique', 'targetAttribute' => ['sms', 'tag']],
            [['id'], 'unique'],
            [['sms'], 'exist', 'skipOnError' => true, 'targetClass' => Sm::className(), 'targetAttribute' => ['sms' => 'id']],
            [['tag'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sms' => 'Sms',
            'tag' => 'Tag',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSms0()
    {
        return $this->hasOne(Sm::className(), ['id' => 'sms']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag0()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag']);
    }
}
