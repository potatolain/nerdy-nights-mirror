<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Mar 18, 2014 at 9:36:12 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Without studying your code in great detail, it would appear the program is based entirely on nmi interrupts rather than main thread + interrupts (which is fine for something small). However, you still need an infinite loop to prevent your nmi handler from running outside of nmi. Right above your nmi routine, put something like:<br>
<br>
GameLoop:<br>
jmp GameLoop<br>
<br>
For an nmi based game that doesn&apos;t need much processing, you can just leave it blank.<br>
				</div><div class="mdl-card--border"></div>