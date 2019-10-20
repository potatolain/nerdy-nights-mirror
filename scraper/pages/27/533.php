<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 22, 2015 at 7:12:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<strong>object_dx - 16bit speed</strong><br>
	&#xA0;</div>
This means you move by 1px each 256 on the speed scale?<br>
<br>
I&apos;m not 100% sure about what are your goals here, and I&apos;m rather new to 6502 Assembly, but I kind of think your approach is complex: you can use +FF (+FE +FD ...) to decrement by one (two, three, ...), and use ADC instead of SBC also when moving left: from my little experience, this simplifies the math involved. That said, rely on other more experienced than I am programmers, maybe I am missing something here. I hope I could help more. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>