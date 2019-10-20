<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				May 25, 2014 at 7:10:10 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	Solegoose, it sounds like you didn&apos;t reset a timer or something. Just a frame counter that resets Everytime it reloads a screen should work. Just be sure to reset the counter before you load the screen or make the load routine aware that it is loading. I.e. Don&apos;t let the counter hit zero, start a screen load (which could take more than one frame), trigger a reload before the screen is finished reloading and the counter is reset, etc.<br>
	<br>
	I usually just turn off the background and tell the program to skip the nmi graphics updates when I&apos;m loading a routine that&apos;s long like that. Should function the same as switching with a character, just uses a timer.</div>
<br>
I think that my main issue with timers is setting up correct loops. Conceptually, here is kind of what I have, but it does not work as intended. A lot of it is redundant, and even more can be reorganized into subroutines, but I wanted to keep it as simple as possible before scattering the code throughout the main file. Just to note most of this is repurposed from my inventory screen routine, I just tried to expand it. Oh, and this is not my actual code, but I&apos;m transposing it from one computer to another, in case there are any compiler mistakes.<br>
<br>
<br>
<br>
;initial splash screen is loaded in the initializing portion of the code, i.e. XCoordinate and YCoordinate variables are set to 0. Initial game state is also set to 2, the intro sequence.<br>
<br>
GameState2: &#xA0; &#xA0; &#xA0; &#xA0; ;Initial screen should show for 30<br>
&#xA0; INC Timer<br>
&#xA0; LDA Timer<br>
&#xA0; CMP #$30<br>
&#xA0; BEQ .Next1<br>
&#xA0; RTS<br>
.Next1 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;After 30, the second screen should load<br>
&#xA0; LDA Timer<br>
&#xA0; CMP #$60<br>
&#xA0; BEQ .Next2<br>
<br>
&#xA0; LDA #$01<br>
&#xA0; STA YCoordinate &#xA0; &#xA0; ;setting it to the next screen<br>
<br>
&#xA0; ;bankswitching, background, palette, sprite, and attribute loading occur here<br>
<br>
&#xA0; RTS<br>
<br>
.Next2 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;after 90, the state should switch to the main game playing state<br>
&#xA0; LDA Timer<br>
&#xA0; CMP #$90<br>
&#xA0; BEQ .Next3<br>
<br>
&#xA0; LDA #$01 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;These coordinates being the location of the first room in the main playing state<br>
&#xA0; STA YCoordinate<br>
&#xA0; LDA #$01<br>
&#xA0; STA XCoordinate<br>
<br>
&#xA0; ;bankswitching, background, etc. loading here<br>
<br>
&#xA0; LDA #$00 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;main playing state<br>
&#xA0; STA GameState<br>
<br>
.Next3<br>
<br>
&#xA0; RTS
				</div><div class="mdl-card--border"></div>