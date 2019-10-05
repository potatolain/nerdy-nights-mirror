<div class="mdl-card__title"><strong>JC-Dragon</strong> posted on 
		
			
				
				Jul 7, 2012 at 1:57:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					alright 3Gen, so what you are saying is that the first color in each palette entry needs to match respectively?<br>
<br>
palette:<br>
.db $33,$34,$35,$0F, $33,$34,$35,$0F, $33,$34,$35,$0F, $33,$34,$35,$0F ;;background palette<br>
............^ ............................^................................ ^.............................. ^<br>
............| ..............................|................................ |............................... |<br>
............v ............................v................................ v............................... v<br>
.db $1A,$02,$21,$0F, $22,$02,$38,$3C, $22,$1C,$15,$14, $22,$02,$38,$3C ;;sprite palette<br>
<br>
and KHAN, I Switched those around but it pulled the tile data from the wrong area when that happened. What I have is what was in the example from BB.
				</div><div class="mdl-card--border"></div>