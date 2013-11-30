<?php

/**
 * This is the model class for table "school".
 *
 * The followings are the available columns in table 'school':
 * @property integer $school_id
 * @property string $school_name
 * @property string $school_image_title
 * @property string $school_add
 * @property string $school_case
 * @property string $school_image_1
 * @property string $school_image_2
 * @property string $school_image_3
 * @property string $school_image_4
 * @property string $school_image_5
 * @property string $school_image_6
 * @property string $school_introduce_1
 * @property string $school_introduce_2
 * @property string $school_introduce_3
 * @property integer $school_number
 */
class School extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'school';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('school_id, school_number', 'numerical', 'integerOnly'=>true),
			array('school_name, school_image_title, school_add, school_case, school_image_1, school_image_2, school_image_3, school_image_4, school_image_5, school_image_6, school_introduce_1, school_introduce_2, school_introduce_3', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('school_id, school_name, school_image_title, school_add, school_case, school_image_1, school_image_2, school_image_3, school_image_4, school_image_5, school_image_6, school_introduce_1, school_introduce_2, school_introduce_3, school_number', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'school_id' => '学校编号',
			'school_name' => '学校名称',
			'school_image_title' => '学校标题图片',
			'school_add' => '学校地址',
			'school_case' => 'school_case',
			'school_image_1' => '学校照片 1',
			'school_image_2' => '学校照片 2',
			'school_image_3' => '学校照片 3',
			'school_image_4' => '学校照片 4',
			'school_image_5' => '学校照片 5',
			'school_image_6' => '学校照片 6',
			'school_introduce_1' => '学校介绍 1',
			'school_introduce_2' => '学校介绍 2',
			'school_introduce_3' => '学校介绍 3',
			'school_number' => '学校排序',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('school_name',$this->school_name,true);
		$criteria->compare('school_image_title',$this->school_image_title,true);
		$criteria->compare('school_add',$this->school_add,true);
		$criteria->compare('school_case',$this->school_case,true);
		$criteria->compare('school_image_1',$this->school_image_1,true);
		$criteria->compare('school_image_2',$this->school_image_2,true);
		$criteria->compare('school_image_3',$this->school_image_3,true);
		$criteria->compare('school_image_4',$this->school_image_4,true);
		$criteria->compare('school_image_5',$this->school_image_5,true);
		$criteria->compare('school_image_6',$this->school_image_6,true);
		$criteria->compare('school_introduce_1',$this->school_introduce_1,true);
		$criteria->compare('school_introduce_2',$this->school_introduce_2,true);
		$criteria->compare('school_introduce_3',$this->school_introduce_3,true);
		$criteria->compare('school_number',$this->school_number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return School the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
