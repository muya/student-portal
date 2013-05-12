<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $userID
 * @property string $firstName
 * @property string $lastName
 * @property string $userName
 * @property string $email
 * @property string $password
 * @property integer $status
 * @property string $dateCreated
 * @property integer $insertedBy
 * @property string $dateModified
 * @property integer $updatedBy
 *
 * The followings are the available model relations:
 * @property StudentProfiles[] $studentProfiles
 * @property UserGroupMappings[] $userGroupMappings
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, lastName, userName, email, password, dateCreated, insertedBy, dateModified, updatedBy', 'required'),
			array('status, insertedBy, updatedBy', 'numerical', 'integerOnly'=>true),
			array('firstName, lastName, email', 'length', 'max'=>60),
			array('userName', 'length', 'max'=>15),
			array('password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userID, firstName, lastName, userName, email, password, status, dateCreated, insertedBy, dateModified, updatedBy', 'safe', 'on'=>'search'),
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
			'studentProfiles' => array(self::HAS_MANY, 'StudentProfiles', 'userID'),
			'userGroupMappings' => array(self::HAS_MANY, 'UserGroupMappings', 'userID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userID' => 'User',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'userName' => 'User Name',
			'email' => 'Email',
			'password' => 'Password',
			'status' => 'Status',
			'dateCreated' => 'Date Created',
			'insertedBy' => 'Inserted By',
			'dateModified' => 'Date Modified',
			'updatedBy' => 'Updated By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userID',$this->userID);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('userName',$this->userName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('insertedBy',$this->insertedBy);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('updatedBy',$this->updatedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}