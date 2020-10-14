    <div class="page-hd" style="background-image: url(<?php print $site_url; ?>images/news.png)">
        <div class="bd-c">
            <h2 class="pre-social"><?php print $lang['news']; ?></h2>
			<?php if($offline) print '</br><h2 class="pre-social"><strong><font color="red">'.$lang['server-offline'].'</font></strong></h2>' ?>
        </div>
    </div>
		<?php	
			if(!$offline && $database->is_loggedin())
				if($web_admin>=$jsondataPrivileges['news'])
					include 'include/functions/edit-news.php';
				
				$time = strtotime($article['time']);
				$myFormatForView = date("d.m.Y", $time);
		?>
				<div class="page-title flex-s-c">
						<span class="page-title-news"><?php print $article['title']; ?>
						<?php
							if(!$offline && $database->is_loggedin())
								if($web_admin>=$jsondataPrivileges['news'])
								{
						?>
						<a href="<?php print $site_url; ?>?delete=<?php print $read_id; ?>" onclick="return confirm('<?php print $lang['sure?']; ?>');"><i style="color:red;" class="fa fa-trash-o fa-2" aria-hidden="true"></i></a>
						<?php
								}
						?></span>
						<span class="page-title-time"><?php print $myFormatForView; ?></span>
					</div>
					<div class="page-text" style="min-height: 286px;">
						<div class="page-text-img" style="background-image: url(<?php print $site_url; ?>images/page-text-img.jpg);"></div>
						<?php print $article['content']; ?>
					</div>
