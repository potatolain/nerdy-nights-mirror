<div class="mdl-card__title"><strong>RevEng</strong> posted on 
		
			
				
				Jan 3, 2010 at 6:25:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>resynthesize</b></i><br><br>I&apos;m still wondering if there is a better way to &quot;add 4 to x&quot; instead of using 4 inx statements.<br></div><br><font size="1"><span style="font-style: italic;">I know this was posted long ago, but here&apos;s an answer for posterity&apos;s sake.</span></font><br><br>Since you can only do math on the A register (accumulator), you&apos;ll want to copy the value of X into A, do the math, then copy it back to X.&#xA0; The following code will do that:<br><br>TXA<br>CLC<br>ADC #$04<br>TAX<br><br>This code can replace the 4 INX statements.&#xA0; Note that it wrecks what&apos;s currently in the accumulator.&#xA0; If you still need what&apos;s in the accumulator, you can push it on to the stack and pull it back off when you are done:<br><br><span style="font-weight: bold;">PHA</span><br>TXA<br>
CLC<br>
ADC #$04<br>
TAX<br>
<span style="font-weight: bold;">PLA</span><br><br>As you can see, that&apos;s a lot of code just to add a number to the X register.&#xA0; This is why it&apos;s best to avoid doing math (other than increment/decrement) on these registers.&#xA0; For X+4, it&apos;s actually less code (and less CPU cycles) to do INX 4 times than to use the code above.<br>
				</div><div class="mdl-card--border"></div>