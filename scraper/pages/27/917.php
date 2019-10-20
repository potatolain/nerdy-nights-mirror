<div class="mdl-card__title"><strong>S. P. Sour</strong> posted on 
		
			
				
				Aug 13, 2017 at 6:52:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Oh thank you for the quick reply! Here is the relevant section.
<br>
<br>Drawlspeech:
<br>  LDA $2002
<br>  LDA #$21
<br>  STA $2006             ;This beginning part mostly C+P&apos;d from the NN tutorial
<br>  LDX #$A0              ;Note I load in address $21A0 as the start point, if that&apos;s important. Earlier in the code, I load in the floor background starting at $23F0.
<br>  STX $2006
<br>  LDX #$00
<br>dlload:
<br>  LDA Ldialogue,x
<br>  STA $2007
<br>  INX
<br>  CPX #$5B     ;The error can be seen when this value is increased beyond #$57. #$5B is what I used in the screenshot, but it&apos;s usually set to #$60.
<br>  BNE dlload
<br>  LDA #$01
<br>  STA State     ;A variable I use to keep track of whether or not a dialogue box is being displayed (mostly to disable movement and stuff)
<br>  
<br> ;LDA #%10010000   ;&quot;enable NMI, sprites from Pattern Table 0, background from Pattern Table 1&quot;
<br> ;STA $2000           ;This was something in the NN tutorial that followed the background loading tutorial. I tried putting it here to see if it would fix the problem. It didn&apos;t, so the code is disabled.
<br>
<br> ;LDA #%00011110   ;&quot;enable sprites, enable background, no clipping on left side&quot;
<br> ;STA $2001         ;See above.
<br>  
<br> ;LDA #$00        ;&quot;tell the ppu there is no background scrolling&quot;
<br> ;STA $2005       ;See above.
<br> ;STA $2005
<br>  JMP notalk      ;A label a little bit after Drawlspeech is called. I would use JSR, but whenever I tried to use RTS, the assembler gave me strange, nonsensical errors. (I later realized this was caused by spacing mistakes, but never bothered to go back and change everything to subroutines)
<br>
<br>&apos;Ldialogue&apos; goes to a set of .db bytes that basically spell out the dialogue box tile by tile. (I still want to optimize this later, but I&apos;m currently tackling the bigger issue.)
				</div><div class="mdl-card--border"></div>