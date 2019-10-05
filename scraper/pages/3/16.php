<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jun 7, 2008 at 3:17:34 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Sivak</b></i><br><br><br>The loop could also have been set up like this:<br><font face="courier">
&#xA0;&#xA0;LDX #$FF<br>
.loop:<br>
&#xA0;&#xA0;;Do whatever code you want<br>
&#xA0;&#xA0;DEX<br>
&#xA0;&#xA0;BNE .loop</font><br><br><br>That&apos;s the best way to do most counting loops.<br></div><br>Except that loop will only run 255 times, not 256. &#xA0;When the loop is run with X=1, the dex makes X=0, and it ends. &#xA0;The 0th time thro the loop is never run. &#xA0;To make it correct it should be ldx #$00 at the top.
				</div><div class="mdl-card--border"></div>