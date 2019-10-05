<div class="mdl-card__title"><strong>Cthulhu32</strong> posted on 
		
			
				
				May 1, 2009 at 1:29:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i></div><div class="FTQUOTE"><i><b><span class="Apple-style-span" style="font-style: normal; font-weight: normal; "><br></span></b></i><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
Bus Conflicts</span></span><br>
When you start running your code on real hardware there is one catch to worry about.  For basic mappers, the PRG ROM does not care if it receives a read or a write command.  It will respond to both like a read by putting the data on the data bus.  This is a problem for bank switching, where the CPU is also trying to put data on the data bus at the same time.  They electrically fit in a &quot;bus conflict&quot;.  The CPU could win, giving you the right value.  Or the ROM could win, giving you the wrong value.  This is solved by having the ROM and CPU put the same value on the data bus, so there is no conflict.  First a table of bank numbers is made, and the value from that table is written to do the bank switch.<br>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... code ...</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;LDA #$01        ;;put new bank to use into A</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;JSR Bankswitch  ;;jump to bank switching code</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... code ...</span></p>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">Bankswitch:</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;TAX                ;;copy A into X</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;STA Bankvalues, X  ;;new bank to use</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;RTS</span></p>
  <br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">Bankvalues:</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;.db $00, $01, $02, $03    ;;bank numbers </span></p>
 
<br>
The X register is used as an index into the Bankvalues table, so the value written by the CPU will match the value coming from the ROM.<br>
<br><br></div><br><br><div>Quick clarification on this code: is the reason you do a TAX is because that will set the $0000 CPU to the same value that is being set at $8000? And you are storing A into BankValues because BankValues is a .db rom value, which means its at $8000?</div><div><br></div><div>Does this also mean you don&apos;t need the extra offset at all, you JUST need the TAX to force the same value thats going into $8000 to be in $0000?</div><div><br></div><div>For example:</div><div><br></div><div><div>Bankswitch:</div><div>&#xA0;&#xA0;TAX &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;;set the CPU to A ?</div><div>&#xA0;&#xA0;STA $8000 &#xA0; &#xA0; &#xA0; ;;set the ROM to A ?</div><div>&#xA0;&#xA0;RTS</div></div><div><br></div><div>The way I came to this conclusion is because if Bankvalues was the only .db in the file, Bankvalues would be $8000, which means a step along the assembler compilng,&#xA0;STA Bankvalues, X would become STA $8000, X.&#xA0;</div><div><br></div><div>And because the NES cpu doesn&apos;t care if you set $8000, $8001, $8002, or $8003 with the map, you could just simplify this to always setting $8000.</div><div><br></div><div>I am probably missing a step here in how you write the bankvalues, so any clarifications are greatly appreciated <img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;"> Thanks for the awesome tutorials!</div><div><br></div>
				</div><div class="mdl-card--border"></div>