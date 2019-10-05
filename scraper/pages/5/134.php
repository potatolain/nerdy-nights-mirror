<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 9, 2015 at 10:58:30 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	Yeah, I just added the code that I thought would move the sprite up and down based on what someone else posted. Everything is in place as normal. I push the A and B buttons but they just move it left to right.<strong> I&apos;m trying to figure out how to get the sprite to move up and down using the up and down buttons</strong>. I assumed the $0200 was to set for the Y movements and $203 was for the X coordinates. I am also not getting how to move multiple sprites. I tried setting it to the 8x16 byte in $2000, but the sprite is scrabbled and the sprite is still in the same position as before.</div>
<br>
Sequence:<br>
<br>
LDA $4016<br>
AND #%00000001 ; A button<br>
<br>
LDA $4016<br>
AND #%00000001 ; B button<br>
<br>
LDA $4016<br>
AND #%00000001 ; Select<br>
<br>
LDA $4016<br>
AND #%00000001 ; Start<br>
<br>
5th and 6th time you do so...<br>
<br>
LDA $4016<br>
AND #%00000001 ; Up<br>
<br>
LDA $4016<br>
AND #%00000001 ; Down<br>
<br>
7th and 8th time you do so...<br>
<br>
LDA $4016<br>
AND #%00000001 ; Left<br>
<br>
LDA $4016<br>
AND #%00000001 ; Right<br>
<br>
But you obviously use a loop to make things more rational to read, and save space in the ROM. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
Hope this helps! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<strong>Edit</strong>: I messed up U/D/L/R
				</div><div class="mdl-card--border"></div>