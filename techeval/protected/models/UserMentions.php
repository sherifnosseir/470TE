<?php

/**
 * This is the model class for table "user_mentions".
 *
 * The followings are the available columns in table 'user_mentions':
 * @property integer $id
 * @property string $language
 * @property string $search_name
 * @property string $to_user_name
 * @property string $to_user_id
 * @property string $from_user_id
 * @property string $tweet
 * @property string $from_user_name
 * @property string $profile_image_url
 * @property string $tweet_id
 * @property string $created_at
 * @property string $db_time_stamp
 */
class UserMentions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserMentions the static model class
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
		return 'user_mentions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('language, search_name, to_user_name, to_user_id, from_user_id, tweet, from_user_name, profile_image_url, tweet_id, created_at, db_time_stamp', 'required'),
			array('language, search_name, to_user_name, to_user_id, from_user_id, tweet, from_user_name, profile_image_url, tweet_id, created_at', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, language, search_name, to_user_name, to_user_id, from_user_id, tweet, from_user_name, profile_image_url, tweet_id, created_at, db_time_stamp', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'language' => 'Language',
			'search_name' => 'Search Name',
			'to_user_name' => 'To User Name',
			'to_user_id' => 'To User',
			'from_user_id' => 'From User',
			'tweet' => 'Tweet',
			'from_user_name' => 'From User Name',
			'profile_image_url' => 'Profile Image Url',
			'tweet_id' => 'Tweet',
			'created_at' => 'Created At',
			'db_time_stamp' => 'Db Time Stamp',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('search_name',$this->search_name,true);
		$criteria->compare('to_user_name',$this->to_user_name,true);
		$criteria->compare('to_user_id',$this->to_user_id,true);
		$criteria->compare('from_user_id',$this->from_user_id,true);
		$criteria->compare('tweet',$this->tweet,true);
		$criteria->compare('from_user_name',$this->from_user_name,true);
		$criteria->compare('profile_image_url',$this->profile_image_url,true);
		$criteria->compare('tweet_id',$this->tweet_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('db_time_stamp',$this->db_time_stamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}