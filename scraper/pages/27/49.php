<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				May 18, 2013 at 9:12:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>XYZ</b></i><br>
	<br>
	I am taking a slightly different approach to learning 6502 than jumping right into the Nerdy Nights. I have read the first 4 tutorials but before I move on, I am trying to learn 6502 from scratch. Every book I have skimmed always begins with hex-dec-bin and doing math with these. The next thing covered is explanations of the 7 flags and operand formats, such as indexed direct and immediate. My question is for some of the veterans to tell us what stuff is key and most important to know in 6502. Just so we have an idea what things we need to have a good understanding of. I feel like ASCII code is not useful for NES game making, so I have not spent as much time on it as I have with HEX math. I am hoping for a response that might give us a very skeletal overview of what stuff is integral. Clearly, the 6502 books don&apos;t cover sprites, sound, controller input, or anything to make games - it&apos;s just about learning the actual language and its concepts.<br>
	<br>
	Also, I am having a hard time with LDA/STA and remembering which does which. Sure, it might be easy for some, but I keep confusing the two. How do you guys go about this? Load the Accumulator and Store the Accumulator. Sound the same but do two completely different things. I hate having to look in my notes every single time. I need &quot;hints&quot; and &quot;tricks&quot; to memorizing key stuff.<br>
	<br>
	Do you guys take notes? Do you write things down in a notebook or do everything using the computer?<br>
	<br>
	Mostly general questions about approaches you take. Not necessarily specifics to a program I am working on. But that&apos;s because I haven&apos;t started my program yet. Your answers will help me move forward though!!</div>
<br>
The more code you write, it&apos;ll become more clear. Maybe try to come up with metaphors for yourself. I probably take it for granted, but I think of the accumulator as like, your workspace. LDA puts a number on your workspace. STA, &quot;stores&quot; something that had been on your workspace (but leaves a copy there) when you&apos;re done with what you had been working on. Not sure if that helps.<br>
<br>
When I first did NES code, I had had some x86 background but had to look things up quite a bit to get a hang of 6502. New assembly languages will have a different feel but will use the same concepts, if that makes sense. Once you know binary, hex, bitwise operations, branches, addressing modes, 2&apos;s complement....etc. you can pick up any assembly language. Basically just keep at it.<br>
<br>
It&apos;s hard to gain so much fluency in assembly language that you don&apos;t have to sketch something out &quot;in pseudo code&quot; first. I&apos;m starting to get almost that comfortable with 6502, after one game and now working on another, but usually I have my devlog up while working, and I think &quot;out loud&quot; into my text document for quite a while before coding something. I usually break it down into lots of tiny chunks and work on them one at a time. I definitely wouldn&apos;t fit the stereotypical thought of &quot;guy staying up late hammering out code at a million miles an hour&quot; heck, sometimes I sit and think and write in my devlog and just sit there..for a long time, before actually coding anything. Even now, it is a slow process. I have no idea if this is normal or not, or if there are some folks out there who can do it way more efficiently, but....I&apos;m able to do it and I&apos;m happy I&apos;m doing it.&#xA0; I guess that&apos;s why I feel so compelled to get others into it or help out somehow. I know I&apos;m not a genius, I just realllly want to do this stuff, even if I&apos;m slow as moles&apos; asses in january at it.
				</div><div class="mdl-card--border"></div>