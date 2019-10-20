<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Mar 28, 2016 at 2:41:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>compile_6502</b></i><br>
<br>
I&apos;ve been studying the MOS 6500 Programming Manual as a first step into getting into the NES and programming in general.<br>
<br>
There is some issue involving how numbers are interpreted that I need clearing up. The manual delves into working with 8 bit numbers and how bit 7 can be used to toggle between a positive number and a negative number at the expense of using only 7 bits for the numbers themselves.<br>
<br>
The question I have is, how does the processor know when you want to work with 8-bit unsigned numbers rather than 7-bit signed numbers?</div>
<br>
<br>
From what I know, the NES uses this bit to set/clear the negative flag, letting you use BPL (Branch if PLus) if bit 7 is clear and BMI (Branch if MInus) if the bit is set. I use this to clear my buffer for example.<br>
<br>
<span style="font-family:courier new,courier,monospace;">&#xA0; LDA #$00<br>
&#xA0; LDX #$7F<br>
CleanBuffer:<br>
&#xA0; STA Buffer_Shit,x<br>
&#xA0; DEX<br>
&#xA0; BPL CleanBuffer</span>
				</div><div class="mdl-card--border"></div>