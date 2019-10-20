<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Dec 12, 2017 at 10:02:39 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Be careful when mixing .dw and .db tables in the same routine, like it looks like you&apos;ll be doing. Only ASL the .dw ones, otherwise you&apos;ll end up skipping over the data you want. Many mistakes over the years!
<br>
<br>Things like finding: MovementType (.dw) --&gt; MovementDirection (.dw) --&gt; MovementValue (.db). Tables within tables within tables...
				</div><div class="mdl-card--border"></div>