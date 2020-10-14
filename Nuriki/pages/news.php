	<div class="row">
		<div class="col-xs-7">
			<div id="home_slider" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#home_slider" data-slide-to="0" class="active"></li>
					<li data-target="#home_slider" data-slide-to="1"></li>
					<li data-target="#home_slider" data-slide-to="2"></li>
				</ul>
				
				<div class="carousel-inner">
					<div class="item active">
						 <img src="<?php print $site_url; ?>img/new/slider1.png" /> 
						<div class="slider_desc">
							<h5>Quest do Biologo!</h5>
							Ganhe muito recompensas!
						</div>
					</div>

					<div class="item">
						<img src="<?php print $site_url; ?>img/new/slider2.png" />
						<div class="slider_desc">
							<h5>Rune System!</h5>
							Transforme se com o poder magnífico das runas.!
						</div>
					</div>
					<div class="item">
						<img src="<?php print $site_url; ?>img/new/slider3.png" />
						<div class="slider_desc">
							<h5>Jogabilidade única</h5>
							Aproveite nossa jogabilidade! Simplificada única.
						</div>
					</div>
				</div>
			</div>
			
			<div class="server_detilas">
				<div class="home_title"><?php print $lang['statistics']; ?></div>
				<?php
				foreach($jsondataFunctions as $key => $status)
					if(!in_array($key, array('active-registrations', 'players-debug', 'active-referrals')) && $status)
					{
				?>
				<div class="circle">
					<p class="counter"><?php print getStatistics($key); ?></p>
					<p class="info"><?php print $lang[$key]; ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="col-xs-5">
			<div class="panel_news">
				<div style="text-align: center;">
					<a href="<?php print $social_links['discord']; ?>" style="margin-right: 15px; margin-left: -15px;"><img src="<?php print $site_url; ?>img/new/discord.png" /></a>
					<a href="<?php print $social_links['facebook']; ?>"><img src="<?php print $site_url; ?>img/new/facebook.png" /></a>
				</div>
				
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#panel_news_tabs"><?php print $site_title; ?></a></li>
				</ul>
				
				<div class="tab-content">
					<div id="panel_news_tabs" class="tab-pane fade in active">
						Bem-vindo ao <?php print $site_title; ?>, Nossa missão é fornecer a melhor experiência de MMORPG! Junte-se a nós agora e experimente a verdadeira diversão!
					</div>
				</div>
				
								
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#panel_news_tabs2_1">News</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="panel_news_tabs2_1" class="tab-pane fade in active">
						<?php
							$query = "SELECT * FROM news ORDER BY id DESC";
							$records_per_page=intval(getJsonSettings("news"));
							$newquery = $paginate->paging($query,$records_per_page);
							$paginate->dataview($newquery, $lang['sure?'], $web_admin, $jsondataPrivileges['news'], $site_url, $lang['read-more']);
							$paginate->paginglink($query,$records_per_page,$lang['first-page'],$lang['last-page'],$site_url);		
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row" style="padding-top: 200px;">
		<div class="col-xs-4">
			<div class="home_title2">Best player by class</div>
			
			<div class="panel_best_player">
			<?php $shaman = getBestplayerByClass(3, 7); ?>
					<div class="panel_ranking_avatar_shaman"></div>
					<h6>Best SHAMAN</h6>
					<span class="panel_best_player_name"><?php print $shaman['name']; ?></span>
					<span class="panel_best_player_level">Lvl. <?php print $shaman['level']; ?></span>
					<span class="panel_best_player_time"><?php print $shaman['playtime'].' '.$lang['minutes']; ?></span>
			</div>
			<div class="panel_best_player">
			<?php $ninja = getBestplayerByClass(1, 5); ?>
					<div class="panel_ranking_avatar_ninja"></div>
					<h6>Best NINJA</h6>
					<span class="panel_best_player_name"><?php print $ninja['name']; ?></span>
					<span class="panel_best_player_level">Lvl. <?php print $ninja['level']; ?></span>
					<span class="panel_best_player_time"><?php print $ninja['playtime'].' '.$lang['minutes']; ?></span>
			</div>
			<div class="panel_best_player">
			<?php $war = getBestplayerByClass(0, 4); ?>
					<div class="panel_ranking_avatar_warrior"></div>
					<h6>Best WARRIOR</h6>
					<span class="panel_best_player_name"><?php print $war['name']; ?></span>
					<span class="panel_best_player_level">Lvl. <?php print $war['level']; ?></span>
					<span class="panel_best_player_time"><?php print $war['playtime'].' '.$lang['minutes']; ?></span>
			</div>
			<div class="panel_best_player">
			<?php $sura = getBestplayerByClass(2, 6); ?>
					<div class="panel_ranking_avatar_sura"></div>
					<h6>Best SURA</h6>
					<span class="panel_best_player_name"><?php print $sura['name']; ?></span>
					<span class="panel_best_player_level">Lvl. <?php print $sura['level']; ?></span>
					<span class="panel_best_player_time"><?php print $sura['playtime'].' '.$lang['minutes']; ?></span>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="home_title2">Global Ranking</div>
			
			<div class="panel_ranking">
				<h6 class="panel_ranking_title">Top 10 <?php print $lang['players']; ?></h6>
				
				<table class="panel_ranking_table">
					<thead>
						<tr>
							<th>#</th>
							<th><?php print $lang['name']; ?></span></th>
							<th><?php print $lang['class']; ?></span></th>
							<th><?php print $lang['level']; ?></span></th>
						</tr>
					</thead>
					<tbody>
											<?php
												if(!$offline) {
													$top = array();
													$top = top10players();
													
													$i=1;
													
													foreach($top as $player)
													{
												?>
							<tr>
								<td><?php print $i++; ?>.</td>
								<td><?php print $player['name']; ?></td>
								<td><?php print job_name($player['job']); ?></td>
								<td>lv. <?php print $player['level']; ?></td>
							</tr>
												<?php }
												}
												?>
					</tbody>
				</table>
				
				<a href="<?php print $site_url; ?>ranking/players" class="panel_ranking_showall">Top 100 &raquo;</a>
			</div>
			
			<div class="panel_ranking">
				<h6 class="panel_ranking_title">Top 10 <?php print $lang['guilds']; ?></h6>
				
				<table class="panel_ranking_table">
					<thead>
						<tr>
							<th>#</th>
							<th><?php print $lang['name']; ?></th>
							<th><?php print $lang['level']; ?></th>
							<th><?php print $lang['points']; ?></th>
						</tr>
					</thead>
					<tbody>
											<?php
												if(!$offline) {
													$top = array();
													$top = top10guilds();
													
													$i=1;
													
													foreach($top as $guild)
													{
												?>
							<tr>
								<td><?php print $i++; ?>.</td>
								<td><?php print $guild['name']; ?></td>
								<td>lv. <?php print $guild['level']; ?></td>
								<td><?php print number_format($guild['ladder_point'], 0, '', '.'); ?></td>
							</tr>
												<?php }
												}
												?>
					</tbody>
				</table>
				
				<a href="<?php print $site_url; ?>ranking/guilds" class="panel_ranking_showall">Top 100 &raquo;</a>
			</div>
		</div>
	</div>
	