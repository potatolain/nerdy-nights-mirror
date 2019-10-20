<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Aug 5, 2013 at 12:14:00 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					kidkratos, I&apos;m sorry.  I don&apos;t know the answers to your questions.  I was hoping someone more knowledgeable would pipe up.  We&apos;ll cross our fingers.
<br>
<br>Beau, the way I would probably code your problem is like this:
<br>
<br>1.) Check to see if your block is overlapping the key sprites in any location.  If so, set a zero page variable flag to 1.
<br>2.) Have a subroutine constantly checking to see if that variable is 1.  If so, move that sprite(s) in exactly the same way your controller is moving your block.
<br>
<br>When sprites need to be moved off screen, you can just move them to #$FF in either the x or y position.  Just keep in mind that if you have too many sprites moved to #$FF on the same scanline, you&apos;re going to run into problems!
<br>
<br>As always, my email address is always open to you, friend.
				</div><div class="mdl-card--border"></div>