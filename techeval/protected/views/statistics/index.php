<script src="assets/Stats/tablesorter/jquery.tablesorter.js" type="text/javascript" charset="utf-8"></script>

<script>
	$(document).ready(function() 
	{ 
		$("#graph_view").hide();
		
        $("table#stats").tablesorter(); 
		$("table#stats thead tr th").css("background","#efefef");
	
		$("#switch").toggle(function()
		{
			$("table").fadeOut("slow");
			$("#graph_view").fadeIn("slow");
		},
		function()
		{
			$("#graph_view").fadeOut("slow");
			$("table").fadeIn("slow");
		});
	});
</script>

<button type="text" name="switch" id="switch" class="btn btn-primary pull-right">Switch View</button>
<table class="table table-striped" id="stats">
<thead>
	<tr>
		<th>Name</th>
		<th># Tweets</th>
		<th>Love Meter</th>
	</tr>
</thead>
<tbody>
<?php
$i = 0;
$max = 0;

$percentage = "";
$graph = array();
$counter = 0;
foreach ($users as $row)
{
	?>	
	<tr>	
		<td><a href="?r=statistics/getTweets&username=<?php echo urlencode($row['username']); ?>"><?php echo $row['username']; ?></a></td>
		<td><?php echo $row['tweetCount']; ?></td>
		<td>
			<?php
			if($i == 0)
			{
				$max = $row['tweetCount'];
				$i++;
			}
			$love = $row['tweetCount']*100/$max;
			?>
		
		
				<?php if($love == 100){ ?>
					<div class="progress progress-striped active">
			  		<div class="bar bar-danger" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php 
				}
				else if($love > 70)
				{?>
					<div class="progress">
					<div class="bar bar-danger" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				else if($love > 40)
				{?>
					<div class="progress">
					<div class="bar bar-warning" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				else if($love > 25)
				{?>
					<div class="progress">
					<div class="bar bar-success" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				else
				{?>
					<div class="progress">
					<div class="bar" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				?>
				<?php echo round($love); ?>%
				</div>
			</div>
		</td>
	</tr>
	<?php 	
	$pos = strpos($percentage, $row['tweetCount']);
	if($pos === false)
	{
		$percentage = $percentage." ".$row['tweetCount'];
		$graph[$row['tweetCount']] = array("percentage" => $row['tweetCount'], "value" => 1);
	}
	else
	{
		$current =  $graph[$row['tweetCount']]['value'];
		$graph[$row['tweetCount']] = array("percentage" => $row['tweetCount'], "value" => $current+1);
	}
	$counter = $counter + 1;
	
}
?>
</tbody>
</table>

<div id="graph_view">
	<div class="well">
		<div class="leaderboard"><h4>Data:</h4></div>
		<ul>
			<li>Total Tweets: <?php echo $counter; ?></li>
		</ul>
		
		<?php
		foreach ($graph as $row)
		{
		?>
		<?php echo $row['percentage']; ?> Tweets
			<div class="progress">
			<div class="bar" style="width: <?php echo $row['value']*100/$counter; ?>%;">
				<?php echo round($row['value']*100/$counter); ?>%
			</div>
			</div>
		<?php
		}
		?>
	</div>
</div>