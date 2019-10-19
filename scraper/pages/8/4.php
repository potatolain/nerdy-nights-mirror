<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Apr 11, 2013 at 10:02:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>LucasWeatherby</b></i><br>
	<br>
	<div class="FTQUOTE">
		Your task is to separate out the code that sets the pointer variables from the code that copies the loop. That way you can have multiple backgrounds that use different pointer loading code, but the same copy code.<br>
		<div>
			&#xA0;</div>
	</div>
	<br>
	Ok, question on this. I made a subroutine that is called from within in the &quot;LoadBackground&quot; section that will read Accumulator A and draw a background based off of the Accumulators value. It works fine and dandy if I hardcode the value of the Accumulator right before calling the subroutine.<br>
	<br>
	I then made my &quot;ReadA&quot; section(functions, whatever you call these bad boys) change the value of the Accumulator when pressed. But the background never changes.<br>
	<br>
	This leads me to believe that this is because the call is from within the Reset section of code and only called on startup. Therefore to solve my problem (and the question I am really asking is) I need to make my LoadBackground and Subroutine call from the NMI? Does that sound right? This is probably a dumb question, just want to make sure(I am away from my personal computer to try this method out. This was the idea that came to me in my dreams last night, though I would ask you guys about it).<br>
	<br>
	And is it ok to redraw the background from within the NMI?<br>
	&#xA0;</div>
Not a dumb question at all. &#xA0;And good job diagnosing your problem! &#xA0;That&apos;s exactly right. &#xA0;The LoadBackground section is only run on reset, and that is before the controller is ever read.<br>
<br>
The NMI isn&apos;t long enough to do a full background rewrite, but you can definitely draw some tiles and then continue drawing more the next NMI. &#xA0;So your idea is on the right track, just don&apos;t expect to be able to copy a whole background&apos;s worth of tiles in one NMI. &#xA0;Try writing a new subroutine called &apos;DrawTwoRows&apos; or something and call that in your NMI after the controller read.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>