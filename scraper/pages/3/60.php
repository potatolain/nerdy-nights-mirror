<div class="mdl-card__title"><strong>HiQConsoul</strong> posted on 
		
			
				
				Jun 24, 2013 at 7:54:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<pre style="color: rgb(0, 0, 0); font-size: 11px;">LDA #$0A   ; LoaD the value 0A into the accumulator A
           ; the number part of the opcode can be a value or an address
           ; if the value is zero, the zero flag will be set.<br><br>
LDY #$FF   ; LoaD the value $FF into the index register Y
           ; if the value is zero, the zero flag will be set.</pre>
</div>
<br>
*** Im pretty nubby at this..<br>
ok so... can u see my question forming?<br>
<br>
above, lda and ldy have a #$ before the hex value ..<br>
<br>
lda #$22 would seem to load 22 into a ...<br>
(rephrase.. lda #$22 LoaD into A the value 22)<br>
ldy #$22 would seem to load $22 into y ...<br>
(rephrase.. ldy #$22 LoaD into Y the value $22)<br>
<br>
.. why does y get the $ before 22, and why does a not get the $ before 22?<br>
<br>
a and y are different thingies and work differently, it could be something like that I guess - but the way things are worded I also seem to think it may just as well be a typo from author altho probability is low cuz it&apos;s so old, yet it seems most who check it out are fairly skilled and thus just shrug at it if even noticing it.. and nubs like myself may just think &quot;it&apos;s just me who&apos;s a nub&quot;.. so, I feel I should ask..<br>
<br>
cheers <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
edit:<br>
<br>
at the bottom it shows the 76543210 bits with lines to what they do.. after that it says:<br>
<span style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">&quot;So if you want to enable the sprites, you set bit 3 to 1.&quot;<br>
<br>
I just rechecked like 5 times and Im sure bit 3 on the &apos;drawing&apos; is pointing to the background and bit 4 to the &apos;enable rendering sprites&apos; .. so, basically same question: Am I just nub and will find out why it&apos;s right, or is it like.. typo ?</span>
				</div><div class="mdl-card--border"></div>