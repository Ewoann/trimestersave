<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mother".
 *
 * @property string $id
 * @property string $first_name
 * @property string $other_names
 * @property string $surname
 * @property string $email_address
 * @property string $husband_name
 * @property string $husband_phone_number
 * @property double $gestation_age
 * @property string $expected_date_of_delivery
 * @property string $facility
 * @property string $assigned_room_midwife
 * @property string $savings_contributor
 * @property string $financial_institution_partner
 * @property string $community_savings_group_name
 * @property double $savings_target
 * @property string $cash_out_date
 * @property string $vas_preferences
 * @property string $other_preference
 * @property string $special_needs
 * @property int $assigned_staff
 * @property string $created
 * @property string $modified
 *
 * @property Staff $assignedStaff
 */
class Mother extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mother';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'other_names', 'surname', 'email_address', 'gestation_age', 'expected_date_of_delivery', 'facility', 'assigned_room_midwife', 'savings_contributor', 'financial_institution_partner', 'community_savings_group_name', 'savings_target', 'cash_out_date', 'vas_preferences', 'other_preference', 'assigned_staff'], 'required'],
            [['gestation_age', 'savings_target'], 'number'],
            [['expected_date_of_delivery', 'cash_out_date', 'created', 'modified'], 'safe'],
            [['vas_preferences'], 'string'],
            [['assigned_staff'], 'integer'],
            [['id', 'first_name', 'other_names', 'surname', 'email_address', 'husband_name', 'husband_phone_number', 'facility', 'assigned_room_midwife', 'savings_contributor', 'financial_institution_partner', 'community_savings_group_name', 'other_preference'], 'string', 'max' => 255],
            [['special_needs'], 'string', 'max' => 500],
            [['id'], 'unique'],
            [['assigned_staff'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['assigned_staff' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'other_names' => 'Other Names',
            'surname' => 'Surname',
            'email_address' => 'Email Address',
            'husband_name' => 'Husband Name',
            'husband_phone_number' => 'Husband Phone Number',
            'gestation_age' => 'Gestation Age',
            'expected_date_of_delivery' => 'Expected Date Of Delivery',
            'facility' => 'Facility',
            'assigned_room_midwife' => 'Assigned Room Midwife',
            'savings_contributor' => 'Savings Contributor',
            'financial_institution_partner' => 'Financial Institution Partner',
            'community_savings_group_name' => 'Community Savings Group Name',
            'savings_target' => 'Savings Target',
            'cash_out_date' => 'Cash Out Date',
            'vas_preferences' => 'Vas Preferences',
            'other_preference' => 'Other Preference',
            'special_needs' => 'Special Needs',
            'assigned_staff' => 'Assigned Staff',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignedStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'assigned_staff']);
    }

     public function beforeValidate() {
    if ($this->isNewRecord) {
       // $this->id= Utility->getInstance()->randomString(10);
        $this->created= new Date();
        $this->modified=new Date();
    }
    return parent::beforeValidate();
}
//   public function beforeSave() {
//     if (!$this->isNewRecord) {
      
//         $this->modified=new Date();
//     }
//     return parent::beforeSave();
// }
}
