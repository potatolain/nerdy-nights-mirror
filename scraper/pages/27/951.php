<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Sep 15, 2017 at 8:13:47 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You could set up a routine to check the player sprite against every other sprite, or a certain range of them, and then go to a routine that determines what has been contacted, and what to do about it. That is kind of what I did with Spook-o&apos;-tron since it is all sprite based, in an earlier build (in the end they all became the same points-wise and in terms of contact).<br>
<br>
The issue is that it eats up a lot of CPU due to all of the checks, and you can only have 64 sprites total. The other problem with sprite-based platforms is the 8 sprites per scan line limit. Since backgrounds and sprites work different enough, if you want to expand your idea down the road it might be a good idea to start looking into doing platforms with backgrounds sooner than later (that would also allow your gravity engine to carry over), otherwise you could end up doing the work twice, and in two different ways (very little of my sprite based collision code seems to carry over to background use). MRN has a great tutorial on this, his Week 7 lesson (probably need to begin at week 5 for it to make sense; I skipped his ones deling with sprites when I started out). That is set up for treating all BG tiles the same, but with a small modification you can give the background tiles a &quot;type&quot; like structure and then pass through some one way, destroy others, fall through some, etc. His way also ties all of that to the metatile data so you do not have to have separate tables for any of that info. What you see on screen is what you get.
				</div><div class="mdl-card--border"></div>