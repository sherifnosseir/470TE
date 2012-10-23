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
			$(".nav-item").fadeIn("slow");
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
		</ul>
	</div>
	
	<div class="span9 well">
		<h2 class="help-block">Group 16 - Stars <i class="icon-star"></i></h2>
		<p>This is group g<i class="<i class=""></i>"></i> Yii Tech Evaluation. This evaluation
			reads tweets about <span class="label label-important">@apike</span> and fetches them
			By navigating to Mentions, you can find out when and where @apike is mentioned. By 
			navigating to Stats, you can see how many times each user has tweeted about @apike 
			you also get a nice <em>love meter</em> that shows the relative percentage according 
			to the highest number of tweets by one person
		</p>
	</div>
</div>
</div>