<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Mar 28, 2014 at 12:23:33 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Basically:
<br>
<br>$3F00,$3F04,$3F08,$3F0C are the background palettes. Only $3F00 is used for rendering, it&apos;s the background color. Sprite entries with the %00 bottom bits mirror down to the BG palette entries. So, $3F10 mirrors to $3F00, $3F14 mirrors to $3F04, etc. So you have to write the BG color to $3F10 too, or you will get an incorrectly colored background. The other entries do nothing, though, so those don&apos;t matter unless you store 3 values there for whatever reason. But that is something not mentioned here AFAIK, but can be important/problematic.
				</div><div class="mdl-card--border"></div>