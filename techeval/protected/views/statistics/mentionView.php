<?php
foreach ($mentions as $row)
{?>
	<div class="well">
		<h2><img src="<?php echo $row['profile_image_url']; ?>"></img> <a href="?r=statistics/getTweets&username=<?php echo urlencode($row['from_user_name']); ?>"><?php echo $row['from_user_name']; ?></a></h2>
			<?php if($row['to_user_id'] != 0)
			{?>
				<p><span class="label label-info">Tweet</span> <span class="help-inline pull-right">Created on: <?php echo substr($row['created_at'], 0, -6); ?></span></p>
			<?php 
			}
			else
			{?>
				<p><span class="label">Retweet</span> <span class="help-inline pull-right">Created on: <?php echo substr($row['created_at'], 0, -6); ?></span></p>
			<?php	
			} ?>
			<?php echo $row['tweet']; ?>
	</div>
	
<?php 
}
?>