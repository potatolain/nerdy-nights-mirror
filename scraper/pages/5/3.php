<div class="mdl-card__title"><strong>KennyB</strong> posted on 
		
			
				
				May 17, 2008 at 6:49:18 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i><br><br>Thats where the CLC and SEC instructions right before the add and subtract come in.
<br>
<br>ADC stands for ADd with Carry.  It is actually doing A + value + carry.  Before doing the add you CLear Carry (CLC) so it does A + value + 0.
<br>
<br>SBC is SuBtract with Carry, A - value - opposite of carry.  Before doing the subtract you SEt Carry (SEC) to 1.  Opposite of carry will now be 0,  so it does A - value - 0.  
<br>
<br>When going left you are probably doing CLC before the SBC.  That clears the carry, so the subtract is doing A - value - 1.  Thats where the extra speed comes in because you end up subtracting 2 instead of 1.</div><br><br>That solved my speed problem, thx ! <br><br>But I still have the opposite direction problem. If I press up, it goes down. <br>Here is my up and down code. Is there something wrong with it ? <br><br><br><br><div class="FTQUOTE"><i><span style="font-weight: bold;">code</span><b>&#xA0;</b></i><br><br>ReadUp: <br>&#xA0; LDA $4016&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; AND #%00000001 <br>&#xA0; BEQ ReadUpDone<br>&#xA0; LDA $0200&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; CLC&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; ADC #$01&#xA0;&#xA0; <br>&#xA0; STA $0200&#xA0; <br>ReadUpDone: <br><br>ReadDown: <br>&#xA0; LDA $4016&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; AND #%00000001&#xA0; <br>&#xA0; BEQ ReadDownDone&#xA0; <br>&#xA0; LDA $0200 <br>&#xA0; SEC&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; SBC #$01&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; STA $0200&#xA0;&#xA0;&#xA0; <br><br>ReadDownDone:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br></div><br><br>
				</div><div class="mdl-card--border"></div>