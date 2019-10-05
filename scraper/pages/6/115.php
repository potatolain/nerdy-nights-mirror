<div class="mdl-card__title"><strong>sempressimo</strong> posted on 
		
			
				
				Nov 3, 2015 at 1:54:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I am using the code in these tutorials to load a full screen background. It works nicely, now I wan to load another &quot;room&quot;, (i.e. load the tiles again into the nametable). I repurposed the routine into a subrotine, but the second time I call it, the new &quot;room&quot; won&apos;t load properly, instead I get a garbage version of the room;<br>
<br>
LoadBackground:<br>
<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA #$20<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
<br>
&#xA0; ;LDX room_number&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; grab the actual room pointer<br>
&#xA0;<br>
&#xA0; LDA #$00<br>
&#xA0; STA pointerLo&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; put the low byte of the address of background into pointer<br>
&#xA0; LDA #HIGH(Room1)<br>
&#xA0; STA pointerHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; put the high byte of the address into pointer<br>
&#xA0;<br>
&#xA0; LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start at pointer + 0<br>
&#xA0; LDY #$00<br>
OutsideLoop:<br>
&#xA0;<br>
InsideLoop:<br>
&#xA0; LDA [pointerLo], y&#xA0; ; copy one background byte from address in pointer plus Y<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; this runs 256 * 4 times<br>
&#xA0;<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; inside loop counter<br>
&#xA0; CPY #$00<br>
&#xA0; BNE InsideLoop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; run the inside loop 256 times before continuing down<br>
&#xA0;<br>
&#xA0; INC pointerHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; low byte went 0 to 256, so high byte needs to be changed now<br>
&#xA0;<br>
&#xA0; INX<br>
&#xA0; CPX #$04<br>
&#xA0; BNE OutsideLoop&#xA0;&#xA0;&#xA0;&#xA0; ; run the outside loop 256 times before continuing down&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
<br>
&#xA0; LDA #%10010000&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; STA $2000<br>
<br>
&#xA0; LDA #%00011110&#xA0;&#xA0; ; enable sprites, enable background, no clipping on left side<br>
&#xA0; STA $2001<br>
&#xA0;<br>
&#xA0; RTS<br>
<br>
Can this code be used to re-load the background or I am missing something?<br>
<br>
Also can anyone point me to a tutorial on how to show a main screen, and the load the game level, as it should be the same concept I am trying to get working.
				</div><div class="mdl-card--border"></div>