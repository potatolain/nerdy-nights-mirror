<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				May 8, 2010 at 9:35:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>rizz</b></i><br><br>Hi MetalSlime/Thomas,
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
<br>Was there any specific reason why you chose to check a branch condition?</div><br><br>Thanks.&#xA0; Glad you find the tutorials helpful.&#xA0; As far as branching vs. adding 0, I didn&apos;t really have a specific reason to use one over the other.&#xA0; I&apos;m just more accustomed to doing it the bcc way.<br><br>But now that I think about it, branching is probably slightly better performance-wise.&#xA0; A &quot;bcc&quot; and an &quot;inc abs,x&quot; take up 5 bytes of ROM space.&#xA0; &quot;lda abs,x&quot;, &quot;adc&quot;, &quot;sta abs,x&quot; takes up 8 bytes of ROM space.&#xA0; Most of the time the carry will be clear, so skipping instructions in the most common case saves some cpu cycles too.&#xA0; Even when the carry is set, the INC takes fewer cycles than the LDA/ADC/STA combo.<br><br>By the way, I had to look that up just now.&#xA0; I&apos;m not a cycle counter so I don&apos;t know any of this stuff off the top of my head <img src="images/blank.gif" border="0" style="display: none;" original-src="/media/_images/expressions/face-icon-small-smile.gif">.&#xA0; I never considered any of this when I wrote the code.&#xA0;&#xA0; The savings are negligible, so it seems like a pick &apos;em to me.<br>
				</div><div class="mdl-card--border"></div>