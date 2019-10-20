<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 4, 2014 at 12:36:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	Hmm, not really sure what is going on with this, but here goes. I&apos;ve got saves up and running, for the most part, but have a small problem. The program seems to only be reading the first 15 .rs spaces (bytes?) at $6000. I&apos;ve moved things around in terms of order, and this seems to be what is going on (i.e. if things are switched around, different things save, etc.). Is this normal? Any thoughts?</div>
Not normal. The entire 8 KB at $6000..7FFF is saved.<br>
<br>
Here&apos;s my suggestion: open up the Hex Editor in FCEUX to see what&apos;s actually at $6000..7FFF. Then close the emulator and FCEUX should save the contents into a .SAV file somewhere (for me it&apos;s &quot;C:\Program Files (x86)\fceux\sav&quot;). Open the save file in an (external) hex editor like HxD and verify that the contents are what they should be. Play around with your code and hex editors until you can make sense of what&apos;s wrong in your program.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>