<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
	<link rel="shortcut icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/images/logo_16.png" >
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS ?>" /> 
	<?php global $urlRequestRoot;	global $PAGELASTUPDATED;
		if($PAGELASTUPDATED!="")
			echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
	?>
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/pure-min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/adminui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/error.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/side-menu.css" />
    <script language="javascript" type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/scripts/jquery-latest.js" ></script>
    <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/script.js"></script>
    <!-- One js file at the end of this file. -->

    <script language="javascript" type="text/javascript">
		//defined here for use in javascript
		var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
		var urlRequestRoot = "<?php echo $urlRequestRoot?>";
	</script>
</head>
<body onload="<?php echo $STARTSCRIPTS; ?>" >
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
			<?php //echo $ACTIONBARPAGE; ?>
        <div class="pure-menu pure-menu-open">
            <!--<a class="pure-menu-heading" href="#">Company</a>-->

            <ul>

                <!--<li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>

                <li class="menu-item-divided pure-menu-selected">
                    <a href="#">Services</a>
                </li>-->
				<?php echo implode(explode("</ul>", implode(explode("<ul class='topnav depth1'>",implode("<li>Home</li>", explode("Home",$MENUBAR)))))); ?>
                <hr/>
                <?php 
                	echo (implode("</li>", explode("</span>", implode("<li>", explode("<span class=\"cms-actionbarModuleItem\">", implode(explode("class=\"robots-nofollow\" rel=\"nofollow\"", $ACTIONBARMODULE)))))));
                	echo (implode("</li>", explode("</span>", implode("<li>", explode("<span class=\"cms-actionbarPageItem\">", implode(explode("class=\"robots-nofollow\" rel=\"nofollow\"", $ACTIONBARPAGE)))))));
                ?>

                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1><?php echo $cmstitle;?></h1>
        </div>

        <div class="content">
			<div class="pure-menu pure-menu-open pure-menu-horizontal">
				<?php echo (implode(explode("</div>", implode(explode("<div id=\"cms-breadcrumb\">", $BREADCRUMB))))); ?>
			</div>
			<hr/>
        	<?php echo $INFOSTRING; ?>
        	<?php echo $WARNINGSTRING;?>
        	<?php echo $ERRORSTRING; ?>
        	<?php echo $CONTENT; ?>
        </div>
    </div>
    <hr/>
    <div class="pure-u-1-1" id="footer" style="text-align:center;">
    	<?php echo $FOOTER;?>	
    </div>
</div>

<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/ui.js"></script>


</body>
</html>
