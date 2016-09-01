<?php
	
?>

<header>
	
	<!-- Main Navigation -->
	
	<section id="main-nav">
		<div class="row align-middle">
				<div class="column small-3">
					<div class="logo proxima-bold">
						<a href="<?php print $GLOBALS['base_url']; ?>">
							<span>Empire State
							</span><br />
							<span>Development
							</span>
						</a>
					</div>
				</div>
				<div class="column small-8 small-offset-1">
					<nav>
						<ul class="proxima">
							<li><a href="">Why NYS?</a>
							</li>
							<li><a href="">Doing Business in NYS</a>
							</li>
							<li><a href=""><span>Industries</span></a>
							</li>
							<li><a href=""><span>Regions</span></a>
							</li>
							<li><a href=""><span>About Us</span></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section> 
	
	<!-- Sub Navigations -->
	
	<section id="sub-navs">
		
		<div class="sub-nav">
			<div class="row">
				<ul>
					<li><div><a style="" href=""><span>How NYS Can Help</span></a></div>
					</li>
					<li><div><a style="" href=""><span>Small Business Hub</span></a></div>
					</li>
					<li><div><a style="" href=""><span>Minority and Women Owned Business</span></a></div>
					</li>
					<li><div><a style="" href=""><span>Requests for Proposals</span></a></div>
					</li>
				</ul>
			</div>
		</div>
		
	</section>
	
</header>


	<div class="page-wrapper">
		<div class="row">
			<div class="column small-12">
	
	<?php if ($page['highlighted']): ?>
		<div id="highlighted"><?php print render($page['highlighted']); ?></div>
	<?php endif; ?>

    <?php if ($tabs): ?>
    	<div id="tab-nav">
    		<?php print render($tabs); ?>
    	</div>
    <?php endif; ?>
    
    <?php print render($page['help']); ?>
    
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	
	<?php
		print render($page['content']);
	?>
	
	
			</div>
		</div>
	</div>

