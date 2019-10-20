<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Feb 22, 2015 at 1:47:17 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	Let&apos;s look at the program flow here. Not pressing any buttons, so controller = 0, so &quot;beq notRight&quot; branches. If object_dx &lt; 0, its hibyte is non-zero and the &quot;beq +&quot; on line 23 never branches. Thus object_dec is subtracted from object_dx and the code jumps to dxTox to exit the routine. Seems logical, then, that the variable would keep on decreasing.<br>
	<br>
	BTW your code could benefit from using more macros e.g. for the 16-bit additions. As it is now, it&apos;s very difficult to read. Personally I also like to use indentation quite heavily (although your assembler may or may not allow indented labels). Might not be a bad idea to rewrite the code from scratch, sometimes you&apos;ll find that the bug has magically disappeared after a fresh try.<br>
	&#xA0;</div>
Dooooooooooooooh! I forgot to add a bmi left there ;_;<br>
Works so-so now when moving left, just some minor adjustments I believe.<br>
This I think was because I had something working, and then I added something after that broke it.<br>
Lesson learned.<br>
<br>
This is the 3rd or 4th time I rewrite this. :/<br>
I just started using ASM6, so I think I can use whitespace as I please, unlike in NESASM.<br>
The macro system is a lot nicer in ASM6 also, so I should probably use that more, yes.<br>
<br>
Thank you so much!<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<br>
	This means you move by 1px each 256 on the speed scale?<br>
	<br>
	I&apos;m not 100% sure about what are your goals here, and I&apos;m rather new to 6502 Assembly, but I kind of think your approach is complex: you can use +FF (+FE +FD ...) to decrement by one (two, three, ...), and use ADC instead of SBC also when moving left: from my little experience, this simplifies the math involved. That said, rely on other more experienced than I am programmers, maybe I am missing something here. I hope I could help more.</div>
Doesn&apos;t have to be 1/256, I could set it to 1 pixel every second frame if I wanted to, or something like that.<br>
What I hear is, if you can used signed numbers(I&apos;m a little shaky on that one <span class="sprites_emoticons absmiddle" id="emo_tongue"></span>), stuff like gravity/inertia/jumping can be easier to pull off. I have tried doing what I&apos;m doing here with unsigned numbers, but I didn&apos;t get anywhere then, just spaghetti code. That was about a year ago tho.<br>
<br>
				</div><div class="mdl-card--border"></div>