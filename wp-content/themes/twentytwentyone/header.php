<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	  <link rel="stylesheet" href="../wp-includes/css/bootstrap.css">
	  <script src="../wp-includes/js/jquery.js"></script>
	  <script src="../wp-includes/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<!--?php get_template_part( 'template-parts/header/site-header' ); ?-->

<style>
.fanheader{
	padding-left:40px;
	padding-right:40px;
	padding-bottom:20px;
	padding-top:20px;
}
.headerLogo{
	max-width:100px;
}
</style>
<style>
body{
	background-color:white;
}
.wrapper{
	margin:0 auto;
	max-width:1100px;
}
.container{

}
.wrapper h1{
	margin-top:10px;
	margin-bottom:10px;
	color:#291b64;
	font-size:30px;
	font-weight:bold;
}
.wrapper h2{
	margin-top:10px;
	margin-bottom:10px;
	color:#604bd8;
	font-size:20px;
}
.wrapper h3{
	margin-top:10px;
	margin-bottom:10px;
	color:#604bd8;
	font-size:20px;
}
.wrapper p{
	margin-top:10px;
	margin-bottom:10px;
	color:#666666;
	font-size:12px;
}
.no-padding{
	padding-left: 0px !important;
	padding-right: 0px !important;
}
.introPanel{
	overflow: hidden;
}
.introPanel div{
	margin-bottom: -9999px;
	padding-bottom: 9999px;
}
.slideshowWrapper{
	padding:0px;
}
.slideshowWrapper img{
	width:100%;
	margin:0px;
	padding:0px;
}
.introBlueBox{
	background-color:#5d49d2;
}
.introTextBox{
	padding:100px;
	margin-bottom:100px;
}
.introBlueBox h1{
	color:white;
	font-size:30px;
}
.introBlueBox h2{
	color:white;
	font-size:20px;
}
.introBlueBox h3{
	color:#cfff4d;
	font-size:12px;
}
.otherPanels{
	overflow: hidden;
	margin:60px;
}
.otherPanelsTextBox{
	padding:40px;
	margin-bottom:40px;
}
.otherPanels div{
	margin-bottom: -9999px;
	padding-bottom: 9999px;
}
.otherPanels div img{
	width:100%;
	border-radius: 10px;
}
</style>
<style>
.findoutPanels{
	padding-left:40px;
	padding-right:40px;
	background-image:url("../wp-includes/images/findoutPanelBG.png");
	background-repeat:repeat-x;
	padding-bottom:40px;
}
.moreBox{
	background-color:white;
	padding:30px;
	margin-top: 10px;
	margin-bottom: 10px;
	border-radius: 10px;
    box-shadow: 0px 0px 6px rgba(41, 27, 100, 0.2), 0 0 6px rgba(41, 27, 100, 0.2);
}
.moreLink{
	text-align:center;
}
.moreLink a{
	color:white;
}
.moreLink span{
	display: inline-block;
	vertical-align: text-bottom;
}
.fanfooter{
	background-color:#1d153c;
	padding:40px;
}
.fanfooter div{
}
.fanfooter p{
	color:white;
	margin-top:20px;
}
.fanfooter a{
	color:#cfff4d;
	margin-top:20px;
}
.socialIconsDiv{
	float:right;
}
.footerbase{
	height:10px;
	background-color:#291b64;
	margin-top:0px;
	padding:0px;
	margin-bottom:40px;
}

.fanButton{
	border-radius: 20px;
	min-height:30px;
	min-width:120px;
	margin-right:20px;
}
.fanButtonGreen{
	background-color: transparent;
	border:1px solid #cfff4d;
	color:white;
}
.fanButtonBlue{
	background-color: #604bd8;
	border:1px solid #604bd8;
	color:white;
}
.fanButtonWhite{
	background-color: transparent;
	border:1px solid #604bd8;
	color:#604bd8;
}
</style>

<div class="wrapper">
	<div class="fanheader">
		<div class="row">
			<div class="col-sm-3">
				<img src="../wp-includes/images/logo.png" class="headerLogo">
			</div>
			<div class="col-sm-9">
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			</div>
		</div>
	</div>


