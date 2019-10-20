<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Jan 18, 2018 at 7:29:05 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>GradualGames</b></i><br>
<br>
&#xA0; lda controller_buffer+buttons::_a<br>
&#xA0;</div>
Thank you for your reply!&#xA0; I imagined something like this.&#xA0; I really appreciate the help.&#xA0; One thing that is escaping me is the syntax from above, &apos;lda controller_buffer+buttons::_a&apos;&#xA0; I have never seen the &apos;::&apos; is that syntax or just part of the variable name?&#xA0; Sorry still a bit new to this.<br>
<br>
&#xA0;</div>
Assuming you have a variable in ram somewhere called controller_buffer which reserves 8 bytes,<br>
<br>
Sorry about that, that&apos;s ca65 (an alternative to nesasm) getting a member of a struct out. It&apos;s the same thing as if you did something like this in nesasm:<br>
A_OFFSET = 0<br>
B_OFFSET = 1<br>
SELECT_OFFSET = 2<br>
START_OFFSET = 3<br>
UP_OFFSET = 4<br>
DOWN_OFFSET = 5<br>
LEFT_OFFSET = 6<br>
RIGHT_OFFSET = 7<br>
<br>
and then to look at the A button it&apos;d just be lda controller_buffer+A_OFFSET.&#xA0; ca65 has structs which enable you to do the exact same thing but without having to enumerate the equates manually like in nesasm. in ca65, you can do:<br>
<br>
.struct buttons<br>
&#xA0;&#xA0;&#xA0; _a&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _b&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _select&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _start&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _up&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _down&#xA0;&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _left&#xA0;&#xA0;&#xA0; .byte<br>
&#xA0;&#xA0;&#xA0; _right&#xA0;&#xA0; .byte<br>
.endstruct<br>
<br>
and then it figures out the offsets for you by their sizes. and then you can pluck out those numbers by going buttons::_a&#xA0; or buttons::_select&#xA0; etc. etc.
				</div><div class="mdl-card--border"></div>