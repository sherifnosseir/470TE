
<div class="leaderboard">
	<h2>
		<img src="<?php echo $user_image; ?>"></img> <?php echo $username; ?> <span class="label label-inverse"><?php echo $activity; ?></span>
	</h2>
</div>
<?php
foreach ($tweet as $row)
{?>
	<div class="well">
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