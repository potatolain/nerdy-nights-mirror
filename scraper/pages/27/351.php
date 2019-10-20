<div class="mdl-card__title"><strong>Jazzmarazz</strong> posted on 
		
			
				
				Jun 23, 2014 at 4:33:10 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I am using RGDBS to compile my gameboy ASM programs and need help with a few sound registers. I couldn&apos;t find anyplace else to ask so,<br>
<br>
The names are used from the &quot;Everything You wanted to KNow about Gameboy&quot; document.<br>
<br>
<u>question 1.</u><br>
<br>
$FF19 - NR 24 - AUD2HIGH<br>
<br>
Bit 6 - Counter/Consecutive selection<br>
<br>
If this bit is reset, will the sound sustain and when this bit is set, will the sound play for as long as is set in AUD2LEN, bits 5-0?<br>
<br>
[u]question 2.[/u]<br>
<br>
$FF1C - NR 32 - AUD3LEVEL<br>
<br>
This register states that the Wave Pattern RAM is located from $FF30 - $FF3F and I understand that the volume is set here. How is wave patter RAM processed though? Are all 32 bits played sequentially, 4-bits at a time?<br>
<br>
<u>question 3.&#xA0;</u><br>
<br>
$FF17 - NR 22 - AUD2ENV<br>
<br>
Bit 3 - Attenuate/Amplify<br>
<br>
Does this mean that I may not Amplify and then Attenuate? Only one at a time? Is there an easy way to use the sound length data of a channel to toggle an attack and then decay once the sound completes?<br>
<br>
<u>question 4.&#xA0;</u><br>
<br>
$FF22 - NR 43 - AUD4POLY<br>
<br>
I don&apos;t get this register in the least. What is going on? Here is the full description:<br>
<br>
Contents - Sound Mode 4 register, polynomial counter (R/W)<br>
<br>
Bit 7-4 - Selection of the shift clock frequency of the<br>
polynomial counter<br>
Bit 3 - Selection of the polynomial counter&apos;s step<br>
Bit 2-0 - Selection of the dividing ratio of frequencies<br>
<br>
Selection of the dividing ratio of frequencies:<br>
000: f * 1/2^3 * 2<br>
001: f * 1/2^3 * 1<br>
010: f * 1/2^3 * 1/2<br>
011: f * 1/2^3 * 1/3<br>
100: f * 1/2^3 * 1/4<br>
101: f * 1/2^3 * 1/5<br>
110: f * 1/2^3 * 1/6<br>
111: f * 1/2^3 * 1/7 f = 4.194304 Mhz<br>
<br>
Selection of the polynomial counter step:<br>
0: 15 steps<br>
1: 7 steps<br>
<br>
Selection of the shift clock frequency of the polynomial<br>
counter:<br>
<br>
0000: dividing ratio of frequencies * 1/2<br>
0001: dividing ratio of frequencies * 1/2^2<br>
0010: dividing ratio of frequencies * 1/2^3<br>
0011: dividing ratio of frequencies * 1/2^4<br>
: :<br>
: :<br>
: :<br>
0101: dividing ratio of frequencies * 1/2^14<br>
1110: prohibited code<br>
1111: prohibited code
				</div><div class="mdl-card--border"></div>