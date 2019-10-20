<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 19, 2016 at 11:31:56 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	*+4 means skip four bytes. That&apos;s a cheap alternative to the local or unnamed labels in assemblers that don&apos;t have these.<br>
	<br>
	The routine worked all fine for me in a few games, without the suggested changes. <b>They&apos;re mathematically correct</b>, though (eor $ff is a cheap version of negation), but all they affect to is shifting the target point by a pixel. So it only will get issues when the target is really close, like just few pixels away.</div>
<br>
But unfortunately, I think that they cause a problem implemented in such way.
<pre><br><br><a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank" original-href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle">http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle</a><br><br>&quot;&quot;&quot; might be more precise to add a clc adc #$01 after each eor #$ff,
    you have to modify all the preceding bcs *+4/ bcc *+4 to *+7 to
    get the branches correct. also you can omit the clc where bcs is
    used. adding a SEC before all sbc&apos;s might increase the accuracy
    even further. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span> /Oswald &quot;&quot;&quot;<br><br>octant  = $fb  	;; temporary zeropage variable<br><br>atan2   lda x1
        sbc x2
        bcs *+4
        eor #$ff
        tax
        rol octant<br><br>Modifying the code as suggested, the problem is, I think, that:
        CLC
        ADC #$01
will change the status of the carry, BEFORE the following ROL.<br><br>So the code cannot be modified in the way suggested in that note, I think.<br><br>Maybe...<br><br>        LDA 00
        STA octant
atan2   lda x1
        SEC
        sbc x2
        rol octant ; MOVED BEFORE THE BRANCHING
        BNE *+4    ; this will become a +6 instead of a +7 I guess ???
        eor #$ff
      ; CLC        ; NOT NEEDED: THE ROL ABOVE LEAVES THE CARRY CLEAR
        ADC #$01
        tax<br><br>would work?<br><br>I mean, first do the ROL, and then use a BNE rather than a BCS, can do the trick?<br><br>Or, just keep the routine in the (slightly inaccurate) way it was written
by the original author, of course. <span class="sprites_emoticons absmiddle" id="emo_wink">&#xA0;</span><br><br></pre>
<br>
Edit: added a note.
				</div><div class="mdl-card--border"></div>