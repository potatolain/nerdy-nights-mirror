<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Feb 22, 2015 at 9:20:34 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	1. It won&apos;t clamp at $FEBB, which object_dx_min is set to. It clamps object_dx_max tho.</div>
Probably a problem with where you&apos;re doing the clamping.<br>
<br>
<div class="FTQUOTE" "width: 516px;">
	<i>Originally posted by:&#xA0;<b>DoNotWant</b></i><br>
	<br>
	2. When I let go of the left button, object_dx keeps on decreasing.</div>
Let&apos;s look at the program flow here. Not pressing any buttons, so controller = 0, so &quot;beq notRight&quot; branches. If object_dx &lt; 0, its hibyte is non-zero and the &quot;beq +&quot; on line 23 never branches. Thus object_dec is subtracted from object_dx and the code jumps to dxTox to exit the routine. Seems logical, then, that the variable would keep on decreasing.<br>
<br>
BTW your code could benefit from using more macros e.g. for the 16-bit additions. As it is now, it&apos;s very difficult to read. Personally I also like to use indentation quite heavily (although your assembler may or may not allow indented labels). Might not be a bad idea to rewrite the code from scratch, sometimes you&apos;ll find that the bug has magically disappeared after a fresh try. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>