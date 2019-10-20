<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 30, 2014 at 5:51:11 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>IIRC, and I may not cause I&apos;m dumb, but NMI is just a notification.  It will jump to your NMI vector EVERY time the notification hits.  So, if you&apos;re going to stick a bunch of shit in NMI, you need to disable it first thing then re-enable it last thing.  This will keep it from interrupting it&apos;s self.  
<br>
<br>The system has no way of knowing if you&apos;ve finished your operations or not and called RTI.  NMI is just that, an interrupt.  It will jump to the vector and it&apos;s up to you to return from it.</div><br><br><br>Thanks! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br><br>Exactly the answer I was looking for!<br><br>So, it doesn&apos;t matter if the program is executing code inside the main loop or the NMI loop. If $2000 is not disabled, every 1/60th of a second it will restart running from the beginning of the NMI code! If so, I learned something for sure today!<br><br>Thanks, appreciated! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br><br>- user
				</div><div class="mdl-card--border"></div>