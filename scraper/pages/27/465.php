<div class="mdl-card__title"><strong>MadnessVX</strong> posted on 
		
			
				
				Dec 21, 2014 at 8:09:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Gotcha, out it goes then. Thanks!<br>
<br>
Edit:<br>
<br>
[SOLVED AT NESDEV]<br>
<br>
Ok, so if I wanted to setup the Sunsoft 5B mapper based off of this information:<br>
<ul>
	<li>
		CPU $6000-$7FFF: 8 KB Bankable PRG ROM or PRG RAM</li>
	<li>
		CPU $8000-$9FFF: 8 KB Bankable PRG ROM</li>
	<li>
		CPU $A000-$BFFF: 8 KB Bankable PRG ROM</li>
	<li>
		CPU $C000-$DFFF: 8 KB Bankable PRG ROM</li>
	<li>
		CPU $E000-$FFFF: 8 KB PRG ROM, fixed to the last bank of ROM</li>
	<li>
		PPU $0000-$03FF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $0400-$07FF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $0800-$0BFF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $0C00-$0FFF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $1000-$13FF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $1400-$17FF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $1800-$1BFF: 1 KB Bankable CHR ROM</li>
	<li>
		PPU $1C00-$1FFF: 1 KB Bankable CHR ROM</li>
</ul>
<br>
Would I need to write this:<br>
<br>
MEMORY {<br>
&#xA0;&#xA0;&#xA0; ZP:&#xA0;&#xA0;&#xA0;&#xA0; start = $00,&#xA0;&#xA0;&#xA0; size = $0100, type = rw, file = &quot;&quot;;<br>
&#xA0;&#xA0;&#xA0; OAM:&#xA0;&#xA0;&#xA0; start = $0200,&#xA0; size = $0100, type = rw, file = &quot;&quot;;<br>
&#xA0;&#xA0;&#xA0; RAM:&#xA0;&#xA0;&#xA0; start = $0300,&#xA0; size = $0500, type = rw, file = &quot;&quot;;<br>
&#xA0;&#xA0;&#xA0; HDR:&#xA0;&#xA0;&#xA0; start = $0000,&#xA0; size = $0010, type = ro, file = %O, fill = yes, fillval = $00;<br>
<span>&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $6000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $8000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $A000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $C000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $E000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $0000,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $0400,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $0800,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $0C00,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $1000,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $1400,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $1800,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $1C00,&#xA0; size = $0400, type = ro, file = %O, fill = yes, fillval = $00;</span><br>
<span>Edit:<br>
Found out this does not work. readjusted to use:&#xA0; </span><br>
&#xA0;&#xA0;&#xA0; PRG:&#xA0;&#xA0;&#xA0; start = $6000,&#xA0; size = $A000, type = ro, file = %O, fill = yes, fillval = $00;<br>
&#xA0;&#xA0;&#xA0; CHR:&#xA0;&#xA0;&#xA0; start = $0000,&#xA0; size = $2000, type = ro, file = %O, fill = yes, fillval = $00;<br>
}<br>
<br>
Then would I need a segment for each of those banks 8KB banks? Or in the case of the chr, 1KB banks?<br>
<br>
SEGMENTS {<br>
&#xA0;&#xA0;&#xA0; ZEROPAGE: load = ZP,&#xA0; type = zp;<br>
&#xA0;&#xA0;&#xA0; OAM:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; load = OAM, type = bss, align = $100;<br>
&#xA0;&#xA0;&#xA0; RAM:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; load = RAM, type = bss;<br>
&#xA0;&#xA0;&#xA0; HEADER:&#xA0;&#xA0; load = HDR, type = ro;<br>
&#xA0;&#xA0;&#xA0; CODE0:&#xA0;&#xA0;&#xA0;&#xA0; load = PRG, type = ro,&#xA0; start = $6000;<br>
&#xA0;&#xA0;&#xA0; CODE1:&#xA0;&#xA0;&#xA0;&#xA0; load = PRG, type = ro,&#xA0; start = $8000;<br>
&#xA0;&#xA0;&#xA0; CODE2:&#xA0;&#xA0;&#xA0;&#xA0; load = PRG, type = ro,&#xA0; start = $A000;<br>
&#xA0;&#xA0;&#xA0; CODE3:&#xA0;&#xA0;&#xA0;&#xA0; load = PRG, type = ro,&#xA0; start = $C000;<br>
&#xA0;&#xA0;&#xA0; CODE4:&#xA0;&#xA0;&#xA0;&#xA0; load = PRG, type = ro,&#xA0; start = $E000;<br>
&#xA0;&#xA0;&#xA0; RODATA:&#xA0;&#xA0; load = PRG, type = ro;<br>
&#xA0;&#xA0;&#xA0; VECTORS:&#xA0; load = PRG, type = ro,&#xA0; start = $FFFA;<br>
&#xA0;&#xA0;&#xA0; TILES0:&#xA0;&#xA0;&#xA0; load = CHR, type = ro; (<span>Would I need to specify where they start as well?</span>)<br>
&#xA0;&#xA0;&#xA0; ETC...<br>
}<br>
<br>
Everything seems to compile fine so far, just winging it at the moment. Lemme know if this is horribly wrong!<br>
				</div><div class="mdl-card--border"></div>