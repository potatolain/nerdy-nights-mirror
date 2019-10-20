<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 18, 2015 at 10:38:39 PM 
			
			
			
			
		
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
Also, this one:<br>
<br>
&#xA0;<a href="http://skilldrick.github.io/easy6502/#addressing" target="_blank">http://skilldrick.github.io/easy6...</a><br>
<br>
---<br>
<br>
Indexed indirect: ($c0,X)<br>
<br>
This one&#x2019;s kinda weird. It&#x2019;s like a cross between zero page,X and indirect. Basically, you take the zero page address, add the value of the X register to it, then use that to look up a two-byte address. For example:<br>
<br>
LDX #$01<br>
LDA #$05<br>
STA $01<br>
LDA #$06<br>
STA $02<br>
LDY #$0a<br>
STY $0605<br>
LDA ($00,X)<br>
<br>
Memory locations $01 and $02 contain the values $05 and $06 respectively. Think of ($00,X) as ($00 + X). In this case X is $01, so this simplifies to ($01). From here things proceed like standard indirect addressing - the two bytes at $01 and $02 ($05 and $06) are looked up to form the address $0605. This is the address that the Y register was stored into in the previous instruction, so the A register gets the same value as Y, albeit through a much more circuitous route. You won&#x2019;t see this much.<br>
<br>
---<br>
<br>
So, your addressing above is neither &quot;indirect indexed&quot; nor &quot;indexed indirect&quot;.<br>
<br>
($00,x) = OK, indexed indirect<br>
($00),y = OK, indirect indexed<br>
($00),x = I fear means nothing<br>
<br>
I hope I did not write anything stupid, and that this could help a bit. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
BTW: welcome! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<br>
				</div><div class="mdl-card--border"></div>