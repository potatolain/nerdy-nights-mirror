<div class="mdl-card__title"><strong>LucasWeatherby</strong> posted on 
		
			
				
				Apr 11, 2013 at 9:09:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
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
<br>
				</div><div class="mdl-card--border"></div>