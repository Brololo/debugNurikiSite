<?php
	@ob_start();
	include 'include/functions/header.php';
?>
<!DOCTYPE html>
<html lang="<?php print $language_code; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php print $site_title.' - '.$title; if($offline) print ' - '.$lang['server-offline']; ?></title>
    <meta name="viewport" content="width=device-width">
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
          integrity="sha256-t2/7smZfgrST4FS1DT0bs/KotCM74XlcqZN5Vu7xlrw=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc=" crossorigin="anonymous"/>

    <link rel="stylesheet" href="<?php print $site_url; ?>css/theme.min.css">
    <link rel="stylesheet" href="<?php print $site_url; ?>css/style.css">
    <link rel="stylesheet" href="<?php print $site_url; ?>css/languages.min.css">
    <!-- Schriftart -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Additional CSS -->
	<link href="<?php print $site_url; ?>css/font-awesome.min.css" rel="stylesheet">
	<?php if($page=="admin" && $a_page=="player_edit") { ?>
    <link rel='stylesheet' href='<?php print $site_url; ?>css/bootstrap-select.css'/>
	<?php } ?>
	<link rel="shortcut icon" href="<?php print $site_url; ?>images/favicon.ico?v=" />
	
<?php
if($page=='news' || $page=='')
{
?>

  <style>


    .counter {
        font-size: 19px;
        color: #948141;
		width: 95px;
		height: 50px;
        display: inline-block;
        text-align: center;
		line-height: 70px;
		font-family: Trajan Pro;
    }

    .circle {
        background: rgba(0, 0, 0, 0.6);
        width: 100px;
		height: 100px;
        border-radius: 100%;
		display: inline-block;
		border: 3px solid #0f0f0f;
    }

	.server_stats{
		margin-top: 750px;
	}

	h2{
		color:#948141;
	}

	.channel_info{
		float:left;
	}
	
	.info{
		width: 95px;
		height : 12px;
		font-size: 9px;
		font-family: Trajan Pro;
		line-height: 10px;
		color:#5d5d5d;
        text-align: center;
		font-weight: bold;
		text-transform: uppercase;
		position: absolute;
	}
	
	.content, .links{
		width: 1250px;
	}
	
	.links{
		margin-top: 75px;
	}
	
	.languagebox{
		margin-top: -75px !important;
	}
	
	#home_slider{
		padding-top: 15px;
		margin-bottom: 60px;
	}
	#home_slider img{
		width: 100%;
	}
	.carousel-indicators{
		top: 0px;
		right: 0;
		left: initial;
		text-align: right;
	}
	.carousel-indicators li{
		width: 32px !important;
		height: 8px !important;
		border-style: solid;
		border-width: 1px;
		border-color: #2B2B2B;
		border-radius: 0;
		margin: 0 !important;
		-webkit-box-shadow: inset 0px 0px 2px 1px rgba(43,43,43,0.75);
		-moz-box-shadow: inset 0px 0px 2px 1px rgba(43,43,43,0.75);
		box-shadow: inset 0px 0px 2px 1px rgba(43,43,43,0.75);
	}
	.carousel-indicators .active{
		background-color: #2B2B2B;
	}
	.slider_desc{
		background-color: rgba(0, 0, 0, 0.75);
		position: absolute;
		z-index: 10000;
		bottom: 0;
		width: 100%;
		padding: 18px;
		color: #77664B;
		font-size: 14px;
	}
	.slider_desc h5{
		margin: 0;
		font-size: 21px;
		color: #c1a16e;
		font-family: Trajan Pro;
		margin-bottom: 3px;
	}
	
	.home_title{
		background-image: url(./img/new/home_title.png);
		background-repeat: no-repeat;
		background-position: center;
		width: 388px;
		height: 125px;
		color: #cbac7b;
		font-family: Trajan Pro;
		font-size: 19px;
		text-align: center;
		padding-top: 50px;
		padding-left: 70px;
		margin-left: -70px;
		margin-bottom: 40px;
	}
	.home_title2{
		background-image: url(./img/new/home_title2.png);
		background-repeat: no-repeat;
		background-position: center;
		width: 390px;
		height: 121px;
		color: #cbac7b;
		font-family: Trajan Pro;
		font-size: 19px;
		text-align: center;
		padding-top: 48px;
		padding-right: 90px;
		margin-bottom: 50px;
	}
	
	.server_detilas .circle{
		background: none;
		border: none;
		border-radius: 0;
		background-image: url(./img/new/server_statistic.png);
		background-repeat: no-repeat;
		background-position: center;
		width: 134px;
		height: 155px;
		text-align: center;
		float: left;
		padding-top: 45px;
	}
	.server_detilas .counter{
		font-size: 24px;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-image: -moz-linear-gradient(top, #EAB83A 0%, #FFEBBC 100%);
		background-image: -webkit-linear-gradient(top, #EAB83A 0%,#FFEBBC 100%);
		background-image: linear-gradient(to bottom, #EAB83A 0%,#FFEBBC 100%);
		margin: 0;
		height: auto;
		line-height: 22px;
	}
	.server_detilas .info{
		position: relative;
		width: 60%;
		color: #aaaaaa;
		font-size: 10px;
		margin-top: 5px;
		margin-left: auto;
		margin-right: auto;
		line-height: 12px;
	}
	
	.panel_news{
		background-image: url(./img/new/panel_news.png);
		background-repeat: no-repeat;
		background-position: center;
		width: 502px;
		height: 727px;
		margin-left: auto;
		padding: 20px;
	}
	
	.main{
		min-width: 1250px;
	}
	
	.panel_news .nav-tabs{
		border-bottom-style: solid;
		border-bottom-width: 2px;
		border-bottom-color: #453B2B;
	}
	.panel_news .nav-tabs > li > a{
		background: none !important;
		border: none !important;
		font-family: Trajan Pro;
		color: #453b2b !important;
		font-size: 16px;
		margin-bottom: -1px;
		padding-left: 8px;
		padding-right: 8px;
		margin-right: 25px;
	}
	.panel_news .nav-tabs > li > a:hover{
		color: #756349 !important;
	}
	.panel_news .nav-tabs > li.active > a, .panel_news .nav-tabs > li.active > a:hover{
		color: #c1a16e !important;
		border-bottom-style: solid !important;
		border-bottom-width: 2px !important;
	}
	.panel_news .tab-content{
		color: #6d5c41;
		font-family: Roboto;
		font-size: 14px;
		line-height: 1.25;
		padding-top: 20px;
		padding-bottom: 20px;
		margin-bottom: 20px;
	}
	
	.panel_news_row{
		display: block;
		color: #c1a16e !important;
		text-decoration: none !important;
		font-size: 16px;
		padding: 20px;
		padding-top: 10px;
		padding-bottom: 10px;
		margin-left: -17px;
		width: calc(100% + 34px);
	}
	.panel_news_row:hover{
		background-color: rgba(0, 0, 0, 0.4);
	}
	.panel_news_row_date{
		color: #6d5c41 !important;
		float: right;
	}
	
	.panel_best_player{
		background-image: url(./img/new/panel_best_player.png);
		background-repeat: no-repeat;
		background-position: center;
		width: 403px;
		height: 124px;
		margin-bottom: 10px;
		margin-left: -30px;
		padding-top: 40px;
		padding-right: 40px;
		font-family: Roboto;
		color: #5e5e5e;
		line-height: 1.2;
	}
	
	.panel_best_player h6{
		margin: 0;
		font-family: Trajan Pro;
		font-size: 17px;
		line-height: 13px;
		color: #966B36;
		margin-bottom: 8px;
	}
	
	.panel_ranking_avatar_shaman, .panel_ranking_avatar_ninja, .panel_ranking_avatar_sura, .panel_ranking_avatar_warrior{
		background-repeat: no-repeat;
		background-position: center;
		width: 86px;
		height: 99px;
		margin-left: 30px;
		margin-top: -28px;
		margin-right: 15px;
		float: left;
	}
	.panel_ranking_avatar_shaman{
		background-image: url(./img/new/avatar_shaman.png);
	}
	.panel_ranking_avatar_ninja{
		background-image: url(./img/new/avatar_ninja.png);
	}
	.panel_ranking_avatar_sura{
		background-image: url(./img/new/avatar_sura.png);
	}
	.panel_ranking_avatar_warrior{
		background-image: url(./img/new/avatar_warrior.png);
	}
	
	.links{
		height: 1700px;
	}
	.content{
		height: 1850px;
	}
	
	.panel_best_player_name{
		font-size: 16px;
		color: #5E503B;
	}
	.panel_best_player_level{
		float: right;
		font-size: 16px;
		margin-right: 10px;
	}
	.panel_best_player_empire{
		float: right;
		font-size: 15px;
		margin-top: 1px;
	}
	.panel_best_player_time{
		display: block;
		font-size: 14px;
	}
	
	.panel_ranking{
		background-color: #080808;
		width: 390px;
		height: 494px;
		display: inline-block;
		float: left;
		margin-right: 21px;
		padding: 20px;
	}
	.panel_ranking_title{
		color: #c1a16e;
		font-size: 17px;
		font-weight: bold;
		border-bottom-style: solid;
		border-bottom-width: 2px;
		border-bottom-color: #131313;
		padding-bottom: 12px;
		margin-top: 0;
	}
	
	.panel_ranking_table{
		width: calc(100% + 40px);
		font-family: Roboto;
		color: #5e5e5e;
		font-size: 15px;
		font-weight: 600;
		margin-left: -20px;
	}
	.panel_ranking_table th{
		color: #5E503B;
		font-size: 12px;
		padding: 5px;
		text-align: left;
	}
	.panel_ranking_table tbody tr:nth-child(odd){
		background-color: #101010;
	}
	.panel_ranking_table tr > td{
		padding: 5px;
		text-align: left;
	}
	.panel_ranking_table tr > td:first-child, .panel_ranking_table tr > th:first-child{
		padding-left: 20px;
	}
	.panel_ranking_table tr > td:last-child, .panel_ranking_table tr > th:last-child{
		padding-right: 20px;
	}
	.panel_ranking_table tr > td:nth-child(3), .panel_ranking_table tr > th:nth-child(3){
		color: #5E503B;
		text-align: center;
	}
	
	.panel_ranking_showall{
		display: block;
		color: #c1a16e;
		font-family: Roboto;
		font-size: 15px;
		font-weight: bold;
		text-align: center;
		margin-top: 30px;
	}
  </style>
<?php } ?>

	<style>
	.aaa {
	  background: linear-gradient(to bottom, var(--mainColor) 0%, var(--mainColor) 100%);
		background-position: 0 100%;
		background-repeat: repeat-x;
		background-size: 3px 3px;
	  color: #b9aa7a;
	  text-decoration: none;
	}

	.aaa:hover {
	  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes  shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='%239d957c' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
	  background-position: 0 100%;
	  background-size: auto 6px;
	  background-repeat: repeat-x;
	  text-decoration: none;
	}

	a:hover{
		color: #b9aa7a;
	}

	nav ul a, nav ul a:visited, nav ul a:active {
		color: #b9aa7a;
	}

	.navigation{
		height: 150px;
		padding-top: 25px;
	}
	.navigation > nav{
		width: 1250px;
		margin-left: auto;
		margin-right: auto;
		padding-right: 120px;
	}
	.navigation nav ul{
		text-align: right;
	}

	.navigation nav ul a{
		font-size: 16px !important;
	}
	.navigation nav ul li{
		width: auto;
		padding-left: 15px;
		padding-right: 15px;
	}
	.navigation .newLogin{
		color: #BA4545;
		border-color: #BA4545;
	}
	.languagebox{
		top: -95px;
		right: -35px;
	}
	.languagebox .dropdown-toggle{
		background-color: #151210;
	}
	.logo{
		float: left;
		margin-left: -75px;
	}
	.content, .links {
		width: 1250px !important;
	}
	.content-bg, .ranking-bg{
		margin-left: auto;
		margin-right: auto;
		position: relative;
	}

	</style>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="main">

	<div class= "navigation">
		<?php
			if($item_shop!="")
				$shop_url = $item_shop;
			else if(is_dir('shop')) 
				$shop_url = $site_url.'shop'; 
			else print $shop_url = ''; 
		?>
    <nav class="float--none">
		<a href="<?php print $site_url; ?>" class="logo"><img class="navLogo"></a> 
        <ul>
            <li>
                <a class="aaa" href="<?php print $site_url; ?>news"><?php print $lang['news']; ?></a>
            </li>
			<?php if(!$database->is_loggedin()) { ?>
			<li>
                <a class="aaa" href="<?php print $site_url; ?>users/register"><?php print $lang['register']; ?></a>
            </li>
			<?php } ?>
			<li>
				<a class="aaa" href="<?php print $site_url; ?>download"><?php print $lang['download']; ?></a>
			</li>
            <li>
                <a class="aaa" href="<?php print $site_url; ?>ranking/players"><?php print $lang['ranking']; ?></a>
            </li>
            <li>
                <a class="aaa" href="<?php print $forum; ?>" target="_blank">Forum</a></a>
            </li>
            <li>
                <a class="aaa" href="<?php print $shop_url; ?>" target="_blank">Item Shop</a>
            </li>
			<?php if(!$database->is_loggedin()) { ?>
			<li>
				<a href="<?php print $site_url; ?>users/login" class="newLogin"><?php print $lang['login']; ?></a>
            </li>
			<?php } else { ?>
			<li>
				<a href="<?php print $site_url; ?>user/administration" class="username"><?php print getAccountName($_SESSION['id']); ?></a>
            </li>
			<li>
				<?php if($web_admin) { ?>
				<a href="<?php print $site_url; ?>admin" class="newLogin"><?php print $lang['administration']; ?></a>
				<?php } else { ?>
				<a href="<?php print $site_url; ?>users/logout" class="newLogin"><?php print $lang['logout']; ?></a>
				<?php } ?>
            </li>
			<?php } ?>
		</ul>
    </nav><!-- nav -->

    <div class="clearfix"></div>
	
	
	</div>
	
    <div class="content">
    <div class="btn-group dropdown languagebox" style="margin-top : -300px;">
        <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="language_menu">
            <span class="lang-sm lang-lbl" lang="<?php print $language_code;?>"></span> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
			<?php
				foreach($json_languages['languages'] as $key => $value)
					if($key!=$language_code)
						print '<li><a href="'.$site_url.'?lang='.$key.'" title="language_select"><span class="lang-sm lang-lbl" lang="'.$key.'"></span></a></li>';
			?>
		</ul>
    </div>
        <div class="links">
			<?php
				if(in_array($page, array("login", "register", "lost", "password", "administration", "download", "characters", "email")))
					$type = 'content';
				else
					$type = 'ranking';
				
				if($page!='news' && $page!='')
					print '<div class="'.$type.'-bg">';
				include 'pages/'.$page.'.php';
				if($page!='news' && $page!='')
					print '</div>';
			?>
        </div><!-- .links -->

        <div class="clearfix"></div>
    </div><!-- .content -->
    <footer>

        <div class="copyright">
			
				<nav class="float--none">
					<ul>
							<img class="footerLogo">
							<li>
								<a href="<?php print $site_url; ?>news"><?php print $lang['news']; ?></a>
							</li>
							<?php if(!$database->is_loggedin()) { ?>
							<li>
								<a href="<?php print $site_url; ?>users/register"><?php print $lang['register']; ?></a>
							</li>
							<?php } ?>
							<li>
								<a href="<?php print $site_url; ?>download"><?php print $lang['download']; ?></a>
							</li>
							<li>
								<a href="<?php print $site_url; ?>ranking/players"><?php print $lang['ranking']; ?></a>
							</li>
							<li>
								<a href="<?php print $forum; ?>" target="_blank">Forum</a></a>
							</li>
							<li>
								<a href="<?php print $shop_url; ?>" target="_blank">Item Shop</a>
							</li>
					</ul>
				</nav><!-- nav -->
            <span>&copy; Copyright <?php
										$copyright_year = date('Y');
										if($copyright_year > 2020)
											print '2020 - '.$copyright_year;
										else print $copyright_year;
											print ' <a>'.$site_title.'</a>';
								?></span>
        </div><!-- .copyright -->

    </footer><!-- footer -->
</div>
<!-- JAVASCRIPT + JQUERY -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc=" crossorigin="anonymous" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js" type="text/javascript"></script>
<?php include 'include/functions/footer.php'; 
if($page=='news' || $page=='')
{
?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" type="text/javascript"></script>
<script src="<?php print $site_url; ?>js/jquery.counterup.min.js" type="text/javascript"></script>
<?php } ?>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d6d17cc7199e672322f7470a-|49" defer=""></script></body>
</html>
