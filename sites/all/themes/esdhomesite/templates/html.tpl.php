<html lang="<?php print $language->language ?>">
<head>
	<?php print $head; ?>
	<?php print $styles; ?>
</head>
<body>
	<div id="page">
		<div id="nygov-universal-navigation" class="ny-logo-nav nygov-universal-container mobile" data-iframe="true" data-updated="2014-11-07 08:30">
	      <iframe id="nygov-nav-mobile" width="100%" height="50px" src="//static-assets.ny.gov/load_global_menu/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:86px;" scrolling="no">
	          Your browser does not support iFrames
	      </iframe>
	  	</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
		
		
		<div id="nygov-universal-footer" class="nygov-universal-container footer">
	            <iframe id="nygov-universal-footer-frame" class="nygov-universal-container" width="100%" height="125px" src="//static-assets.ny.gov/load_global_footer/ajax?iframe=true" data-updated="2014-11-07 08:30" frameborder="0" style="border:none; overflow:hidden; width:100%; height:125px;" scrolling="no">
	                Your browser does not support iFrames
	            </iframe>
	    </div>
	</div>
    
</body>
</html>