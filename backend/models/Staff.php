<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property string $name
 * @property int $id
 * @property string $category
 * @property string $status
 * @property string $created
 * @property string $modified
 *
 * @property Mother[] $mothers
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category', 'status'], 'required'],
            [['category', 'status'], 'string'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'id' => 'ID',
            'category' => 'Category',
            'status' => 'Status',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMothers()
    {
        return $this->hasMany(Mother::className(), ['assigned_staff' => 'id']);
    }
}
