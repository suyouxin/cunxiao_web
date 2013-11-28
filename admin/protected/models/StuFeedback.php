<?php

/**
 * This is the model class for table "stu_feedback".
 *
 * The followings are the available columns in table 'stu_feedback':
 * @property integer $stu_feedback_id
 * @property string $stu_number
 * @property string $stu_name
 * @property string $stu_feedback_stat
 * @property string $stu_feedback_term
 * @property string $stu_feedback_grade
 * @property string $stu_feedback_class
 * @property string $stu_feedback_who
 * @property string $stu_feedback_info
 * @property string $stu_feedback_image
 * @property string $stu_feedback_image2
 * @property string $stu_feedback_image3
 * @property string $stu_feedback_time
 */
class StuFeedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stu_feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stu_feedback_id', 'numerical', 'integerOnly'=>true),
			array('stu_number, stu_name, stu_feedback_stat, stu_feedback_term, stu_feedback_grade, stu_feedback_class, stu_feedback_who, stu_feedback_info, stu_feedback_image, stu_feedback_image2, stu_feedback_image3, stu_feedback_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('stu_feedback_id, stu_number, stu_name, stu_feedback_stat, stu_feedback_term, stu_feedback_grade, stu_feedback_class, stu_feedback_who, stu_feedback_info, stu_feedback_image, stu_feedback_image2, stu_feedback_image3, stu_feedback_time', 'safe', 'on'=>'search'),
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
			'stu_feedback_id' => 'Stu Feedback',
			'stu_number' => 'Stu Number',
			'stu_name' => 'Stu Name',
			'stu_feedback_stat' => 'Stu Feedback Stat',
			'stu_feedback_term' => 'Stu Feedback Term',
			'stu_feedback_grade' => 'Stu Feedback Grade',
			'stu_feedback_class' => 'Stu Feedback Class',
			'stu_feedback_who' => 'Stu Feedback Who',
			'stu_feedback_info' => 'Stu Feedback Info',
			'stu_feedback_image' => 'Stu Feedback Image',
			'stu_feedback_image2' => 'Stu Feedback Image2',
			'stu_feedback_image3' => 'Stu Feedback Image3',
			'stu_feedback_time' => 'Stu Feedback Time',
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

		$criteria->compare('stu_feedback_id',$this->stu_feedback_id);
		$criteria->compare('stu_number',$this->stu_number,true);
		$criteria->compare('stu_name',$this->stu_name,true);
		$criteria->compare('stu_feedback_stat',$this->stu_feedback_stat,true);
		$criteria->compare('stu_feedback_term',$this->stu_feedback_term,true);
		$criteria->compare('stu_feedback_grade',$this->stu_feedback_grade,true);
		$criteria->compare('stu_feedback_class',$this->stu_feedback_class,true);
		$criteria->compare('stu_feedback_who',$this->stu_feedback_who,true);
		$criteria->compare('stu_feedback_info',$this->stu_feedback_info,true);
		$criteria->compare('stu_feedback_image',$this->stu_feedback_image,true);
		$criteria->compare('stu_feedback_image2',$this->stu_feedback_image2,true);
		$criteria->compare('stu_feedback_image3',$this->stu_feedback_image3,true);
		$criteria->compare('stu_feedback_time',$this->stu_feedback_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StuFeedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
