<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 15, 2012 at 6:22:19 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks for the replies guys. But I don&apos;t exactly follow where the sprites postion ($0200) is being updated though, following memory:<br>
<br>
A = PartialVariable<br>
A = PartialVariable+$80<br>
PartialVariable = A (so partialVariable is being updated each time).<br>
A = $0200 (same x-position each time? PartialVariable isn&apos;t being to offset number stored in $0200?)<br>
A = $0200<br>
$0200 = A<br>
				</div><div class="mdl-card--border"></div>