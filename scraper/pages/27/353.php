<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Jul 1, 2014 at 3:30:30 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve never messed with saving, but I did write a nasty password feature with multiple encryption sequences for BAN. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> So take this with a grain of salt.<br>
<br>
I&apos;d imagine that you need to write code that saves variables in a certain way and then a decode routine that restores the things you want to save. For example, for your room location, push A, it writes the room coords to the save WRAM. Same with the weapons, events, health, ammo, etc. Just make a routine that checks the status of each &quot;save bank&quot; and writes the data to the appropriate place in RAM to &quot;load the saved data&quot;. It&apos;s not really complicated.<br>
<br>
For BAN, it records the encryption routine number, level, score, lives, etc. and mixes them all up so it spits out the password that has yet to be broken.<br>
<br>
Then, when you enter a password, it reads the encryption routine number, and re-writes all the relevant data to their places in RAM, runs the room load routine, and starts you on level X with Y lives, etc.<br>
<br>
Pretty straightforward and not too difficult to add to if you need to include something new.
				</div><div class="mdl-card--border"></div>