<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Feb 7, 2012 at 2:28:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>muffins</b></i><br>
	<br>
	I have one other question which involves loading the paddle sprites using a loop. What I would like is 4 of the same tiles stacked vertically to create a paddle. My current &quot;loop&quot; is this:<br>
	<br>
	Vertical_Offsets:<br>
	&#xA0; .db 0,8,16,24<br>
	&#xA0;<br>
	routine:<br>
	LDX #$00<br>
	LDY #0<br>
	<br>
	loop:<br>
	LDA paddle1ytop<br>
	CLC<br>
	ADC Vertical_Offsets,&#xA0;y ;;update paddle sprites<br>
	STA $0204, x<br>
	<br>
	LDA #$5B<br>
	STA $0205, x<br>
	<br>
	LDA #$01<br>
	STA $0206, x<br>
	<br>
	LDA #PADDLE1X<br>
	STA $0207, x<br>
	<br>
	INX<br>
	INX<br>
	INX<br>
	INX<br>
	<br>
	INY<br>
	CPY #$04<br>
	BNE loop<br>
	<br>
	RTS<br>
	<br>
	Where it&apos;s not really a loop because it just runs through once to display the top tile. I am not sure how to then shift everything up to the next set of addresses (which in my code would be multiplying the &quot;x&quot; value by 4 in each place, in addition to having to increase the paddle1ytop variable by 8 each run through the loop. Is what I&apos;m thinking possible or do I need to restructure my loop? I&apos;d rather not have to hard code this with no loops if possible.</div>
<br>
This isn&apos;t exactly pretty, but it should work.<br>
<br>
				</div><div class="mdl-card--border"></div>