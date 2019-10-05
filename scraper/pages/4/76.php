<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Dec 30, 2014 at 8:41:03 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	So, I tried to change the palete by changing the values in .db, but it just came up a black screen. Does the directives only use certain values in the palette based on the Chr rom ? Is this what is meant by High and low byte like the pallet is based off the value of high or low byte ?&#xA0; Also, not sure if it is covered latter on, but how do I start making a sprite from ground up ? I downloaded Nindraw the learning curve is hard to use. I wanted to fool around with changing the color and sprite formation for learning purposes. I opened up the mario.chr file with textedit and just got some weird unicode. What is that code or should I use like tile molester to open that up and mess with it ?</div>
<br>
Yes, the CHR file is a binary file so you can&apos;t open it in a text editor and expect to make sense of it.&#xA0; It is best opened in a program like TileLayerPro or Tile Molester, like you suggested.<br>
<br>
And make sure you are changing the values in the correct .db table, since half of it is for background colors and half of it is for sprite colors.&#xA0; Plus the first value of each set of four colors is the transparency color, like Jack mentioned.&#xA0; Changing that value for sprites would make no difference since that color doesn&apos;t actually visually show up.<br>
<br>
				</div><div class="mdl-card--border"></div>