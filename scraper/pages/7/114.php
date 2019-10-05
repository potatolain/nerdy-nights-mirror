<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Mar 2, 2012 at 3:40:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DomNes</b></i><br>
	<br>
	1: if i understand well... putting the four settings of a sprites at $0200, x to $FF will &quot;clear/delete&quot; the sprites?<br>
	&#xA0;</div>
<br>
Yes. &#xA0;Actually, technically you only need to set the sprites&apos; Y coordinate values to a high value so they will be offscreen. &#xA0;But it&apos;s common to write #$FE or whatever to all sprite attributes because it&apos;s not worth the trouble to isolate every 4th index.<br>
<br>
				</div><div class="mdl-card--border"></div>