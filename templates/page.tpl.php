<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
	<title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>


<script type="text/javascript">
// Preload stylesheet to hide faculty a-z tab content, "Faculty by Subject" heading, and faculty by subject block on faculty list A-Z page, if javascript enabled; else show
/* <![CDATA[ */
document.write('<link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/all/themes/stemcellcenter/css/preload.css" />');
/* ]]> */
</script>

  <?php print $scripts; ?>

</head>
 
 
<body class="<?php print $body_classes; ?>"> 
 
<!--//BEGINNING OF WRAPPER//--> 
 
<div id="wrapper"> 
 
	<div id="banner"> 
		<div> 
			<a href="http://www.ucsf.edu" class="first">University of California, San Francisco</a> 
			<a href="http://www.ucsf.edu/about">About UCSF</a> 
			<a href="http://www.ucsf.edu/ucsf/search">Search UCSF</a> 
			<a href="http://www.ucsfhealth.org/">UCSF Medical Center</a> 
		</div> <!--//END OF BANNER LINKS//--> 
	</div> <!--//END OF BANNER//--> 
	


	<!-- TODO: Use image replacement technique -->
	<div id="slogan" class="clearfix"> 
		<a href="<?php print base_path(); ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/slogan2.gif" alt="Eli and Edythe Broad Center of Regenerative Medicine and Stem Cell Research"/></a> 
	</div>
	
	 <div id="header-region" class="clear-block"><?php print $header; ?></div>
 
<!--//BEGINNING OF NAVIGATION//--> 
<nav> 
 <div class="nav"> 
 
		<?php if ($nicemenus): ?>
		  <div id="nicemenus"><?php print $nicemenus; ?></div>
		<?php endif; ?>

</div> 
 </nav> 
<!--//END OF NAVIGATION//--> 
 
 <!--//BEGINNING OF CONTENT CONTAINER//--> 
 
 <div id="content_home"> 
  
<!--//BEGINNING OF TOP SECTION//--> 
 
 	<div id="top"> 
    
		<div id="main">
			<div id="content">
				<?php if ($title): ?>
				<h1><?php print $title; ?></h1>
				<?php endif; ?>
					
				<?php if ($tabs): ?>
				<div class="tabs">
					<?php print $tabs; ?>
				</div>
				<?php endif; ?>
					
				<?php if ($show_messages): print $messages; endif; ?>
				<?php print $help; ?>		
				
				<?php if ($top_content): ?>
					<?php print $top_content; ?>
				<?php endif; ?>				
							
				<?php print $content; ?>
			</div><!--//END OF CONTENT//-->
		</div>
		
		<div id="sidebar">
			<?php print $right; ?>
		</div>

    </div><!--//END OF TOP //--> 
    
	<div id="bottom" class="clearfix">
		<?php if ($bottom_left): ?>
			<div id="bottom-left" >
	    		<?php print $bottom_left ?>
			 </div>
	  	<?php endif; ?>
	
		<?php if ($bottom_right): ?>
		  <div id="bottom-right" >
		    <?php print $bottom_right ?>
		  </div>
		<?php endif; ?>
 	</div><!--//END OF BOTTOM //--> 

</div> <!--//END OF CONTENT CONTAINER//--> 
 
 
<!--//BEGINNING OF FOOTER//--> 
 
<div id="footer"> 
 
 <!--//BEGINNING OF FOOTER LOGOS//--> 
  
  <div id="footer_logos"> 
  
 
  <div id="donate"><a href="https://makeagift.ucsf.edu/site/SPageServer?pagename=A1_API_GeneralGivingForm"><img src="<?php print base_path() . path_to_theme(); ?>/images/donate.gif" alt="donate icon" /></a></div> 
   <div id="legal"></div> 
  </div> 
 
<!--//END OF FOOTER LOGOS//--> 
  
  </div> 
  
<!--//END OF FOOTER//--> 
 
</div> 
 
<!--//END OF WRAPPER//--> 
 

<?php print $closure; ?>
</body> 
</html>