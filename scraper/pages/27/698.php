<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Nov 3, 2015 at 7:20:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
Having two separate codes (NMI and LOGIC) is a more PRO solution, having an unique script of less than 30000 cycles (in any case) for both is another solution.</div>
<br>
Having a unique script is better for smaller games that don&apos;t have overly complicated logic like Commie Killer, but the first one is VITAL for bigger games like Brony Blaster due to convenience and better handling of slowdown and turning rendering off. For example, only the first solution lets you update the music even when there is slowdown or when you turn rendering off.<br>
<br>
Also, as both User and MMM explained, you should definitely update sprites in the beginning of the NMI regardless of the solution used, and the background should be updated using a buffer, i.e. you have a specific area in the RAM reserved for what you&apos;re going to draw on the screen, store the data to update in this area and simply wait for the next NMI to happen. I&apos;m just telling this to avoid you doing noob mistakes like I used to do - having a lot of drawing routines in your NMI for drawing anything on the background, which consumes space and CPU cycles for nothing. Everything is explained in MMM&apos;s nesdev link, one of my favourite NES related articles.
				</div><div class="mdl-card--border"></div>