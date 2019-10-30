<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Oct 15, 2012 at 7:34:16 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well you have to remember the last bank in the ROM is fixed somewhere, either lower or top 16KB. You need to put all the bankswitching code, NMI, etc. there. Could you post your source possibly? I&apos;ll fix it up so it works and show you what&apos;s wrong with it.<br>
<br>
ETA: More detailed programming MMC1 info:<br>
<br>
You need to have a mini boot routine (16 bytes is what you should shoot for. I have a 15 byte routine that returns the bank boot I am going to add below) that resets the mapper by writing &gt;=128 to &gt;=$8000. That will force all MMC1 chips to make the last 16KB be in the $C000 range to execute from, so you can just JMP [$FFFC] to the reset routine in the main bank to make sure it boots correctly. You CAN make the lower $8000 page be executed from, but that&apos;s not used or very very useful because when an NMI,IRQ, or RESET occur, the 6502 looks for them at locations $FFFA-$FFFF, so you NEED to have those there all the time. I hope that makes sense. But some MMC1&apos;s boot with the 16KB fixed at $C000 first, but ones like the original MMC1 are random and not reliable to assume that.&#xA0;On MMC1B2 I know the boot isn&apos;t random like the MMC1 no revision, MMC1B2 boots in the 16KB in the $C000 range. But to make sure it really works on all MMC1&apos;s and emus, make sure you have a little reset routine at the end of each 16KB bank.<br>
<br>
(Code is for NESASM3, you really should make this a macro to use it.)<br>
<br>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; .org $FFF0</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; .db $00</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">MMC1GlitchBoot:</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; SEI</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; LDA #$80+(BANK(MMC1GlitchBoot)/2)</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">RTIBank:</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; STA $8040</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; JMP [$FFFC]</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; .dw RTIBank+1 ;NMI</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; .dw MMC1GlitchBoot ;Reset</span></div>
<div>
	<span style="font-family:courier new,courier,monospace;">&#xA0; .dw RTIBank+1 ;IRQ</span><br>
	<br>
	Code Comments:<br>
	I dunno WHY an IRQ would fire, but just in case I store to $8040 to reset the MMC1, but the $40 is used to also be the instruction for an RTI, so nothing bad will happen if an IRQ happens during reset.<br>
	<br>
	On the LDA, I used that to determine what bank it booted in. It&apos;s not needed, just an extra feature.<br>
	<br>
	Any Q&apos;s and you can ask. If you use this code....just use it.</div>
				</div><div class="mdl-card--border"></div>