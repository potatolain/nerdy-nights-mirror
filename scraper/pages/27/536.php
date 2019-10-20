<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 22, 2015 at 7:15:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	Doesn&apos;t have to be 1/256, I could set it to 1 pixel every second frame if I wanted to, or something like that.<br>
	What I hear is, if you can used signed numbers(I&apos;m a little shaky on that one ), stuff like gravity/inertia/jumping can be easier to pull off. I have tried doing what I&apos;m doing here with unsigned numbers, but I didn&apos;t get anywhere then, just spaghetti code. That was about a year ago tho.<br>
	&#xA0;</div>
Signed number are great, and two&apos;s complement is a good solution for what I can tell.<br>
I was not affirming that your solution was unperfect, I was just saying that, _from my little experience_, to increase/decrease a coordinate by +/- one, two, three, ..., sometimes is easier and cleaner to call a subroutine with an ADC in both cases (+ or -) and when decreasing (-) ADD the negative (FF, FE, FD) value rather than SUBTRACT the positive (01 02 03); I hope all this makes sense in English. But again, probably in your case is better your way, or even maybe I still missing something you are trying to achieve here. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>