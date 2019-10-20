<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Jan 12, 2017 at 7:15:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve been racking my brain all night and I can&apos;t seem to figure out how to draw text boxes while keeping the background information available to put back later.
<br>
<br>I tried debugging games like Earthbound Zero and Dragon Warrior to look at what happens when a menu is opened or closed, but I can&apos;t find where tiles that are replaced are stored to be put back where they belong. 
<br>
<br>However, looking at the hex values in Dragon warrior I noticed a repeating pattern of on screen tile info, as well as the location that the tiles to put back are eventually drawn from. In EB0 I noticed that certain ranges in the $0400 section are written to and read from multiple times for tile replacement, but still couldn&apos;t find the one glory area where everything gets stored. 
<br>
<br>Is it possible that the replaced tile data is stored in separate banks swappable banks with a mapper? any insight into this would be much appreciated. I haven&apos;t even started to wrap my head around mappers yet, and this will help me know it if&apos;s time to start!
				</div><div class="mdl-card--border"></div>