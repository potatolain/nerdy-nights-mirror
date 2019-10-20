<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Apr 30, 2015 at 2:30:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Using a debugger is definitely a skill worth learning! Usually the debugging flow is that you set a breakpoint in some interesting place of code, then start single stepping it, and at each step verify that the program is behaving as you intended (register values, memory values, branches taken, etc). And if it&apos;s not behaving as expected, then you figure out what is causing the problem, e.g. by starting the stepping from a little further back, or by using memory breakpoints to find out how a &quot;bad&quot; value got written to memory, etc.
<br>
<br>One tip for debugging is that if you want to easily start stepping the code from a known point, you can put something like a BIT $5555 instruction in your code, and then set a &quot;memory read&quot; breakpoint on $5555 (note: $5555 is an arbitrarily chosen address, but it&apos;s good because it&apos;s in a usually unused memory space). You&apos;ll then automatically land at the right place after the breakpoint hits.
<br>
<br>About the code... I&apos;ll just say that nobody (I think?) likes reviewing several hundred lines of of assembly code at once. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> So, you&apos;re more likely to get an answer to that type of questions if you accompany them with more concise sections of code. Of course there&apos;s a line to be drawn there, if some piece of code depends on some other piece of code, it might be impossible to help without seeing both parts.
				</div><div class="mdl-card--border"></div>