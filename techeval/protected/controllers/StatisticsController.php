<?php

class StatisticsController extends Controller
{
	public function actionIndex()
	{		
		/*$criteria = new CDbCriteria;
		$criteria->select = 'DISTINCT from_user_name AS "username", COUNT(from_user_name) AS "tweetCount"';
		$criteria->group = "from_user_name";
		$data['users'] = UserMentions::model()->findAll($criteria);*/
		
		$data['users']=Yii::app()->db->createCommand('
		 	SELECT DISTINCT from_user_name AS username, COUNT( from_user_name ) AS tweetCount
			FROM user_mentions
			GROUP BY from_user_name 
			ORDER BY tweetCount DESC
		')->queryAll();
		
		$this->render('index', $data);
	}
	
	public function actionGetAllMentions()
	{
		$data['mentions']=Yii::app()->db->createCommand("
		 	SELECT to_user_name, from_user_name, to_user_id, tweet, profile_image_url, created_at FROM user_mentions ORDER BY tweet_id DESC
		")->queryAll();
		
		$this->render('mentionView', $data);
	}
	
	public function actionGetTweets()
	{
		$username = urldecode($_REQUEST['username']);
		$data['tweet']=Yii::app()->db->createCommand("
		 	SELECT to_user_name, to_user_id, tweet, profile_image_url, created_at FROM user_mentions WHERE from_user_name = '$username'
		")->queryAll();
		
		$data['activity'] = COUNT($data['tweet']);
		$data['user_image'] = $data['tweet'][0]['profile_image_url'];
		$data['username'] = $username;
		$this->render('tweetView', $data);
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}*/

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	
}