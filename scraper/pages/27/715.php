<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 5, 2015 at 1:25:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I was thinking if this is always faster (<em>Bunnyboy </em>code):<br>
<br>
***
<pre>ReadController:
  LDA #$01
  STA $4016
  LDA #$00
  STA $4016
  LDX #$08<br><br>ReadControllerLoop:
  LDA $4016
  LSR A           ; bit0 -&gt; Carry
  ROL buttons     ; bit0 &lt;- Carry
  DEX
  BNE ReadControllerLoop
  RTS</pre>
***<br>
<br>
than this (something I was thinking about):<br>
<br>
***
<pre>Joypad:       ; joypad latch buttons
  LDX #$01    ; X == 01
  STX AUX     ; (variable) AUX = 01
  STX $4016   ; THIS IS 01
  DEX         ; X == 00
  STX $4016   ; THIS IS 00
  STX OUTPUT  ; (variable) OUTPUT == 00
Read:         ; check inputs A,B,Se,St,U,D,L,R
  LDA $4016
  AND 01
  BEQ NoInput
  LDA OUTPUT
  ORA AUX     ; Hex 01, 02, 04, 08, 10, 20, 40, 80
  STA OUTPUT  ; store if: A,B,Se,St,U,D,L,R is pressed in OUTPUT
NoInput:
  ASL AUX     ; AUX shifts left for the next input
  BNE Read    ; when AUX is empty the loop ends
  RTS</pre>
Example: OUTPUT == 11110001 means ABSeStR are pressed.<br>
If you want the opposite way, start with AUX == 80 (10000000) and use:<br>
LSR AUX<br>
instead of:<br>
ASL AUX<br>
in the end of the loop (after the NoInput label).<br>
<br>
***<br>
<br>
I think the answer would be yes, <em>Bunnyboy </em>code is faster.<br>
<br>
And I guess that inverting this:
<pre>  LSR A           ; bit0 -&gt; Carry
  ROL buttons     ; bit0 &lt;- Carry</pre>
&#xA0; to this:<br><br><pre>  LSR A           ; bit0 -&gt; Carry
  ROR buttons     ; Carry -&gt; bit_7_</pre>
would work too, to have the &quot;bit order&quot; starting from AB... rather than RL... , I mean have A in bit 0 rather than bit 7. So my example above is a weaker solution.<br>
<br>
I post this example because it happens sometimes that I spend time to write (following my logic) a routine to do something, which works perfectly, but months later I find out (this is not the case, of course) on some writeups 6502 ASM coding related, or I figure out myself, that there is a &quot;conventional way&quot; to do it, which is cleaner and faster. Or I see something, and then forget where it was published when I need it. Or is buried somewhere in a long discussion thread, or in the comments of a tutorial lesson.<br>
<br>
So, I was wondering, if besides the few generic 6502 coding archieves around the internet, these NA tutorials, the articles and tricks published on NesDev, and <em>Shiru </em>site material, is there somewhere an archive of conventional basic routines for the mostly common tasks to be performed programming a NES game, and just limited to these quick common needs? Like this &quot;read inputs&quot; routine above by <em>Bunnyboy</em>? If there are none, does anyone else think that if one existed (or if one of the previous sources was expanded with an archive of such conventional contents), it would be convenient to refactor the code at its best, without wasting too much time?<br>
<br>
<strong>Edit</strong>: misspelling.
				</div><div class="mdl-card--border"></div>