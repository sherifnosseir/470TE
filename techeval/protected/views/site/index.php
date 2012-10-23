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
		<h2 class="helpblock">Group 16 - Stars</h2>
		<p>Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.</p>
	</div>
</div>
</div>