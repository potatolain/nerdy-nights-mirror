<div class="mdl-card__title"><strong>Zzap</strong> posted on 
		
			
				
				Jul 18, 2008 at 9:19:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					When you add or subtract to the sprite position for up, down, left, right etc you&apos;ll need to add and subtract for each of the sprites. So instead of just:
<br>
<br>  LDA $0203   ; load sprite position
<br>  SEC         ; make sure carry flag is set
<br>  SBC #$01    ; A = A - 1
<br>  STA $0203   ; save sprite position
<br>
<br>You&apos;ll need to:
<br>
<br>  LDA $0203   ; load sprite 1 position
<br>  SEC         ; make sure carry flag is set
<br>  SBC #$01    ; A = A - 1
<br>  STA $0203   ; save sprite 1 position
<br>  LDA $0207   ; load sprite 2 position
<br>  SEC         ; make sure carry flag is set
<br>  SBC #$01    ; A = A - 1
<br>  STA $0207   ; save sprite 2 position
<br>  LDA $020B   ; load sprite 3 position
<br>  SEC         ; make sure carry flag is set
<br>  SBC #$01    ; A = A - 1
<br>  STA $020B   ; save sprite 3 position
<br>  LDA $020F   ; load sprite 4 position
<br>  SEC         ; make sure carry flag is set
<br>  SBC #$01    ; A = A - 1
<br>  STA $020F   ; save sprite 4 position
<br>
<br>Note, I think I&apos;ve got those sprite memory location&apos;s right, but I did rush through them a bit
				</div><div class="mdl-card--border"></div>