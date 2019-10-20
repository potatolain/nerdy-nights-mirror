<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Oct 15, 2015 at 10:29:16 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The usable internal RAM is from $0000-$0800, but some of that is used by sprites and some is used by the stack.<br>
<br>
So generally you can use:<br>
<br>
$0000-$00FF<br>
$0100-$01FF ;the stack uses most of this. You can see in the hex editor, but you can still use some of it.<br>
$0200-$02FF ;most people use this for sprites<br>
$0300-$07FF ;you can use all of this also<br>
<br>
As for how much can be stored in flash memory... basically all of it. Generally I always have either 8KB (an entire bank) dedicated to it.
				</div><div class="mdl-card--border"></div>