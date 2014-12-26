<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}

/*
 * Created on Sep 28, 2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pragyan CMS v3 - Installation</title>

		<link rel="index" href="./" title="Home" />
		<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo $templateFolder ?>/css/pure-min.css" />
		<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo $templateFolder ?>/css/main.css" />
	</head>

	<body>
		<!-- Main -->
		<div id="main" class="box">

			<!-- Header -->
			<div class="pure-g" id="header">
				<!-- Logotyp -->
				<div class="spacer pure-u-4-24"></div>
				<h1 class="pure-u-18-24" >Pragyan CMS Installation</h1>
				<hr class="noscreen" />
			</div> <!-- /header -->

			<!-- Main menu (tabs) -->
			<div id="tabs" class="pure-menu pure-menu-open pure-menu-horizontal noprint">
			<h3 class="pure-menu-heading" id="tabhead">Installation Progress</h3>
				<ul class="box">
					<li <?php echo ($installPageNumber == 1 ? 'class="pure-menu-selected"id="seltab"' : ''); ?>><a style="cursor: default">Prerequisites</a></li>
					<li <?php echo ($installPageNumber == 2 ? 'class="pure-menu-selected"id="seltab"' : ''); ?>><a style="cursor: default">Configuration</a></li>
					<li <?php echo ($installPageNumber == 3 ? 'class="pure-menu-selected"id="seltab"' : ''); ?>><a style="cursor: default">Finalize Installation</a></li>
				</ul>
				<hr class="noscreen" />
			</div> <!-- /tabs -->

			<!-- Page (2 columns) -->
			<div id="page" class="pure-g" style="">
				<div id="page-in" class="pure-u-3-24" style=""></div>
				<div id="page-in" class="pure-u-15-24" style="">

				<?php echo $installPageContent; ?>

				</div> <!-- /page-in -->
		</div> <!-- /page -->

			<!-- Footer -->
			<div id="footer">
			<hr class="noscreen" />
			<div  class="pure-g">
				<span class="pure-u-2-5"></span>
				<span class="pure-u-3-5">Pragyan CMS v3 Installation</span>
			</div> 
			</div> 		<!-- /footer -->

		</div> <!-- /main -->
	</body>
</html>
