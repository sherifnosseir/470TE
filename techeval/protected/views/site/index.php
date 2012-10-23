<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script>
	$(document).ready(function()
	{
		$(".nav-item").hide();
		$(".navigation").hover(function()
		{
			$(".nav-item").fadeIn("fast");
		},
		function()
		{
			$(".nav-item").fadeOut("slow");
		});
	});
</script>

<div class="container-fluid">
<div class="row-fluid">
	<div class="span3 well navigation">
		<ul class="nav nav-list">
		  <li class="nav-header">Navigation &#9660</li>
		  <li><a href="?r=statistics/getAllMentions" class="nav-item">Mentions Page</a></li>
		  <li><a href="?r=statistics" class="nav-item">Statistics Page</a></li>
		  <li class=""><a href="?r=site/about" class="nav-item">About Page</a></li>
		</ul>
	</div>
	
	<div class="span9 well">
		<h2 class="help-block"><i class="icon-star"></i> Group 16 - Starz <i class="icon-star"></i></h2>
		<p>This is group 16's Tech Evaluation of <a href="http://www.yiiframework.com">Yii Framework</a>. 
			This evaluation	fetches tweets about <span class="label label-important">@apike</span> 
			and stores them.
		</p>
		<p>
			Navigating to Mentions, you can find out when @apike is mentioned. Navigating to Stats, 
			you can see how many times each user has tweeted about @apike you also get a nice <em>love meter</em> 
			that shows the relative percentage according to the highest number of tweets by one person.
		</p>
	</div>
</div>
</div>