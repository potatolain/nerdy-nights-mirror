<div class="mdl-card__title"><strong>Zzap</strong> posted on 
		
			
				
				Jul 6, 2008 at 2:05:03 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Did you increase the attribute&apos;s in this section so you had more? There were only enough attribute entries for the number of background tiles copied before, so you&apos;ll need to add more into this section to make it correct
<br>
<br>attribute:
<br>  .db %00000000, %00010000, %0010000, %00010000, %00000000, %00000000, %00000000, %00110000
<br>
<br>Compare to #$00 instead of #$FF, this will do a complete 256 tiles. To do more tiles than this, you&apos;ll need to use both the X and Y registers in the loop.
				</div><div class="mdl-card--border"></div>