<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jan 10, 2015 at 1:04:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					If you read $4016 directly from the controller, you&apos;re doing it 100% wrong. Please don&apos;t advocate doing it that way. I&apos;m not going to argue with people again (Main reason I left for so long) how it&apos;s okay to do it how they want. It&apos;s not, it&apos;s the shittiest code you could ever write. Put it into variables, add button press variables, and stop doing it 10000% wrong.<br>
<br>
Set 3 variables in RAM: ControllerData, ControllerDataOld (For figuring button presses), and then set ControllerOutput to $4016. Jump to this routine, then do a LDA-BIT/LDA-AND combo to test. 100% less crappy.<br>
<br>
<div>
	<div>
		ReadController:</div>
	<div>
		&#xA0; LDA ControllerData</div>
	<div>
		&#xA0; STA ControllerDataOld ;Store old key presses.</div>
	<div>
		&#xA0; LDY #$01</div>
	<div>
		&#xA0; STY ControllerOutput ;Set to $4016</div>
	<div>
		&#xA0; STY ControllerData</div>
	<div>
		&#xA0; DEY</div>
	<div>
		&#xA0; STY ControllerOutput</div>
	<div>
		.ReadControllers</div>
	<div>
		&#xA0; LDA $4016</div>
	<div>
		&#xA0; LSR A</div>
	<div>
		&#xA0; ROL ControllerData</div>
	<div>
		&#xA0; BCC .ReadControllers</div>
	<div>
		&#xA0; LDA ControllerDataOld</div>
	<div>
		&#xA0; EOR #$FF ;Reverse keys not pressed last time.</div>
	<div>
		&#xA0; AND ControllerData ;Test with new keys.</div>
	<div>
		&#xA0; STA ControllerDataNewlyPressed ;Store buttons that were just pressed.</div>
	<div>
		&#xA0; RTS</div>
	<div>
		&#xA0;</div>
</div>
<br>
				</div><div class="mdl-card--border"></div>