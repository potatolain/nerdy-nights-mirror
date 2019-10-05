<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				May 18, 2010 at 11:39:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br><p>Holy Christ...this one is pretty intense. My brain hurts. <br><br>I do have a question though.&#xA0; I have tried to use negative numbers before and the assembler rejected it. Not to sound too dumb, but how are you getting it to just let you &quot;add negative numbers&quot;? </p><p></p></div><br><br>-1 gets interpreted by the assembler as $FF.&#xA0; -2 is $FE, -3 is $FD, etc.&#xA0; I use the negative values because it&apos;s easier to read and understand what they&apos;re used for, but in the final ROM they will appear as FF, FE, etc.<br><br>If you try out some 8bit addition, you can see that they work the same:<br><br>1 + FF = 0&#xA0; (carry set)<br>2 + FF = 1<br>3 + FF = 2<br>etc..<br>
				</div><div class="mdl-card--border"></div>