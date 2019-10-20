<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Feb 22, 2015 at 6:52:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Ok, got some time off work. This time I&apos;m going to get this working.
<a href="http://pastebin.com/RwxUphFQ" target="_blank">http://pastebin.com/RwxUphFQ...</a>
So what I have been trying to do on and off for the past year or so, is something as simple as
getting an object to move using 8.8 fixed point coordinates(signed), with some inertia/gravity.
Walking right is no problem, but left is acting weird.<br><br>1. It won&apos;t clamp at $FEBB, which object_dx_min is set to. It clamps object_dx_max tho.
I&apos;m using the clamp code thefox posted <a href="http://nintendoage.com/forum/messageview.cfm?StartRow=426&amp;catid=22&amp;threadid=103138" target="_blank">http://nintendoage.com/forum/mess...</a><br><br>2. When I let go of the left button, object_dx keeps on decreasing. What the hell did I do?
I have been tracing through my code while looking at the hex editor in FCEUX now for an hour,
and I don&apos;t understand why the damn variable keeps on decreasing instead of increasing.
Sucks to be bad at math. <span class="sprites_emoticons absmiddle" id="emo_sad"></span><br><br>object_dx  - 16bit speed<br>
object_acc - 8bit acceleration<br>
object_dec - 8bit deceleration<br><br><br>Thanks!
				</div><div class="mdl-card--border"></div>