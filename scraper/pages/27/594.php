<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 18, 2015 at 10:05:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>a0r10n</b></i><br>
	<br>
	Assembly question:<br>
	If I use indirect addressing mode with a register, and the resulting address would overflow, what would happen?<br>
	Like:<br>
	$00 = #$F0<br>
	$01 = #$06<br>
	x = #$20<br>
	Would LDA [$00], x return $0710 or $0610?<br>
	<br>
	I&apos;m new to this. Sorry if the question doesn&apos;t make sense.</div>
I&apos;m not sure indexed indirect works the way you are stating here.<br>
<br>
I never used indexed indirect, while indirect indexed (the one with the &quot;y&quot; register) is pretty useful in some cases.<br>
<br>
I think in your scenario it will take the destination address from zeropage $20 and $21, but I&apos;m not too sure.<br>
What I know for sure is that indexed indirect (the one with the &quot;x&quot;) wastes lots of space in zeropage to store destination adresses, which is why I don&apos;t use it.).<br>
<br>
Better programmers than I am will likely give you a better anwer, sorry if this answer is a bit messy. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
				</div><div class="mdl-card--border"></div>