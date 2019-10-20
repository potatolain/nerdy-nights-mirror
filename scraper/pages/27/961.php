<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Oct 26, 2017 at 11:05:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>ubuntuyou</b></i><br>
<br>
Could someone explain how to structure PRG banks for MMC1 using asm6? I can switch CHR banks fine but PRG is a no go. I&apos;m getting a lot of gray screens. Thanks.</div>
<br>
Are you swapping $8000-BFFF or $C000-FFFF? What I am posting below is assuming $8000-BFFF is swappable and $C000-$FFFF are fixed.<br>
<br>
I&apos;m not familiar with MMC1 or ASM6, but maybe my UNROM code using NESASM3 can help point you in the right direction.&#xA0; NESASM3 breaks banks out in the code in 8KB chunks (the .bank 0, .bank 1, etc), however, when you bankswitch, the entire 16KBs is swapped (so for bankSource=00, .bank 0 and .bank 1 are called). I have to note this because I think ASM6 does this differently. I think that banks are stored and called in 16kb chunks. Anyways, as you can see, all my swappable banks start at $8000. When I need to swap, I just call which 16kb bank I need with my bankswitching code. With UNROM, its as simple as writing the bank value to the bankswitching register. With MMC1, I do believe you have to use a shift register as per bunnyboy&apos;s Nerdy Nights tutorials. Take a look at the code below. As I said, I&apos;m sort of combining my UNROM code with the MMC1 code provided by bunnyboy. It&apos;s also all in NESASM3, so there are probably some differences in the code. This is more for a basis to check your code to see if you can see any simple errors. Take all of it with a grain of salt. Here is also the NESdev page on MMC1 banking. <a href="http://wiki.nesdev.com/w/index.php/MMC1" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
<br>
<strong>My Bank Code</strong><br>
;;;;;;;;;;;;;;;;;bankSource=00;;;;;;;;;;;;;;;;;;;;SWAPPABLE BANK<br>
&#xA0; .bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000 &#xA0;<br>
&#xA0; ;CODE HERE<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 1<br>
&#xA0; .org $A000<br>
&#xA0; ;CODE HERE &#xA0;&#xA0;<br>
<br>
;;;;;;;;;;;;;;;;;bankSource=01;;;;;;;;;;;;;;;;;;;;SWAPPABLE BANK<br>
&#xA0; .bank 2&#xA0;<br>
&#xA0; .org $8000<br>
&#xA0; ;CODE HERE<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 3<br>
&#xA0; .org $A000<br>
&#xA0; ;CODE HERE<br>
;;;;;;;;;;;;;;;;;bankSource=02;;;;;;;;;;;;;;;;;;;; &#xA0;SWAPPABLE BANK<br>
&#xA0; .bank 4&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
&#xA0; ;CODE HERE<br>
<br>
&#xA0; .bank 5<br>
&#xA0; .org $A000<br>
&#xA0; ;CODE HERE<br>
<br>
.&#xA0; MORE SWAPPABLE BANKS UNTIL MY FIXED BANK<br>
.<br>
.<br>
.<br>
.<br>
.<br>
<br>
;;;;;;;;;;;;;;;;;bankSource=0F;;;;;;;;;;;;;;;;;;;;FIXED BANK<br>
&#xA0; .bank 30<br>
&#xA0; .org $C000<br>
&#xA0; ;CODE HERE<br>
<br>
&#xA0;&#xA0; .bank 31<br>
&#xA0; .org $E000<br>
&#xA0; ;CODE HERE<br>
<br>
<br>
<strong>bunnyboy&apos;s MMC1 PRG Banking Routine</strong><br>
<a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33260" target="_blank">http://nintendoage.com/forum/mess...</a>
<p>PRGBankWrite:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; make sure this is in a fixed bank so it doesnt get swapped away<br>
&#xA0; LDA bankSource&#xA0;&#xA0;&#xA0; ; get bank number into A<br>
&#xA0; STA $E000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; first data bit<br>
&#xA0; LSR A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; shift to next bit<br>
&#xA0; STA $E000<br>
&#xA0; LSR A<br>
&#xA0; STA $E000<br>
&#xA0; LSR A<br>
&#xA0; STA $E000<br>
&#xA0; LSR A<br>
&#xA0; STA $E000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; bank switch happens immediately here<br>
&#xA0; RTS<br>
<br>
<br>
<strong>Routine to call Banking routine</strong><br>
LDA #$03<br>
STA bankSource&#xA0;&#xA0; ;Call bank 3<br>
JSR PRGBankWrite ;Jump to banking code<br>
<br>
<br>
I hope this helps.</p><br><br><p>&#xA0;</p>
				</div><div class="mdl-card--border"></div>