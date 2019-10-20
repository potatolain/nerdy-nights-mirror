<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				May 19, 2017 at 3:02:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Could anyone here help me understand a little more about the DMC channel?
<br>I&apos;m trying to figure out how to rip samples from other games which have instruments that I like.
<br>
<br>for instance, I&apos;ve been looking through the code of Earthbound 0. I&apos;ve set the debugger of FCEUX 2.2.2 to pause whenever the snare drum plays (break at $8E54). I see some code that looks like:
<br>
<br>LDA #$0F
<br>LDY #$02
<br>STA $4013 
<br>STY $4012
<br>
<br>if I pause it when the bass drum plays (break at $8E4E), it uses this code:
<br>
<br>LDA #$07
<br>LDY #$00
<br>...
<br>STA $4013 
<br>STY $4012
<br>
<br>from what I understand, $4013 is the length of the sample- 15 bytes. $4012 is part of the address, which is something like $C000 + value of $4012*64, right? 
<br>Additionally, I gathered from NESDEV that $4011 is where the played bits end up, but is handled internally by the APU, as it&apos;s never set in the game outside of resetting it to #$00.
<br>
<br>so that should mean at $C000 and $C080 I should find some bytes in the memory that look pretty random to fit all those bits in. but when I look at the first 7 bytes of $C000 in NES memory, all I see is
<br>
<br>$C000: FF FF FF FF FF FF FF
<br>
<br>and for $C080 I see
<br>
<br>$C080: FF B7 20 0B 00 00 00 00 C0 FF FF FF FF FF FF 
<br>
<br>neither of which look random enough to be an audio sample... Does anyone know what&apos;s going on here and can help me find the data I&apos;m looking for, or understand the data I do have? 
<br>
<br>thank you!
				</div><div class="mdl-card--border"></div>