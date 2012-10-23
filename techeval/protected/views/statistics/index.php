<script src="assets/Stats/tablesorter/jquery.tablesorter.js" type="text/javascript" charset="utf-8"></script>

<script>
	$(document).ready(function() 
	    { 
	        $("table#stats").tablesorter(); 
	    } 
	);
</script>


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
			?>
		
		
				<?php if($row['tweetCount']*100/$max == 100){ ?>
					<div class="progress progress-striped active">
			  		<div class="bar bar-danger" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php 
				}
				else if($row['tweetCount']*100/$max > 70)
				{?>
					<div class="progress">
					<div class="bar bar-danger" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				else if($row['tweetCount']*100/$max > 40)
				{?>
					<div class="progress">
					<div class="bar bar-warning" style="width: <?php echo $row['tweetCount']*100/$max; ?>%;">
				<?php
				}
				else if($row['tweetCount']*100/$max > 25)
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
				<?php echo round($row['tweetCount']*100/$max); ?>%
				</div>
			</div>
		</td>
	</tr>
	<?php 
}
?>
</tbody>
</table>