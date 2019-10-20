<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 1, 2017 at 11:32:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Alright, I have a question it is a while that I&apos;m thinking about.<br>
<br>
We assume that sprites are transfered each NMI, and stored in $0200, like described here:<br>
<br>
<a href="http://vintage.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=6082" target="_blank" original-href="http://vintage.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=6082">http://vintage.nintendoage.com/fo...</a><br>
<br>
Sprites are hidden behind higher priority sprites.<br>
E.g. sprite in $0200 $0201 $0202 $0203 is displayed on top of anyone else.<br>
<br>
Sprites are hidden behind the background if you set a specific bit into the $020x+2 byte.<br>
E.g. sprite in $0200 $0201 $0202 $0203 is displayed behind the background if the byte in $0202 is, for instance, #$20.<br>
<br>
Now, let&apos;s imagine this scenario:<br>
<pre>x = filled color pixel
o = transparent color pixel<br><br>Background pattern (let&apos;s assume all screen the same):
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx<br><br>Pattern Sprite $0201:
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx
xxxxxxxx<br><br>Attribute $0202: #$20<br><br>Pattern Sprite $0205:
oooxxooo
oooxxooo 
oooxxooo
xxxxxxxx
xxxxxxxx
oooxxooo 
oooxxooo
oooxxooo
 
Attribute $0206: #$00</pre>
X and Y position are exactly the same, for both sprites $0200 (... 1, 2, 3) and $0204 (... 5, 6, 7); i.e. the sprites overlap each other.<br>
<br>
So, can you see what I am wondering about?<br>
If both sprites were displayed above the background (i.e. attribute in $0202 was for instance #$00 instead of #$20), you would NOT see the cross from sprite $0204 $0205 $0206 $0207, and you would just see the square 8x8 px from the sprite $0200 $0201 $0202 $0203.<br>
<br>
In this case instead, with such attribute being #$20, what happens?<br>
<br>
a. you will see nothing, just teh background, since sprite $0200 (..1,2,3) covers sprite $0204 (..5,6,7), and is in turn covered by the background; or<br>
<br>
b. you will see the cross in sprite $0204 (..5,6,7), since sprite $0200 (..1,2,3) would NOT covers $0204 being itself covered by the background; while sprite $0204 (..5,6,7), not covered by the background, will be fully displayed.<br>
<br>
??<br>
I can of course run some test in emulator, but I&apos;d like to know for sure on real hardware.<br>
<br>
I hope this makes sense in English, sorry about that, not my first language. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
if my doubt is not really clear from what I wrote here above, please say so, I&apos;ll try to explain it again.
				</div><div class="mdl-card--border"></div>