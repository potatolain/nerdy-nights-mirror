<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Mar 16, 2014 at 7:13:30 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The bounding box based BG collision would work fine on modern platforms with a lot of RAM and CPU power, but on the NES it&apos;ll quickly become impractical as number of the BG elements grows up. Also, if you need a more complex walkmap shapes than a set of simple rectangles, like, diagonal slopes as in SMB3, you&apos;ll simply have to switch to array of tile flags instead of bounding boxes, because non-axis aligned rectangle collisions will take way much more CPU time.
<br>
<br>A complex case of BG-to-object collisions from an actual NES game is explained <a href="http://games.greggman.com/game/programming_m_c__kids/" target="_blank">here</a>.
				</div><div class="mdl-card--border"></div>