<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Aug 4, 2014 at 6:39:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
		<br>
		Hmm, not really sure what is going on with this, but here goes. I&apos;ve got saves up and running, for the most part, but have a small problem. The program seems to only be reading the first 15 .rs spaces (bytes?) at $6000. I&apos;ve moved things around in terms of order, and this seems to be what is going on (i.e. if things are switched around, different things save, etc.). Is this normal? Any thoughts?</div>
	Not normal. The entire 8 KB at $6000..7FFF is saved.<br>
	<br>
	Here&apos;s my suggestion: open up the Hex Editor in FCEUX to see what&apos;s actually at $6000..7FFF. Then close the emulator and FCEUX should save the contents into a .SAV file somewhere (for me it&apos;s &quot;C:\Program Files (x86)\fceux\sav&quot;). Open the save file in an (external) hex editor like HxD and verify that the contents are what they should be. Play around with your code and hex editors until you can make sense of what&apos;s wrong in your program.<br>
	<br>
	&#xA0;</div>
<br>
The contents are what they should be, for the first 15 locations at the $6000 range at least, but then beginning on space 16 there are only zeroes for the rest of the $6000 block. If I write new values to what should be at these locations in the program itself (i.e. registering a name in one of the spots that it is writing a string of whatever happens to be at the #$00 address in my CHR file), then things change as they should. When power is pulled, however, they change back to zeroes.<br>
<br>
EDIT: Might have figured it out. I&apos;ll update once I try a few more things.<br>
<br>
ANSWER (in case it helps anybody out in the future): I was running the wrong value prior to setting up the MMC1 (equivalent to Bunny&apos;s ConfigWrite in his MMC1 tutorial). Still not sure if I understand the whole process all the way, but in place of running #%01101111 I was running #%00001111, which is how I ended up with 15 (or %1111). I think anyways. Regardless, it all works now. Check off one more fictitious problem for me <span class="sprites_emoticons absmiddle" id="emo_smile"></span>, and thanks for your help Kalle!
				</div><div class="mdl-card--border"></div>