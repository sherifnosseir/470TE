
<div class="leaderboard">
	<h2>
		<img src="<?php echo $user_image; ?>"></img> <?php echo $username; ?> <span class="label label-inverse"><?php echo $activity; ?></span>
	</h2>
</div>
<?php
foreach ($tweet as $row)
{?>
	<div class="well well-small">
		<p>
			<?php if($row['to_user_id'] != 0)
			{?>
				<p><span class="label label-info">Tweet</span> 
			<?php 
			}
			else
			{?>
				<span class="label">Retweet</span> 
			<?php	
			} ?>
			 <span class="help-inline pull-right">Created on: <?php echo substr($row['created_at'], 0, -6); ?> GMT</span>
		</p>
			<?php echo $row['tweet']; ?>
	</div>
	
<?php 
}
?>