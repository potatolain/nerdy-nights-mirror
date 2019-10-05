<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Nov 3, 2009 at 7:56:08 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>well, this is neat, was able to add back the staccato sound I had in my splash page. A few things I was wondering though. will probably be covered in the next tutorial.
<br>
<br>1) what if I don&apos;t want an envelope? We split the byte between Duty cycle and Volume in this tutorial. The Volume is controlled solely by the envelope byte now. since this is an expected byte in the header, I have to put some value in. Do you make an envelope with just OF, OF, OF, etc. or is there a simpler way?
<br>
<br>2)This will probably be covered by Opcodes. Will opcodes allow my to change the Duty Cycle and envelope mid-stream? Say I want to start with a staccato then change to something else. or change the duty cycle. I would think I may want to change the tempo maybe also. 
<br>
<br></div><br>Good questions.<br><br>1) Right now, if you don&apos;t want an envelope and you don&apos;t want to change any code you could make a custom envelope for a constant volume.&#xA0; It would only need to be two bytes long, like this:<br><br>ve_F:<br>&#xA0;&#xA0;&#xA0; .byte $0F, $FF<br><br>Since the $FF automatically sustains the last value for the remainder of the note you get this pretty cheaply:&#xA0; 2 bytes for the envelope, plus 2 more bytes for the pointer table entry. <br><br>If you wanted to take volume control away from the envelopes, you could add in a flag (one of the bits in stream_status maybe) that you could use to turn volume envelopes off and on.&#xA0; If off, you could tell the engine to use the default value in stream_duty_vol.&#xA0; This would require a check of the flag in your se_set_volume code, and you&apos;d have to code in a way to set and clear the flag.&#xA0; <br><br>2) Yes, opcodes will allow you to pretty much do anything you want at any point in a stream.&#xA0; Change volume envelope, change duty cycle, change tempo, change keys, trigger a sound effect, loop, jump.&#xA0; Anything you can write code for you can make into an opcode and allow the sound engine to call it as needed.<br>
				</div><div class="mdl-card--border"></div>