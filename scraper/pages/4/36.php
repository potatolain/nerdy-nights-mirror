<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Sep 3, 2011 at 8:37:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Are you only doing it in vblank? That could be because of the $2006 writes during rendering aren&apos;t the same as pointing it so memory, it affects the internal registers for such things as scroll and stuff. And also, you&apos;re only changing palette 0 there, so that&apos;ll only affect the background color 0, making it 0F, which is the right color black. For best help, post all of your code and we can point all the stuff out.
				</div><div class="mdl-card--border"></div>