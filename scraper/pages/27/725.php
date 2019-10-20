<div class="mdl-card__title"><strong>insomniakc</strong> posted on 
		
			
				
				Jan 24, 2016 at 9:51:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi again. Now I have a new problem. I&apos;m almost done my animated title screen and it&apos;s looking great. The heartbeat animation I made I converted from a sprite animation into a changing background animation, but it was breaking on NTSC so I changed it to a static set of tiles with MMC1 bank swapping doing the animating of the background layer. That part is working fine, but my attributes code isn&apos;t loading anything. I&apos;ve tried enabling and disabling the PPU, and moving the code for initializing MMC1 to before the attributes code, then after. I just get the basic #%00000000 palette no matter what I try. My loop breaks the screen into 4 sections and writes #%00000000 to the first 2 sections, then #%01010101 to the 3rd section, and #%00000000 to the last. The code seems fine to me, which is why I&apos;m asking if anyone knows of anything I might be doing wrong.<br>
<br>
<br>
LoadAttributes:<br>
LDA $2002<br>
LDA #$23<br>
STA $2006 ;nametable 1<br>
LDA #$C0<br>
STA $2006<br>
LDX #$00<br>
LDA #%00000000<br>
LoadQ1Q2AttributeLoop:<br>
STA $2007<br>
INX<br>
CPX #$20<br>
BNE LoadQ1Q2AttributeLoop<br>
LDA #%01010101<br>
LoadQ3AttributeLoop:<br>
STA $2007<br>
INX<br>
CPX #$30<br>
BNE LoadQ3AttributeLoop<br>
LDA #%00000000<br>
LoadQ4AttributeLoop:<br>
STA $2007<br>
INX<br>
CPX #$40<br>
BNE LoadQ4AttributeLoop<br>
<br>
<br>
So in theory this code increments X and then writes a #%00000000 byte to PPU and and so forth 32 times, then 16 times of #%01010101, then 16 times of #%00000000. Seems straightforward, but nothing changes, and this is confirmed by checking the Hex editor in the emulator. Please if anyone is currently online and has any idea of what might be going on, let me know <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<br>
<br>
EDIT: I have solved the problem. To anybody who might be interested: attributes seem to be reset by MMC1 CHR-ROM bank swapping. The solution: have your attribute code in the Infin loop immediately after Vblank.
				</div><div class="mdl-card--border"></div>