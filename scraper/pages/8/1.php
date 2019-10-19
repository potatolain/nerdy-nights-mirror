<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				May 16, 2010 at 12:20:10 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					This carry stuff is pretty neat.  I saw the ADC used in MetalSlime&apos;s tutorials.  I have a couple questions, if you have a second.
<br>
<br>-You say that all pointer variables must come from the first 256 Bytes in RAM.  Why is this?  I&apos;m sure I&apos;m mistaken, but I thought that the music stuff was all kept in the $0300 block. 
<br>
<br>-Wouldn&apos;t it be better to set your inside loop to CPY #$F0 rather than $00?  When you leave it at $00 aren&apos;t you just overwriting your attributes anyway?  If attributes are kept in a seperate loop, you would be running the loop like $40 extra times.  Or are you planning on putting attributes in the loop eventually?
<br>
<br>-Might just note that you can use just &quot;pointer  .rs 2&quot; and then use the variables &quot;pointer&quot; and &quot;pointer+1&quot;.  This makes it simpler to keep track of variables when you have like 20 pointers. 
<br>
<br>I thought that I had another ? but now I can&apos;t remember what it was.  But I&apos;m having the same paragraph issue I was having in your MMC1 thread.
<br>
<br>Thanks for this.  Keep &apos;em comming!
				</div><div class="mdl-card--border"></div>