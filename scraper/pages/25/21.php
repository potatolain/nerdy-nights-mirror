<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Apr 27, 2010 at 12:56:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hey folks, here&apos;s the latest iteration, new and improved (as opposed to old and shitty).&#xA0; It incorporates most of Metalslime&apos;s suggestions.&#xA0; Thanks again, sir!<br><br>For whatever reason I couldn&apos;t implement the concept of capping the buffer to keep it from drawing every frame.&#xA0; At first I thought I got it, but then when I started trying to do it in code I just couldn&apos;t get it.&#xA0; What I settled on was a quick test in the main asm called drawTest that basically tests if the player moves and then sets a flag so that the code in the game loop loads up the buffer and the appropriate loading subs in the NMI section run.&#xA0; I&apos;m not sure if that&apos;s a huge improvement.&#xA0; Now it only draws if the player moves, but it&apos;s still drawing quite a bit.&#xA0; Tried working with it so it only drew if the player moved more than eight pixels right or left, but that led to some bugs.<br><br>Still, a lot of fat was trimmed thanks to everyone&apos;s input, so I appreciate it.<br>
				</div><div class="mdl-card--border"></div>