<div class="mdl-card__title"><strong>rizz</strong> posted on 
		
			
				
				May 8, 2010 at 2:28:27 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi MetalSlime/Thomas,
<br>
<br>First &amp; foremost, your sound lessons are fantastic.  I&apos;ve been liking the extra tips that you throw in as well, and your simplicity makes it easy to envision other areas of code that can benefit from your examples.
<br>
<br>
<br>I&apos;m writing to ask about this part of your code, which manually deals with 8-bit addition:
<br>    clc
<br>    adc stream_ptr_LO, x    ;add Y to the LO pointer
<br>    sta stream_ptr_LO, x
<br>    bcc .end
<br>    inc stream_ptr_HI, x    ;if there was a carry, add 1 to the HI pointer.
<br>
<br>
<br>As far as I know, this could be done instead:
<br>sta stream_ptr_LO, x
<br>LDA stream_ptr_HI, x
<br>ADC #$00
<br>STA stream_ptr_HI, x
<br>
<br>Was there any specific reason why you chose to check a branch condition?
				</div><div class="mdl-card--border"></div>