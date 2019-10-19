<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 16, 2010 at 1:02:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
<br>-You say that all pointer variables must come from the first 256 Bytes in RAM.  Why is this?  I&apos;m sure I&apos;m mistaken, but I thought that the music stuff was all kept in the $0300 block.&#xA0;</div><div><br></div>To use the Indirect Indexed mode, only the low byte of the location in the brackets is used, so your pointer location needs to have the high byte be zero. &#xA0;The high byte is just thrown away:<pre>  .rsset $0004
pointer .rs 2
  lda [pointer], y   ; this is the same as lda [$04], y
</pre>
<pre>  .rsset $0304
pointer .rs 2
  lda [pointer], y   ; this is also the same as lda [$04], y
</pre>
<br>MetalSlime uses $0300 for some variables like sound_disable_flag, but also uses zero page for pointers like the sound_ptr and jmp_ptr.<div><br><br><br><br><div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>-Wouldn&apos;t it be better to set your inside loop to CPY #$F0 rather than $00?  When you leave it at $00 aren&apos;t you just overwriting your attributes anyway?  If attributes are kept in a seperate loop, you would be running the loop like $40 extra times.  Or are you planning on putting attributes in the loop eventually?
<br></div><div><br></div>For that example I have the attribute data right after the background data, so both are copied in one loop. &#xA0;That also means the next set of background/attributes will be aligned with the address low byte = $00.<div><br></div><div>But for a real game yes separating out the bg and attributes is usually a good idea.<br></div><div><br><br><br><br><div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>-Might just note that you can use just &quot;pointer  .rs 2&quot; and then use the variables &quot;pointer&quot; and &quot;pointer+1&quot;.  This makes it simpler to keep track of variables when you have like 20 pointers. <br></div><br>Yup! &#xA0;But for beginners remembering the Lo then Hi part is important. &#xA0;You could also do pointerLo .rs 2 and use pointerLo and pointerLo+1. &#xA0;
</div></div>
				</div><div class="mdl-card--border"></div>