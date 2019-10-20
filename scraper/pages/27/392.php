<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Sep 10, 2014 at 8:41:34 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	Two very basic questions today<br>
	<br>
	-Can subroutines be placed into subfolders? Or does this only work for other types of data? I changed a bunch of stuff around and tried using subfolders for the first time, but it does not seem to be reading them and the program fails to compile.<br>
	<br>
	-What is the difference between JSR and JMP? When should one be used and not the other? I get the feeling that I&apos;ve been a little too lucky in guessing which one to use and haven&apos;t learned the hard way yet...</div>
<br>
Yes, you can place any code anywhere, as long as you tell your assembler where to find the files. With nesasm, I imagine that would involve explicitly telling it where to find each include file, e.g. &#xA0;.include &quot;enemies/slime.inc&quot; . &#xA0;With CA65, you can actually give it a list of folders to search for include files, so you don&apos;t need to spell out exactly where to find each file, though that is still an option I believe.<br>
<br>
JSR remembers where you were when you called it and places the current PC on the stack (can&apos;t remember if it advances it before or after the call, though), then jumps to the address you gave it. When your code hits an RTS, it pops off that PC that was stored earlier and resumes right AFTER the original JSR call. That&apos;s just a subroutine call. In fact it stands for &quot;jump sub routine.&quot; &#xA0;you have to be careful to always use an rts with this or you will crash your game with invalid stack data! &#xA0;I actually had &#xA0;once very odd bug in Nomolos because I forgot an rts in a routine so it just kept running right into another bit of code.<br>
<br>
That said though you ought to be using jsr and subroutines all over the place. This is one of the only natively available elements of abstraction that straight 6502 gives you. With well named routines with well-defined responsibilities, you can actually write pretty clean code with it.&#xA0;<br>
<br>
JMP does not remember where you were and just goes straight where you tell it to. It is neat though in that it has the capability of doing indirect jumps as well as direct. This allows you to use it in combination with jsr to call routines function-pointer style a-la C. Very powerful.<br>
<br>
In general, try to avoid using JMP too much, it can lead to very hard to follow code flow. Generally, I only use it when I&apos;m transitioning between game states, and when I&apos;m returning to the top of an infinite loop. And also for indirect JSRs, like this:<br>
<br>
<div>
	indirect_jsr_w0:</div>
<div>
	&#xA0; jmp (w0) &#xA0;;where w0 is a zp variable that has reserved 2 bytes</div>
<div>
	<br>
	<br>
	then, somewhere in your code:<br>
	<br>
	&#xA0; lda #&lt;a_routine_you_want_to_call<br>
	&#xA0; sta w0<br>
	&#xA0; &#xA0;lda #&gt;a_routine_you_want_to_call<br>
	&#xA0; &#xA0;sta w0+1<br>
	&#xA0; jsr indirect_jsr_w0<br>
	<br>
	You can then dynamically load addresses of routines you want to call. Very useful say if you have enemy definitions and a table of addresses of routines that constitute the enemys&apos; &quot;brains.&quot;</div>
				</div><div class="mdl-card--border"></div>