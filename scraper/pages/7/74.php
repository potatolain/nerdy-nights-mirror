<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 6, 2012 at 11:23:00 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have one other question which involves loading the paddle sprites using a loop.  What I would like is 4 of the same tiles stacked vertically to create a paddle.  My current &quot;loop&quot; is this:
<br>
<br>  LDX #$00
<br>
<br>loop:
<br>  LDA paddle1ytop, x  ;;update paddle sprites
<br>  STA $0204, x
<br>
<br>  LDA #$5B
<br>  STA $0205, x
<br>  
<br>  LDA #$01
<br>  STA $0206, x
<br>  
<br>  LDA #PADDLE1X
<br>  STA $0207, x
<br>
<br>  INX
<br>  CPX #$01
<br>  BNE loop
<br>
<br>Where it&apos;s not really a loop because it just runs through once to display the top tile.  I am not sure how to then shift everything up to the next set of addresses (which in my code would be multiplying the &quot;x&quot; value by 4 in each place, in addition to having to increase the paddle1ytop variable by 8 each run through the loop.  Is what I&apos;m thinking possible or do I need to restructure my loop?  I&apos;d rather not have to hard code this with no loops if possible.
				</div><div class="mdl-card--border"></div>