<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 21, 2014 at 4:33:28 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	&#xA0;Is there other code that only allows that flag to be set at a certain event?<br>
	<br>
	I would try setting those two variables to their respective values as you&apos;re changing the gamestate back to the title, and not when it&apos;s actually already in the title gamestate.<br>
	&#xA0;</div>
The only other place that calls for that code is when the a directional pad is pushed only during game play. I only look at the Start Button on the Game Over and Title Screen. During gameplay, the code is skipped unless one of the directions is pressed.<br>
<br>
This was the first way I done it. The title screen works fine at first boot, but breaks when called by the Game Over Screeb.&#xA0; I actually had it like this first:<br>
<br>
<div class="de1">
	;----------------------------------------------------------- &#xA0;</div>
<div class="de2">
	;-----------------------START TITLE-------------------------</div>
<div class="de1">
	;-----------------------------------------------------------</div>
<div class="de2">
	StartTitle:</div>
<div class="de1">
	&#xA0; &#xA0;</div>
<div class="de2">
	&#xA0; LDA #STATETITLE</div>
<div class="de1">
	&#xA0; STA gamestate</div>
<div class="de2">
	&#xA0; &#xA0; JSR DisablePPU</div>
<div class="de2">
	&#xA0; &#xA0; JSR LoadBackground<br>
	&#xA0; &#xA0; JSR EnablePPU<br>
	&#xA0;&#xA0;&#xA0;&#xA0; <strong>LDA #$01<br>
	&#xA0; &#xA0;&#xA0; STA ChangeColor&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Flag to tell the system to run UpdateColor Subroutine in the NMI section (00=Skip ColorUpdate, 01=Run ColorUpdate)<br>
	&#xA0; &#xA0;&#xA0; LDA #$29&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
	&#xA0; &#xA0;&#xA0; STA attribute_RAM&#xA0;&#xA0;&#xA0;&#xA0; ;Color to change to $29</strong></div>
<div class="de1">
	&#xA0;</div>
<div class="de2">
	StartTitleDone:</div>
<div class="de1">
	&#xA0; RTS</div>
<div class="de1">
	--------------<br>
	<br>
	<br>
	And like this<br>
	<br>
	<br>
	<div class="de1">
		;----------------------------------------------------------- &#xA0;</div>
	<div class="de2">
		;-----------------------START TITLE-------------------------</div>
	<div class="de1">
		;-----------------------------------------------------------</div>
	<div class="de2">
		StartTitle:</div>
	<div class="de1">
		&#xA0; &#xA0;</div>
	<div class="de2">
		&#xA0; LDA #STATETITLE</div>
	<div class="de1">
		&#xA0; STA gamestate</div>
	<div class="de2">
		&#xA0; &#xA0; JSR DisablePPU</div>
	<div class="de1">
		&#xA0; &#xA0; JSR LoadBackground<br>
		<strong>&#xA0;&#xA0;&#xA0;&#xA0; LDA #$01<br>
		&#xA0; &#xA0;&#xA0; STA ChangeColor&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Flag to tell the system to run UpdateColor Subroutine in the NMI section (00=Skip ColorUpdate, 01=Run ColorUpdate)<br>
		&#xA0; &#xA0;&#xA0; LDA #$29&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
		&#xA0; &#xA0;&#xA0; STA attribute_RAM&#xA0;&#xA0;&#xA0;&#xA0; ;Color to change to $29</strong></div>
	<div class="de2">
		&#xA0; &#xA0; JSR EnablePPU</div>
	<div class="de1">
		&#xA0;</div>
	<div class="de2">
		StartTitleDone:</div>
	<div class="de1">
		&#xA0; RTS</div>
</div>
<br>
I thought I was doing everything correct for the NMI process, but maybe not. I have all of the practice code downloaded from NN, in fact this program is directly built off the last NN tutorial. I just ripped out the code and inserted mine as I went along.<br>
<br>
I thought I was being clever by leaving out the code that is irrelvant to the situation (I just didn&apos;t want to paste my code for all to see) but maybe it is leaving out what you were wanting to see. If you want to request it, I would do a temp pastebin for either of you for the entire code. Just know, there are parts that are intentionally left wrong because I haven&apos;t cleaned that part up yet or I am not on that step (such as the attributes for the Title and Game Over Screens.<br>
<br>
I will run through the tutorials again. I really don&apos;t understand what you mean by some of the suggestions such as &quot;you should be pushing/popping your registers in NMI or it will cause more problems&quot;, so apparently I misunderstood something in the tutorials.<br>
<br>
MRN, thanks for the slight change to UpdateColor, it&apos;s cleaner. Never thought to code it that way.<br>
<br>
				</div><div class="mdl-card--border"></div>