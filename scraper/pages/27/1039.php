<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 17 at 2:08:33 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
No, because all the sprites are being set to $FE on the vertical axis which is off the bottom of the screen. Sprites set to 0 will bleed onto the screen a little bit and won&apos;t fully be hidden. Think less about the tile number and more about the sprite positioning. It&apos;s setting all the values of each sprite to $FE: y axis, tile number, palette number, x axis.<br>
<br>
The actual sprite <em>loading</em> routine will obviously happen after this, so all the sprites you actually plan on loading will have their proper values loaded at that time. This is just clearing the memory and &quot;resetting&quot; everything since RAM can be unpredictable upon power on.</div>
<br>
Ahh, makes sense.&#xA0; Couple additional questions come to mind now.&#xA0;<br>
<br>
When I do my background loops, I noticed that I only needed 31 rows (992 bytes) vice 32 rows (1024 bytes) declared in my .db rows to get it to display all rows top to bottom properly.&#xA0;<br>
So I commented out the last .db row declaration in the &quot;background:&quot; label section.&#xA0;<br>
<br>
1.) Is this an issue with the emulator, and / or do I need to code this for working on other mappers / emulators or even the NES differently?&#xA0;<br>
2.) I also thought about saving cycles if I don&apos;t need all 32 rows. Instead of processing 32 x 32 rows, I should process 32x31 (992 bytes). This would also mean my attributes start at a different address saving some memory correct?<br>
3.) I currently have it setup to do 256 bytes in the inner loop, outer loop runs 4 times&#xA0; = 256 x 4 = 1024. Since I only need 992 bytes, whats the best way to do that? I could do 128 x 7, but not really ready to rewrite this thing yet until I get a feel for what everyone else does / recommends.&#xA0;&#xA0;<br>
<br>
Second item is for more cycle saving on the clrmem. You made a great point that its more about the tile position rather than the other bytes of info which got me thinking. Would clrmem be faster if I looped through only setting the positioning and skipping the other 2 bytes, something like this?<br>
<br>
clrmem:<br>
&#xA0; LDA #$00<br>
&#xA0; STA $0000, x<br>
&#xA0; STA $0100, x<br>
&#xA0; STA $0300, x<br>
&#xA0; STA $0400, x<br>
&#xA0; STA $0500, x<br>
&#xA0; STA $0600, x<br>
&#xA0; STA $0700, x<br>
&#xA0; INX<br>
&#xA0; BNE clrmem<br>
<br>
clr_oam_mem:<br>
&#xA0; LDX #$00<br>
&#xA0; LDA #$FE<br>
&#xA0; STA $0200, x<br>
&#xA0; INX<br>
&#xA0; INX<br>
&#xA0; INX<br>
&#xA0; STA $0200, x<br>
&#xA0; BNE clr_oam_mem
				</div><div class="mdl-card--border"></div>