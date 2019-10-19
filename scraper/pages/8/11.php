<div class="mdl-card__title"><strong>LucasWeatherby</strong> posted on 
		
			
				
				Aug 15, 2013 at 9:30:39 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>MetalSlime</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>LucasWeatherby</b></i><br>
		<br>
		<div class="FTQUOTE">
			Your task is to separate out the code that sets the pointer variables from the code that copies the loop. That way you can have multiple backgrounds that use different pointer loading code, but the same copy code.<br>
			<div>
				&#xA0;</div>
		</div>
		<br>
		Ok, question on this. I made a subroutine that is called from within in the &quot;LoadBackground&quot; section that will read Accumulator A and draw a background based off of the Accumulators value. It works fine and dandy if I hardcode the value of the Accumulator right before calling the subroutine.<br>
		<br>
		I then made my &quot;ReadA&quot; section(functions, whatever you call these bad boys) change the value of the Accumulator when pressed. But the background never changes.<br>
		<br>
		This leads me to believe that this is because the call is from within the Reset section of code and only called on startup. Therefore to solve my problem (and the question I am really asking is) I need to make my LoadBackground and Subroutine call from the NMI? Does that sound right? This is probably a dumb question, just want to make sure(I am away from my personal computer to try this method out. This was the idea that came to me in my dreams last night, though I would ask you guys about it).<br>
		<br>
		And is it ok to redraw the background from within the NMI?<br>
		&#xA0;</div>
	Not a dumb question at all. &#xA0;And good job diagnosing your problem! &#xA0;That&apos;s exactly right. &#xA0;The LoadBackground section is only run on reset, and that is before the controller is ever read.<br>
	<br>
	The NMI isn&apos;t long enough to do a full background rewrite, but you can definitely draw some tiles and then continue drawing more the next NMI. &#xA0;So your idea is on the right track, just don&apos;t expect to be able to copy a whole background&apos;s worth of tiles in one NMI. &#xA0;Try writing a new subroutine called &apos;DrawTwoRows&apos; or something and call that in your NMI after the controller read.<br>
	<br>
	&#xA0;</div>
<br>
<br>
Ok, back from my hiatus and ready to pick up where I left off. I had the same problems NESHERO27 is having until I tried your 2 row method. That seemed to fix the glitchy looking mess of a screen. I have attempted to make my screen change between two backgrounds when either A or B is pressed. I have sucessfully made the first 2 rows switch correctly. But I am struggling with picking up where I left off during the last NMI. I was hoping someone could help me pointerLo variable setup to the right value.<br>
<br>
<br>
Here is an overview of my NMI:<br>
<br>
<div class="FTQUOTE">
	<div>
		NMI:</div>
	<div>
		&#xA0; LDA #$00</div>
	<div>
		&#xA0; STA $2003 &#xA0; &#xA0; &#xA0; ; set the low byte (00) of the RAM address</div>
	<div>
		&#xA0; LDA #$02</div>
	<div>
		&#xA0; STA $4014 &#xA0; &#xA0; &#xA0; ; set the high byte (02) of the RAM address, start the transfer</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		;;Background Control<br>
		<br>
		;;LatchController<br>
		<br>
		;;ReadA:<br>
		<br>
		;;ReadB:&#xA0;<br>
		<div>
			&#xA0;<br>
			<br>
			;;This is the PPU clean up section, so rendering the next frame starts properly.</div>
		<div>
			&#xA0; LDA #%10010000 &#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1</div>
		<div>
			&#xA0; STA $2000</div>
		<div>
			&#xA0; LDA #%00011110 &#xA0; ; enable sprites, enable background, no clipping on left side</div>
		<div>
			&#xA0; STA $2001</div>
		<div>
			&#xA0; LDA #$00 &#xA0; &#xA0; &#xA0; &#xA0;;;tell the ppu there is no background scrolling</div>
		<div>
			&#xA0; STA $2005</div>
		<div>
			&#xA0; STA $2005</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; RTI &#xA0; &#xA0; &#xA0;</div>
	</div>
