<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jul 19, 2015 at 8:14:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>sweggreg</b></i><br>
<br>
I have two questions that are holding me back from collisions and by extension game creation. When doing a If A &gt; B Then C thing the syntax looks like<br>
LDA B<br>
CMP A<br>
BCS branch<br>
But is this true if B or A is larger as I see conflicting examples when I look for this answer.<br>
Also can someone explain how ADC and/or SEC work to do something like If A &lt; (B+5) Then C?<br>
Thanks.</div>
<br>
LDA #$02<br>
CMP #$01<br>
BCS ... ; will take the branch the value in accumulator is bigger.<br>
<br>
LDA #$01<br>
CMP #$01<br>
BCS ... ; will take the branch the value in accumulator is equal.<br>
<br>
LDA #$00<br>
CMP #$01<br>
BCS ... ; will <strong>not</strong> take the branch the value in accumulator is lower.<br>
<br>
---<br>
<br>
LDA #$02<br>
CMP #$01<br>
BCC ... ; will <strong>not</strong> take the branch the value in accumulator is bigger.<br>
<br>
LDA #$01<br>
CMP #$01<br>
BCC ... ; will <strong>not</strong> take the branch the value in accumulator is equal.<br>
<br>
LDA #$00<br>
CMP #$01<br>
BCC ... ; will take the branch the value in accumulator is lower.<br>
<br>
---<br>
<br>
Chose BCS (carry set) or BCC (carry clear) depending on your scenario.<br>
<br>
Or other branching opcodes mnemonics. There is a link I posed above with all opcodes mnemonics.<br>
<br>
---<br>
<br>
<strong><em>If A &lt; (B+5) Then C?</em></strong><br>
<br>
<s>LDA &quot;varB&quot; ; &lt;- pseudocode<br>
CLC<br>
ADC #$05 ; add 5<br>
CMP &quot;varA&quot; ; &lt;-pseudocode<br>
BCS &quot;gotoaddressC&quot; ; B+5 is &gt;= A, hence A &lt; B+5, hence C happens</s><br>
<br>
<strong>Edit</strong>:<br>
<br>
(see TheFox post here below)<br>
<br>
LDA &quot;varB&quot; ; &lt;- pseudocode<br>
CLC<br>
ADC #$04 ; add 4<br>
CMP &quot;varA&quot; ; &lt;-pseudocode<br>
BCS &quot;gotoaddressC&quot; ; B+4 is &gt;= A, hence A &lt; B+5, hence C happens<br>
<br>
Also,<br>
<br>
&#xA0;<a href="http://www.obelisk.demon.co.uk/6502/reference.html" target="_blank" original-href="http://www.obelisk.demon.co.uk/6502/reference.html">http://www.obelisk.demon.co.uk/65...</a><br>
<br>
here the opcodes list link.
				</div><div class="mdl-card--border"></div>