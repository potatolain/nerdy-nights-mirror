<div class="mdl-card__title"><strong>chowder</strong> posted on 
		
			
				
				Apr 16, 2014 at 5:04:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					OK, my collision code still doesn&apos;t work right. Anyone know of any decent tutorials that don&apos;t assume you&apos;re using metatiles?<br>
<br>
[code]<br>
; create index into nametable from player x,y<br>
; return non-zero for a collision between player and bg tile<br>
check_collisions:<br>
lda #$00<br>
sta index + 1<br>
lda player_y<br>
and #%11111000<br>
asl<br>
rol index + 1<br>
asl<br>
rol index + 1<br>
adc #<game_bg 1 adc index lda sta>game_bg<br>
sta index + 1<br>
lda player_x<br>
lsr<br>
lsr<br>
lsr<br>
tay<br>
lda (index),y<br>
rts<br>
[/code]<br>
<br>
game_bg points to the (uncompressed) nametable data. It sort of works, but characters get stuck sometimes (guess I have to move them, then &quot;eject&quot; them the opposite direction if a collision occurred?), and other times it just doesn&apos;t seem to detect collisions right. Basically I&apos;m just classing anything non-zero in the nametable as solid at the moment. Any pointers at all?<br>
<br>
Thanks!</game_bg>
				</div><div class="mdl-card--border"></div>