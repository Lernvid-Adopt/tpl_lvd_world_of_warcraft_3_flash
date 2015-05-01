<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<?php require("head_includes.php"); ?>
<body>
<div id="wrapper">
	<div id="bg_up">
		<div id="masthead_container">
			<div id="masthead">
				<?php if (($this->params->get('showGuildName')) !=0) : ?>
					<a id="guild_name" href="index.php" style="position:relative; color: #<?php echo  $this->params->get('FontColor');?>; ; font-size:<?php echo  $this->params->get('FontSize');?>px; z-index:5;"><?php echo  $this->params->get('GuildName');?></a>
				<?php endif;?>
				<?php if (($this->params->get('useFlashHeader')) !=0) : ?>
					 <div style="position:absolute; top:0; left:0; z-index:0;">
		                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						   codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
						   width="1000" height="400">
							<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/wow3_header.swf" /> 
							<param name="quality" value="high" />
							<param name="menu" value="false" />
							<param name="wmode" value="transparent" />
							<param name="allowScriptAccess" value="sameDomain" />
							<!--[if !IE]> <-->
						    	<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/wow3_header.swf"
											width="1000" height="400" type="application/x-shockwave-flash">
									 <param name="quality" value="high" />
									 <param name="menu" value="false" />
									 <param name="allowScriptAccess" value="sameDomain" />
									 <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
									 <param name="wmode" value="transparent" />
									 The browser should render some flash content, not this. Go to Adobe Page and Download Adobe Flash Player Plugin.
								</object>
							<!--> <![endif]-->
						</object>
					 </div>
				<?php endif;?>
			</div>
		</div>
		<div id="container">
			<?php if($this->countModules('user3')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="user3" />
				</div>
			<?php endif; ?>
			<div id="page_content">
				<div id="content_up">
					<div id="content_up_left">
						<?php if($this->countModules('breadcrumb')) : ?>
							<div id="breadcrumbs">
				            	<jdoc:include type="module" name="breadcrumbs" />
						    </div>
						<?php endif; ?>
						<div id="content_up_right">
							<?php if($this->countModules('user4')) : ?>
								<div id="search">
									<div id="search_inner">
							             <jdoc:include type="modules" name="user4" />
									</div>
								</div>
							<?php endif; ?>		
						</div>
					</div>
				</div>
				<?php if($this->countModules('wow3-slider')) : ?>
					<div id="wow3-slider"><jdoc:include type="modules" name="wow3-slider" /></div>
				<?php endif; ?>		
					<?php if($this->countModules('left')) : ?>
						<div id="sidebar_left">
				             <jdoc:include type="modules" name="left" style="wowround_left" />
						</div>
					<?php endif; ?>		
					<?php if($this->countModules('right')) : ?>
						<div id="sidebar_right">
				             <jdoc:include type="modules" name="right" style="wowround_right" />
						</div>
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<?php if($this->countModules('user1 or user2')) : ?>
							<div id="user_modules1">
								<?php if($this->countModules('user1')) : ?>
									<div id="user1">
							           <jdoc:include type="modules" name="user1" style="wowround" />
									</div>
								<?php endif; ?>			
								<?php if($this->countModules('user2')) : ?>
									<div id="user2">
							           <jdoc:include type="modules" name="user2" style="wowround" />
									</div>
								<?php endif; ?>			
							</div>					
						<?php endif; ?>		
						<?php if($this->countModules('top')) : ?>
							<div id="top">
					             <jdoc:include type="modules" name="top" style="wowround" />
							</div>
						<?php endif; ?>		
						<div id="maincontent">
							<jdoc:include type="message" />
							<jdoc:include type="component" />
						</div>
					</div>
				</div>	
				<div class="clr"></div>
				<div id="content_down">
					<div id="content_down_left">
						<?php if (($this->params->get('useFlashHeader')) !=0) : ?>
			                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
							   codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
							   width="1000" height="20">
								<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/content_down.swf" /> 
								<param name="quality" value="high" />
								<param name="menu" value="false" />
								<param name="wmode" value="transparent" />
								<param name="allowScriptAccess" value="sameDomain" />
								<!--[if !IE]> <-->
							    	<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/content_down.swf"
												width="1000" height="20" type="application/x-shockwave-flash">
										 <param name="quality" value="high" />
										 <param name="menu" value="false" />
										 <param name="allowScriptAccess" value="sameDomain" />
										 <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
										 <param name="wmode" value="transparent" />
										 The browser should render some flash content, not this. Go to Adobe Page and Download Adobe Flash Player Plugin.
									</object>
								<!--> <![endif]-->
							</object>
						<?php endif; ?>				
					</div>
				</div>	
			<div id="container2">
				<?php if($this->countModules('user5 or user6')) : ?>
					<div id="user_modules2">
							<?php if($this->countModules('user5')) : ?>
								<div id="user5">
									<jdoc:include type="modules" name="user5" style="wowround" />
								</div>
							<?php endif; ?>				
							<?php if($this->countModules('user6')) : ?>
								<div id="user6">
									<jdoc:include type="modules" name="user6" style="wowround" />
								</div>
							<?php endif; ?>				
					</div>
				<?php endif; ?>				
				<div id="footer">
					<div id="date"><p><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?></p></div>
					<div id="copyright_info">
						<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					</div>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					</div>
				<?php endif; ?>
				<div class="clr"></div>
				<div id="designed_by">
					<p>Cataclysm is a trademark, and World of Warcraft and Blizzard Entertainment are trademarks or registered trademarks of Blizzard Entertainment, Inc. in the U.S. and/or other countries.</p>
					<p>This site is in no way associated with Blizzard Entertainment</p>
					<br></br>
					<p>Design by: <a href="http://www.lernvid.com" title="Templates" target="_blank">LernVid.com</a> feat. <a href="<?php echo $url2 ?>" target="_blank">game-template</a> sponsored by <a href="<?php echo $url ?>" target="_blank">WoW Guide</a></p>
					<p class="gotop"><a href="#">top</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>