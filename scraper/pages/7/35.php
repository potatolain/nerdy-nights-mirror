<div class="mdl-card__title"><strong>themaincamarojoe</strong> posted on 
		
			
				
				Jan 6, 2010 at 1:55:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>So I&apos;ve created a paddle using a tile from Mario.chr.&#xA0; I&apos;m sure there&apos;s an easier way to do it, but I&apos;ll worry about that later.&#xA0; I&apos;ve successfully been able to make the paddle move up and down using the older routing.&#xA0; This can be seen in the below link:</p><p><a href="http://www.acsalaska.net/~themaincamarojoe/Pong_with_old_control_routine.asm" target="_blank">http://www.acsalaska.net/~themaincamarojoe/Pong_with_old_con...</a> </p><p>This works fine, but I&apos;d like to use the newer routing.&#xA0; The below link shows this attempt.</p><p><a href="http://www.acsalaska.net/~themaincamarojoe/Pong_with_new_Control_Routine.asm" target="_blank">http://www.acsalaska.net/~themaincamarojoe/Pong_with_new_Con...</a> </p><p>Now, I know I&apos;m doing something wrong here.</p><p>On line 204 and 205 I jump to the routine which handles ReadUp and ReadDown, which is called after ReadController1 and ReadController2.&#xA0; Lines 381 through 515 are the actual subroutines.&#xA0; I thought I new a decent amount about assembly, but it seems as if the 6502 and the NES archeticture is more challenging that I anticipated.</p><p>Can you all please assist in pointing out my mistake.&#xA0; Thank you everyone for being so helpful.</p><p>By the way, if you all know of a better way for me to show my code, let me know.</p>
				</div><div class="mdl-card--border"></div>