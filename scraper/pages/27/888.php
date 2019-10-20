<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Jan 16, 2017 at 3:44:12 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
can you show me what that sub routine does?</div>
<br>
SetPPU:<br>
<br>
&#xA0;&#xA0; &#xA0;PHA<br>
&#xA0;&#xA0; &#xA0;LDA $2002<br>
&#xA0;&#xA0; &#xA0;PLA<br>
&#xA0;&#xA0; &#xA0;STA $2006 ;input A = high byte of draw location<br>
&#xA0;&#xA0; &#xA0;STX $2006 ;input X = low byte of draw location<br>
<br>
&#xA0;&#xA0; &#xA0;RTS<br>
<br>
Yeah, that kind of approach is what I&apos;ve tried to do before... doesn&apos;t seem to do anything though. but, now that I have the clarification on what RAM we&apos;re referring to, I can get something going! thanks for that.&#xA0;<br>
&#xA0;
				</div><div class="mdl-card--border"></div>