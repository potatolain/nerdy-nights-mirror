<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 18, 2016 at 9:48:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	More tables it seems, in order to get the Y and X rates of movement.<br>
	&#xA0;</div>
<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	Yes, if you just need to make an aimed shot, all you need is two more tables, sin/cos scaled to the projectile speed.<br>
	&#xA0;</div>
<br>
If this can help. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<pre><br><br>Assiming Vectorial Speed == 100**
Angles in binary (0-255)
Assuming Angle 00 == South (Down)*
Assuming Angle 64 == East (Right)*
*[of course, you can build a lookup
  table adapting the +/- signs on
  the list to the direction of the
  angle 00 on the ATAN routine you
  are using, and the rotation clock
  or counter clock wise of it].
**[of course, you can scale it down
   to the speed  needed, e.g. speed
   of 50, divide all values by 2].<br><br>List0064, from 0 to 64:<br><br>  A   X   Y  ; A = angle, X/Y = vectors on X/Y axis
  0   0 100  ; this is a 0&#xB0; Angle in range 0-360&#xB0;
  1   2  99
  2   4  99
  3   7  99
  4   9  99
  5  12  99
  6  14  98
  7  17  98
  8  19  98
  9  21  97
 10  24  97
 11  26  96
 12  29  95
 13  31  94
 14  33  94
 15  35  93
 16  38  92
 17  40  91
 18  42  90
 19  44  89
 20  47  88
 21  49  87
 22  51  85
 23  53  84
 24  55  83
 25  57  81
 26  59  80
 27  61  78
 28  63  77
 29  65  75
 30  67  74
 31  68  72
 32  70  70  ; this is a 45&#xB0; Angle in range 0-360&#xB0;
 33  72  68
 34  74  67
 35  75  65
 36  77  63
 37  78  61
 38  80  59
 39  81  57
 40  83  55
 41  84  53
 42  85  51
 43  87  49
 44  88  47
 45  89  44
 46  90  42
 47  91  40
 48  92  38
 49  93  35
 50  94  33
 51  94  31
 52  95  29
 53  96  26
 54  97  24
 55  97  21
 56  98  19
 57  98  17
 58  98  14
 59  99  12
 60  99   9
 61  99   7
 62  99   4
 63  99   2
 64 100   0  ; this is a 90&#xB0; Angle in range 0-360&#xB0;<br><br>From 64 to 128:<br><br> - revert the list0064
 - make the Y negative<br><br>  A   X   Y  ; A = angle, X/Y = vectors on X/Y axis
 64 100   0  ; this is a 90&#xB0; Angle in range 0-360&#xB0;
 65  99  -2
 66  99  -4
 67  99  -7
...
125   7 -99
126   4 -99
127   2 -99
128   0 -100 ; this is a 180&#xB0; Angle in range 0-360&#xB0;<br><br>From 128 to 192:
 - copy the list0064
 - make both X and Y negative<br><br>  A   X   Y  ; A = angle, X/Y = vectors on X/Y axis
128   0 -100 ; this is a 180&#xB0; Angle in range 0-360&#xB0;
129  -2 -99
130  -4 -99
131  -7 -99
 ...
189 -99  -7
190 -99  -4
191 -99  -2
192 -100  0  ; this is a 270&#xB0; Angle in range 0-360&#xB0;<br><br>From 192 to 0:
 - revert the list0064
 - make the X negative<br><br>  A   X   Y  ; A = angle, X/Y = vectors on X/Y axis
192 -100  0  ; this is a 270&#xB0; Angle in range 0-360&#xB0;
193 -99   2
194 -99   4
195 -99   7
...
253  -7  99
254  -4  99
255  -2  99
  0   0 100  ; this is a 360&#xB0; Angle in range 0-360&#xB0;
</pre>
Please report any inaccuracy.<br>
<br>
Thanks.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>