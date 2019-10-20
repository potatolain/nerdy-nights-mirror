<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 18, 2016 at 10:13:52 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Just in case this could helps anyone.<br>
<br>
<br>This the List0064 here above in HEX values:<br>
<br>
<pre> A     X     Y
00    00    64
01    02    63
02    04    63
03    07    63
04    09    63
05    0C    63
06    0E    62
07    11    62
08    13    62
09    15    61
0A    18    61
0B    1A    60
0C    1D    5F
0D    1F    5E
0E    21    5E
0F    23    5D
10    26    5C
11    28    5B
12    2A    5A
13    2C    59
14    2F    58
15    31    57
16    33    55
17    35    54
18    37    53
19    39    51
1A    3B    50
1B    3D    4E
1C    3F    4D
1D    41    4B
1E    43    4A
1F    44    48
20    46    46
21    48    44
22    4A    43
23    4B    41
24    4D    3F
25    4E    3D
26    50    3B
27    51    39
28    53    37
29    54    35
2A    55    33
2B    57    31
2C    58    2F
2D    59    2C
2E    5A    2A
2F    5B    28
30    5C    26
31    5D    23
32    5E    21
33    5E    1F
34    5F    1D
35    60    1A
36    61    18
37    61    15
38    62    13
39    62    11
3A    62    0E
3B    63    0C
3C    63    09
3D    63    07
3E    63    04
3F    63    02
40    64    00
</pre><br>
<br>
For the rest of the table (and the rest of the circle) involving negative values of the X/Y vectors, assuming that the speed is &lt;= 127, you can use two&apos;s complement math to store negative values, so that you can always add the value in the lookup tables to the previous value (e.g. initial position 42, you need to sub 01, and you sum FF instead: 42 + FF = 41).<br>
I assume everyone in here knows about it, but for the sake of complete info I post a link to it: <a href="https://en.wikipedia.org/wiki/Two" target="_blank">https://en.wikipedia.org/wiki/Two...</a>&apos;s_complement<br>
<br>
<br>Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>