</div>
<br>
In the Background Control I have the following:<br>
<br>
<br>
<div class="FTQUOTE">
	<div>
		;;Background Control</div>
	<div>
		LoadBackgroundNMI: &#xA0;</div>
	<div>
		&#xA0; LDA changeBG ;;load A with changeBackground boolean to see if a background change is needed</div>
	<div>
		&#xA0; AND #$01 ;;AND with 1 to see if boolean is set</div>
	<div>
		&#xA0; BEQ LoadBackgroundNMIDone ;;if not, branch to the end of NMI Background Load</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; JSR SetBackGroundPointer &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;Jump to subroutine that establishes background to load</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; LDA $2002 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; read PPU status to reset the high/low latch</div>
	<div>
		&#xA0; LDA #$20</div>
	<div>
		&#xA0; STA $2006 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; write the high byte of $2000 address</div>
	<div>
		&#xA0; LDA #$00</div>
	<div>
		&#xA0; STA $2006 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; write the low byte of $2000 address</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; LDA pointerY;Attempting to load where I left off with previous NMI</div>
	<div>
		&#xA0; STA pointerLo ; put the low byte of the address of background into pointer</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; LDY #$00;initializing y offset at 0</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		InsideLoopNMI:</div>
	<div>
		&#xA0; LDA [pointerLo], y &#xA0;; copy one background byte from address in pointer plus Y</div>
	<div>
		&#xA0; STA $2007 ; this runs 256 * 4 times (What the code used to do on this line)</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		&#xA0; INY &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; inside loop counter</div>
	<div>
		&#xA0; CPY #$80</div>
	<div>
		&#xA0; BNE InsideLoopNMI &#xA0; &#xA0; &#xA0;; run the inside loop 256 times before continuing down&#xA0;(What the code used to do on this line)</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		&#xA0; TYA;Transfering y to Accumulator A</div>
	<div>
		&#xA0; STA pointerY;Attempting to store where I left off in pointerY for next NMI loop</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		&#xA0; INC pointerHi &#xA0; &#xA0; &#xA0; ; low byte went 0 to 256, so high byte needs to be changed now&#xA0;(What the code used to do on this line)</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;;IF(Background is completely loaded){changeBG=FALSE;}</div>
	<div>
		&#xA0; ;LDA #$01</div>
	<div>
		&#xA0; ;STA changeBG</div>
	<div>
		LoadBackgroundNMIDone:</div>
	<div>
		;;End Background Control</div>
</div>
<br>
And Finally, my setbackgroundpointer Function:<br>
<br>
<br>
<div class="FTQUOTE">
	<div>
		SetBackGroundPointer:</div>
	<div>
		&#xA0; LDA screenNumber</div>
	<div>
		&#xA0; and #$01 &#xA0; ;isolate the bit representing &quot;up&quot;, by clearing all the other bits</div>
	<div>
		&#xA0; beq LoadScreen1Done &#xA0;&#xA0;</div>
	<div>
		LoadScreen1: &#xA0;</div>
	<div>
		&#xA0; LDA #HIGH(background)</div>
	<div>
		&#xA0; STA pointerHi &#xA0; &#xA0; &#xA0; ; put the high byte of the address into pointer</div>
	<div>
		LoadScreen1Done:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; LDA screenNumber</div>
	<div>
		&#xA0; and #$02 &#xA0; ;isolate the bit representing &quot;up&quot;, by clearing all the other bits</div>
	<div>
		&#xA0; beq LoadScreen2Done &#xA0;&#xA0;</div>
	<div>
		LoadScreen2: &#xA0;</div>
	<div>
		&#xA0; LDA #HIGH(backgroundtwo)</div>
	<div>
		&#xA0; STA pointerHi &#xA0; &#xA0; &#xA0; ; put the high byte of the address into pointer</div>
	<div>
		LoadScreen2Done:</div>
	<div>
		&#xA0;&#xA0;</div>
	<div>
		&#xA0; RTS &#xA0;</div>
</div>
<br>
				</div><div class="mdl-card--border"></div>