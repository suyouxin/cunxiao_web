<?php

/**
 * This is the model class for table "stu_offer".
 *
 * The followings are the available columns in table 'stu_offer':
 * @property integer $stu_id
 * @property string $stu_number
 * @property string $stu_name
 * @property string $stu_sex
 * @property string $stu_born
 * @property string $stu_base
 * @property string $stu_add
 * @property string $stu_school
 * @property string $stu_imag
 * @property string $stu_grade
 * @property string $stu_class
 * @property string $stu_offer_wait
 * @property string $stu_inq
 * @property string $stu_offer_name
 * @property string $stu_offer_time
 * @property string $stu_offer_mail_time
 * @property string $stu_offer_showname
 * @property string $stu_offer_mode
 * @property string $stu_offer_email
 * @property string $stu_offer_tel
 * @property string $stu_offer_city
 * @property string $stu_offer_add
 * @property string $stu_maney
 * @property string $stu_integer
 * @property string $stu_1
 * @property string $stu_2
 * @property string $stu_3
 * @property string $stu_4
 * @property string $stu_5
 * @property string $stu_6
 * @property string $stu_7
 * @property string $stu_8
 * @property string $stu_9
 * @property string $stu_10
 * @property string $stu_11
 * @property string $stu_12
 * @property integer $stu_work_process
 * @property string $stu_timenow
 */
class StuOffer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stu_offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stu_id, stu_work_process', 'numerical', 'integerOnly'=>true),
			array('stu_number, stu_name, stu_sex, stu_born, stu_base, stu_add, stu_school, stu_imag, stu_grade, stu_class, stu_offer_wait, stu_inq, stu_offer_name, stu_offer_time, stu_offer_mail_time, stu_offer_showname, stu_offer_mode, stu_offer_email, stu_offer_tel, stu_offer_city, stu_offer_add, stu_maney, stu_integer, stu_1, stu_2, stu_3, stu_4, stu_5, stu_6, stu_7, stu_8, stu_9, stu_10, stu_11, stu_12, stu_timenow', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('stu_id, stu_number, stu_name, stu_sex, stu_born, stu_base, stu_add, stu_school, stu_imag, stu_grade, stu_class, stu_offer_wait, stu_inq, stu_offer_name, stu_offer_time, stu_offer_mail_time, stu_offer_showname, stu_offer_mode, stu_offer_email, stu_offer_tel, stu_offer_city, stu_offer_add, stu_maney, stu_integer, stu_1, stu_2, stu_3, stu_4, stu_5, stu_6, stu_7, stu_8, stu_9, stu_10, stu_11, stu_12, stu_work_process, stu_timenow', 'safe', 'on'=>'search'),
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
			'stu_id' => 'ID',
			'stu_number' => '编号',
			'stu_name' => '姓名',
			'stu_sex' => '性别',
			'stu_born' => '出生日期',
			'stu_base' => '基本情况',
			'stu_add' => '家庭住址',
			'stu_school' => '学校',
			'stu_imag' => '照片',
			'stu_grade' => '年级',
			'stu_class' => '班级',
			'stu_offer_wait' => '状态',
			'stu_inq' => '走访人',
			'stu_offer_name' => '捐助人姓名',
			'stu_offer_time' => '捐助人联系时间',
			'stu_offer_mail_time' => '捐助人邮件联系时间',
			'stu_offer_showname' => '捐助人显示姓名',
			'stu_offer_mode' => '捐助人模式',
			'stu_offer_email' => '捐助人邮件地址',
			'stu_offer_tel' => '捐助人电话号码',
			'stu_offer_city' => '捐助人所在城市',
			'stu_offer_add' => '捐助人地址',
			'stu_maney' => '建议捐助金额',
			'stu_integer' => '捐助形式',
			'stu_1' => '备注 1',
			'stu_2' => '备注 2',
			'stu_3' => '备注 3',
			'stu_4' => 'Stu 4',
			'stu_5' => 'Stu 5',
			'stu_6' => 'Stu 6',
			'stu_7' => 'Stu 7',
			'stu_8' => 'Stu 8',
			'stu_9' => 'Stu 9',
			'stu_10' => 'Stu 10',
			'stu_11' => 'Stu 11',
			'stu_12' => 'Stu 12',
			'stu_work_process' => '学生工作流程',
			'stu_timenow' => '学生目前时间',
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

		$criteria->compare('stu_id',$this->stu_id);
		$criteria->compare('stu_number',$this->stu_number,true);
		$criteria->compare('stu_name',$this->stu_name,true);
		$criteria->compare('stu_sex',$this->stu_sex,true);
		$criteria->compare('stu_born',$this->stu_born,true);
		$criteria->compare('stu_base',$this->stu_base,true);
		$criteria->compare('stu_add',$this->stu_add,true);
		$criteria->compare('stu_school',$this->stu_school,true);
		$criteria->compare('stu_imag',$this->stu_imag,true);
		$criteria->compare('stu_grade',$this->stu_grade,true);
		$criteria->compare('stu_class',$this->stu_class,true);
		$criteria->compare('stu_offer_wait',$this->stu_offer_wait,true);
		$criteria->compare('stu_inq',$this->stu_inq,true);
		$criteria->compare('stu_offer_name',$this->stu_offer_name,true);
		$criteria->compare('stu_offer_time',$this->stu_offer_time,true);
		$criteria->compare('stu_offer_mail_time',$this->stu_offer_mail_time,true);
		$criteria->compare('stu_offer_showname',$this->stu_offer_showname,true);
		$criteria->compare('stu_offer_mode',$this->stu_offer_mode,true);
		$criteria->compare('stu_offer_email',$this->stu_offer_email,true);
		$criteria->compare('stu_offer_tel',$this->stu_offer_tel,true);
		$criteria->compare('stu_offer_city',$this->stu_offer_city,true);
		$criteria->compare('stu_offer_add',$this->stu_offer_add,true);
		$criteria->compare('stu_maney',$this->stu_maney,true);
		$criteria->compare('stu_integer',$this->stu_integer,true);
		$criteria->compare('stu_1',$this->stu_1,true);
		$criteria->compare('stu_2',$this->stu_2,true);
		$criteria->compare('stu_3',$this->stu_3,true);
		$criteria->compare('stu_4',$this->stu_4,true);
		$criteria->compare('stu_5',$this->stu_5,true);
		$criteria->compare('stu_6',$this->stu_6,true);
		$criteria->compare('stu_7',$this->stu_7,true);
		$criteria->compare('stu_8',$this->stu_8,true);
		$criteria->compare('stu_9',$this->stu_9,true);
		$criteria->compare('stu_10',$this->stu_10,true);
		$criteria->compare('stu_11',$this->stu_11,true);
		$criteria->compare('stu_12',$this->stu_12,true);
		$criteria->compare('stu_work_process',$this->stu_work_process);
		$criteria->compare('stu_timenow',$this->stu_timenow,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StuOffer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
