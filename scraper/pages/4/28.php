<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Feb 25, 2011 at 10:56:44 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yes, if you want to move NOT sprite 0, you skip $0200-$0203 and just move $0204 and $0207 for sprite 1.<br>
<br>To change the color of the sprite, you need to first of all edit the palettes that you have.  There are four different palette sections for sprites.  Something like this is in your document if you&apos;re using nerdy nights. <img src="images/blank.gif" border="0" style="display: none;" original-src="/media/_images/expressions/face-icon-small-smile.gif">
<br>
<br>$xx,$00,$00,$00, $xx,$00,$00,$00, $xx,$00,$00,$00, $xx,$00,$00,$00 ;sprites
<br>$xx,$00,$00,$00, $xx,$00,$00,$00, $xx,$00,$00,$00, $xx,$00,$00,$00 ;background
<br>
<br>The first 16 bytes are the color palette for sprites.  You need to write #$00 to $0202 to use the first section, #$01 to $0202 to use the second palette, #$02 to $0203 to use the third, and #$03 to use the fourth.
<br>
<br>Of course you&apos;re going to need to change all of the values in the palette area to something other than $00 to get colors you want.
<br>
<br>The first color in each of the 16 4-byte sections (designated here with x&apos;s) is the transparent color.  Usually these all need to be the same, but I think basically whatever you have the first value set at, it will automatically make the other 7 first-bytes that same value.  So don&apos;t be surprised if you try to change that color and nothing happens.
				</div><div class="mdl-card--border"></div>