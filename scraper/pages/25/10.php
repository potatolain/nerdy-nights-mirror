<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Apr 20, 2010 at 11:48:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Another good thing to check out (though it sounds like you already might have) is the drawing buffer in Metalslime&apos;s skeleton.asm file.  It took me awhile to get it, but it&apos;s a really good, easy-to-read implementation of what Disch discusses in his &quot;Frame and NMI&quot; document about preparing a string of data during rendering and then loading it in once NMI fires.
<br>
<br>Anymore I don&apos;t put anything in NMI unless it&apos;s strictly a drawing load/store function or something I&apos;m told is absolutely necessary to be there.  There are some healthy debates on nesdev over the whether or not you really need to strip down your NMI code like that, but from what I&apos;ve read I just don&apos;t see the need to put anything there that isn&apos;t a write to the PPU.
				</div><div class="mdl-card--border"></div>