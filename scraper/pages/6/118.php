<div class="mdl-card__title"><strong>sempressimo</strong> posted on 
		
			
				
				Nov 6, 2015 at 8:58:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>sempressimo</b></i><br>
<br>
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
&#xA0;<s> LDA #%10010000&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; STA $2000</s><br>
<br>
&#xA0;<strong> LDA #%00011110&#xA0;&#xA0; ; enable sprites, enable background, no clipping on left side<br>
&#xA0; STA $2001</strong><br>
&#xA0;<br>
&#xA0; RTS<br>
<br>
Can this code be used to re-load the background or I am missing something?<br>
<br>
Also can anyone point me to a tutorial on how to show a main screen, and the load the game level, as it should be the same concept I am trying to get working.</div>
Let your NMI enable your PPU. Don&apos;t do this in the main code. Doing it in the main code will make it look like garbage (what you are seeing).<br>
&#xA0;&#xA0; LDA #%00011110&#xA0;&#xA0; ; enable sprites, enable background, no clipping on left side<br>
&#xA0;&#xA0; STA $2001<br>
<br>
Here is what my NMI looks like:<br>
<strong>LDA #%10010000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0;STA $2000<br>
&#xA0;<br>
LDA EnablePPUFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Only Enable the PPU when this flag is enabled in the code.<br>
BEQ .SKIP<br>
&#xA0;&#xA0;&#xA0; LDA #%00011110&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;enable sprites, enable background, no clipping on left side<br>
&#xA0;&#xA0;&#xA0; STA $2001<br>
&#xA0;&#xA0;&#xA0; DEC EnablePPUFlag<br>
&#xA0; .SKIP:<br>
<br>
(This is a Subroutine in my main code. The NMI calls this when I tell it to with the EnablePPUFlag)</strong><br>
<strong>EnablePPU:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--------------------***********Subroutine called by the NMI to turn on the PPU<br>
&#xA0; LDA #%00011110&#xA0;&#xA0; ; enable sprites, enable background, no clipping on left side<br>
&#xA0; STA $2001<br>
&#xA0; RTS</strong><br>
<br>
<br>
-----------<br>
This is what my code looks like.<br>
<br>
<strong>LDA #$00&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;&lt;-------------------------**********Turn off the PPU in the Main Code First<br>
STA $2001<br>
<br>
&#xA0; LDA #LOW(PlayingBackground)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;-----------------**********Load background routine*************<br>
&#xA0; STA BackgroundAddr<br>
&#xA0; LDA #HIGH(PlayingBackground)<br>
&#xA0; STA BackgroundAddr+1<br>
&#xA0; JSR LoadBackground<br>
&#xA0;<br>
&#xA0; LoadBackground:<br>
&#xA0; LDA $2002<br>
&#xA0; LDA #$20<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
&#xA0;<br>
&#xA0; LDX #$04&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop X 4 times<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop Y 256 times<br>
LoadBackgroundsLoop:<br>
&#xA0; LDA [BackgroundAddr],y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load background from table in the pointer<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Write to screen<br>
&#xA0; INY<br>
&#xA0; BNE LoadBackgroundsLoop<br>
; Outer loop<br>
&#xA0; INC BackgroundAddr+1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; increment high byte of address backg to next 256 byte chunk<br>
&#xA0; DEX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; one chunk done so X = X - 1.<br>
&#xA0; BNE LoadBackgroundsLoop&#xA0;&#xA0; ; if X isn&apos;t zero, do again<br>
&#xA0; LoadBackGroundDone: &#xA0;<br>
&#xA0; RTS<br>
&#xA0;<br>
&#xA0; INC EnablePPUFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--------------********This flag will tell the NMI to turn PPU back on*******<br>
<br>
<br>
<br>
---------------------------------------------------------</strong><br>
SIDE NOTE: You don&apos;t have to do anything with this code when turning the PPU on and off. That code only belongs in the PPU<br>
&#xA0; LDA #%10010000&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; STA $2000<br>
<br>
<br>
<br>
Hope that made sense. Good luck</div>
Thanks Mega Mario Man, now I have room switching working. I do get a quick black flash when switching, I know is because I am turning on and off the PPU, just wondering if this is the standard way or if there is a way around this?<br>
<br>
Also, if I want to update just some background tiles, like the score for example, can I just update the value in my backgrounds .db(s)&#xA0;directly and that is it? Or does the PPU has to be turned off for this also?<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>