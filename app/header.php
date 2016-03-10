
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><?php echo $system[$current_lang.'_site_title']?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" type="text/css" href="_/css/style.css" />
    <link rel="stylesheet" type="text/css" href="_/css/skitter.styles.css" media="all" />
    
     <link rel="stylesheet" type="text/css" href="_/css/inner.css" />
    <link rel="stylesheet" href="_/css/prettyPhoto.css" media="screen" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css' />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="_/images/favicon.ico" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div id="bodychild">
	<div id="outercontainer">
    	
        <!-- HEADER -->
        <div id="outerheader">
            <header>
            	<section id="top">
                    <div id="logo">
                        <a href="index.html"><img src="_/images/logo.png" alt="" /></a>
                    </div>
                     <div id="tel">
                       <img src="_/images/wapp.png" alt="" />
                         <span><?php echo $system['whatsapp']?></span>
                    </div>
                  
                </section>
                
                <section id="navigation">
                    <nav>
                        <ul id="topnav" class="sf-menu">
                             <?php include_once "nav.php" ;?>
                          
                        </ul><!-- topnav -->
                        <div class="nav-right">
                            <a href="/?lang=tra">繁</a> | <a href="/?lang=sim">简</a>
                        </div>
                    </nav><!-- nav -->
                </section>
                                
                <div class="clear"></div>
            </header>
        </div>
        <!-- END HEADER -->