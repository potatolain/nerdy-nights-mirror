<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 5, 2014 at 10:07:48 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think it is worth to mention that from the math standpoint a more straightforward way to implement the aiming would be just normalizing the vector, then multiplying it by the speed, this would give the deltas for a projectile. But it would be too slow on 6502 to do this math (requires multiplication) with enough precision. So the other way, determine the angle and get new deltas, is faster, as it can be boiled down to just a number of LUTs.
				</div><div class="mdl-card--border"></div>