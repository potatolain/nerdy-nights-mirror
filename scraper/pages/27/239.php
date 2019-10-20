<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 25, 2014 at 12:35:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	BMI and BPL deal with bit 7, or %10000000.<br>
	<br>
	BCS and BCC deal with greater/less than. In that case, you&apos;d use bcc.</div>
Interesting, BMI working great for me in many locations.<br>
<br>
From what I read, the CMP will set the Negative flag (bit 7) if the compare is negative. In my case, I am enabling features in later levels. So, I compare the LevelVariable (set to Level 1) to #$04. The compare sets the negative flag because 1-4= -3. Once the Negative Flag clears in the compare (4-4=0 or 5-4=1), then the new feature is unlocked for the rest of the game.<br>
<br>
<strike>I will be posting my new ROM in a bit </strike>on the private thread. You can check it out there.<br>
<br>
EDIT: New ROM was posted last night.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>