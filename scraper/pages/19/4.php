<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Sep 29, 2009 at 2:22:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					As I was saying I was looking at how you did the text strings, but I have a few questions about them to see if I can use the idea in my next game. Below is a screen shot from Wizardry and it uses the type of display I want to use.<img hspace="0" vspace="0" border="0" align="0" src="scraper/images/07002427-CF1D-7AA0-005F77DB3C2E5350.JPG" alt="0" original-src="http://www.nintendoagemedia.com/users/93/photobucket/07002427-CF1D-7AA0-005F77DB3C2E5350.JPG"><br><br>I want to split the screen with the red circles and be able to update the red lines within those circles independently.<br><br>The top left would be used for some picture graphics, top right would be some test like the example, and the bottom would be some status and inventory info. <br><br>1) Now your text loading doesn&apos;t load a bunch of tiles. it pretty much just loads &quot;playing&quot;, &quot;not&quot;, &quot;disabled&quot;, etc...so like maybe 10 tiles. I&apos;m wondering is there a limit to the amount of tiles I can load using your method, or will I run out of vblank time. Kinda like how you can only load 64 sprites per frame? <br><br>2) You don&apos;t load any other background besides the text in your tutorial, so the background just fills the other space with $00. I want to put a border in like in the example with the white lines. Can I load the border once, and then just update the lines within the border? I know I can make strings that start and terminate at the spots I want, but I don&apos;t know if I can have a static border or not? <br><br>Pretty much that&apos;s all I want to do. Have that static boarder, and then be able to use text/graphic strings to fill in the areas of the boarders independently. You&apos;re code seems like it can be modified to do such, but I don&apos;t know if there&apos;s any hardware limitations to it. <br>
				</div><div class="mdl-card--border"></div>