<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 16 at 3:51:17 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Nallebeorn</b></i><br>
<br>
Your clrmem routine is wrong. You use $0200 as the OAM buffer, but you&apos;re clearing $0300 with $fe and $0200 with zeroes. That means you get a bunch of sprites with $00 for all values, which of course means tile $00 at position (0; 0) with palette 0. And don&apos;t forget that the sprites data at the bottom is commented out at the moment, so your LoadSprites loop will be loading garbage data, which will probably be a bunch of zeroes again since that&apos;s what assemblers generally fill unused ROM space with.</div>
<br>
Thanks Nallebeorn, that worked!<br>
<br>
I changed my clrmem to this based on what you said:<br>
clrmem:<br>
&#xA0; LDA #$00<br>
&#xA0; STA $0000, x<br>
&#xA0; STA $0100, x<br>
&#xA0; STA $0300, x<br>
&#xA0; STA $0400, x<br>
&#xA0; STA $0500, x<br>
&#xA0; STA $0600, x<br>
&#xA0; STA $0700, x<br>
&#xA0; LDA #$FE<br>
&#xA0; STA $0200, x<br>
&#xA0; INX<br>
&#xA0; BNE clrmem<br>
<br>
I understand what you said, but I&apos;m a little confused on how its working.&#xA0;<br>
Here is what I understand:<br>
<br>
1st Loop<br>
&#xA0; $0000, $0100, $0300..$0700 are set to value A which is 0<br>
&#xA0; $0200 is set to $FE<br>
<br>
2nd Loop<br>
&#xA0; $0001, $0101, $0301..$0701 are set to value A which is 0<br>
&#xA0; $0201 is set to $FE<br>
<br>
...etc<br>
<br>
255th loop<br>
&#xA0; $00FF, $01FF, $03FF...$07FF are set to value A which is 0<br>
&#xA0; $02FF is set to $FE<br>
<br>
If this is correct, why is the OAM buffer $0200-$02FF being set to $FE? Wouldn&apos;t I have the same issue from my original post up top if I had my spaceship on tile $FE in my .chr file?<br>
Just trying to understand.&#xA0;<br>
<br>
Thanks!<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>