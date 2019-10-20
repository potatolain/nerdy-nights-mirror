<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				May 23, 2014 at 11:22:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	When you have more than 4, or are keeping track of multiple bullet sets, counters are impractical. You&apos;re either going to have to set up a new &quot;available&quot; variable for each sprite or use the position.<br>
	<br>
	i.e. if he had 4 sets of 4 bullets all of which could fire as a set of 4 independently, using counters wouldn&apos;t work very well.<br>
	<br>
	Setting up a bit more code to start with is easier to learn and has more uses.</div>
<br>
Why would counters not work correctly? Every bomb deleted, you would use a 4 byte array to store the offset of the available sprite, then use a counter, still, to count up until 4 are off screen, then when there are 4 again, you read the sprites from the 4 byte array. The count, will also double as the index to the data. Very easy to do, something that would be way over designed and contribute 10x more code checking them all than just doing it with counters, unless I am misunderstanding how it&apos;s supposed to work in your example.<br>
<br>
And yes, it is good to start out with this, but we need to make sure they understand how there could be better ways to do this. Or just different ways of thinking, it&apos;s not that people can&apos;t program good, like I said, it&apos;s that the tutorial doesn&apos;t do a very good job of it. Would it be a good idea to make a &quot;How to program in assembly better.&quot; article to help people out with their programms techniques so they can clean up their code and know what to improve on after they learn from the nerdy nights?
				</div><div class="mdl-card--border"></div>