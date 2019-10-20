<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 22, 2014 at 12:36:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					*EDIT* Apparently My spacing didn&apos;t work. Going to try to edit this post.<br>
<br>
Rewrote the game states to match MRN&apos;s #2 tutorial code and this was the result:<br>
1. Flicker stopped on screen transition (found out I was turning the PPU back on too fast, need to let the NMI handle that).<br>
<br>
LDA #STATETITLE<br>
STA gamestate<br>
JSR DisablePPU<br>
JSR LoadBackground<br>
JSR EnablePPU &lt;--------REMOVED, NMI NOW DOES THIS PROCESS<br>
<br>
2. I was still getting the all 0&apos;s title screen when transitioning from the Game Over screen.<br>
FIX: Fixed this by moving the color change code to the transition of the Game Playing Screen to the Game Over Screen. Don&apos;t know why it fixed it, it happens at the same point of the other transition. The only difference, the first is called when you hit the Start Button, the second is called when the condition of the time reaching 00 hits.<br>
<br>
DOES NOT WORK HERE:<br>
;-----------------------------------------------------------<br>
;-----------------------START TITLE-------------------------<br>
;-----------------------------------------------------------<br>
StartTitle:<br>
<br>
LDA GameState<br>
STA GameState+1<br>
<br>
LDA #STATETITLE<br>
STA gamestate<br>
<br>
JSR DisablePPU<br>
JSR LoadBackground<br>
<br>
<strong>LDA #$01<br>
STA ChangeColor&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;&#xA0; ;Flag to tell the system to run UpdateColor Subroutine in the NMI section (00=Skip ColorUpdate, 01=Run ColorUpdate)<br>
LDA #$29<br>
STA attribute_RAM &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;Color to change to $29</strong><br>
<br>
StartTitleDone:<br>
RTS<br>
<br>
<br>
<br>
CODE WORKS HERE:<br>
;-----------------------------------------------------------<br>
;----------------------GAME OVER----------------------------<br>
;-----------------------------------------------------------<br>
CheckGameOver:<br>
LDA time1<br>
BNE CheckGameOverDone<br>
LDA time10<br>
BNE CheckGameOverDone &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;Check if Time is 00, if yes, change to Game Over State<br>
<br>
LDA GameState<br>
STA GameState+1<br>
<br>
LDA #STATEGAMEOVER<br>
STA GameState<br>
<br>
JSR DisablePPU<br>
JSR LoadBackground<br>
<br>
<strong>LDA #$01<br>
STA ChangeColor&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Flag to tell the system to run UpdateColor Subroutine in the NMI section (00=Skip ColorUpdate, 01=Run ColorUpdate)<br>
LDA #$29<br>
STA attribute_RAM&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Color to change to $29</strong><br>
<br>
CheckGameOverDone:<br>
RTS<br>
<br>
<br>
Conclussion: I think I rewrote my entire code for nothing. After moving the game state format to match MRN&apos;s instead of what I had, I think I just had to tweak my code just a bit to make it correct. Although, I learned a lot and I&apos;m now confused on some more stuff that I still need to figure out. I know the code works, I&apos;m just not fully grasping how it works. I&apos;m happy it&apos;s now to a state where I can move forward with my programming and put this behind me.
				</div><div class="mdl-card--border"></div>