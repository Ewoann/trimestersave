<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sms".
 *
 * @property string $id
 * @property string $message
 * @property int $gestation_age
 * @property string $created
 * @property string $modified
 *
 * @property SmsStatus[] $smsStatuses
 * @property SmsTag[] $smsTags
 * @property Tag[] $tags
 */
class SMS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'message', 'gestation_age'], 'required'],
            [['message'], 'string'],
            [['gestation_age'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['id'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'gestation_age' => 'Gestation Age',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmsStatuses()
    {
        return $this->hasMany(SmsStatus::className(), ['sms' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmsTags()
    {
        return $this->hasMany(SmsTag::className(), ['sms' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag'])->viaTable('sms_tag', ['sms' => 'id']);
    }

        public function beforeValidate() {
    if ($this->isNewRecord) {
        $this->id= Utility->getInstance()->randomString(10);
        $this->created= new Date();
        $this->modified=new Date();
    }
    return parent::beforeValidate();
}
  public function beforeSave() {
    if (!$this->isNewRecord) {
      
        $this->modified=new Date();
    }
    return parent::beforeSave();
}
}
