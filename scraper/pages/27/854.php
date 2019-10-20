<div class="mdl-card__title"><strong>ubuntuyou</strong> posted on 
		
			
				
				Dec 7, 2016 at 2:59:10 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Been tinkering with KHAN&apos;s tutorial on collision detection for about a week now. I have the first &quot;metatile&quot; version working with scrolling to an extent. It will scroll the background collision data for an entire nametable then switch to the second nametable&apos;s data only when the nametable switches. My character also walks through solid walls at the scroll point though I&apos;ve tried to negate my scroll flag. The second example using a collision table does not elicit free movement of my character. I&apos;ve found little to no information on background collision while scrolling and very little on 6502 background collision in general. Any help is, as always, greatly appreciated. <a href="https://www.dropbox.com/s/8091xj7w2a9jt37/metatiles.zip?dl=0" target="_blank">https://www.dropbox.com/s/8091xj7...</a><br>
<br>
Edit 0: I&apos;ve figured out not being able to move in the second example. Noob mistake. I didn&apos;t reserve my spriteYpos and spriteYposHi variables together. I still can&apos;t figure out the scrolling part though.<br>
<br>
Edit 1: I really buckled down tonight and worked out a two-direction, two-nametable, scrolling collision detection routine. Took me 4 or 5 hours but I got it. Metatile background data has to be aligned to a block and is updated one column at a time in a block of RAM ($0600 - $06FF in this case). To align it I needed to add a &quot;buffer&quot; of 16 bytes at the end of the background data to have a full block. If doing a platformer, make this a &quot;free movement&quot; metatile so your character can fall into pits. Here&apos;s the subroutine. Shouldn&apos;t be too difficult to allow for more screens. I&apos;m still having issues with walking through walls when scrolling.<br>
<br>
<code>updateColTbl:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Call in Main Loop<br>
&#xA0;&#xA0; &#xA0;LDA scroll&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ; Load scroll value and divide by 16<br>
&#xA0;&#xA0; &#xA0;LSR A<br>
&#xA0;&#xA0; &#xA0;LSR A<br>
&#xA0;&#xA0; &#xA0;LSR A<br>
&#xA0;&#xA0; &#xA0;LSR A<br>
&#xA0;&#xA0; &#xA0;BCS updateColTblDone&#xA0;&#xA0;&#xA0; ; If carry is set then scroll is not divisible by 16 so skip update<br>
&#xA0;&#xA0; &#xA0;TAY &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Else, carry is clear and scroll is divisible by 16 so update column<br>
<br>
&#xA0;&#xA0; &#xA0;LDX nametable&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ; Load X with nametable (Load with background number and forget everything up to .skip if using more than two screens)<br>
&#xA0;&#xA0; &#xA0;LDA screenScrolled&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Load A with screenScrolled variable<br>
&#xA0;&#xA0; &#xA0;CMP #$FF&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; If screen has scrolled left,<br>
&#xA0;&#xA0; &#xA0;BEQ .skip&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; then skip to load bkgPtr<br>
&#xA0;&#xA0; &#xA0;TXA&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Else screen has scrolled right so transfer X to A<br>
&#xA0;&#xA0; &#xA0;EOR #$01&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Flip the bit<br>
&#xA0;&#xA0; &#xA0;TAX &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ; and transfer back to X<br>
.skip<br>
&#xA0;&#xA0; &#xA0;LDA backgroundsLo,x<br>
&#xA0;&#xA0; &#xA0;STA bkgPtr<br>
&#xA0;&#xA0; &#xA0;LDA backgroundsHi,x<br>
&#xA0;&#xA0; &#xA0;STA bkgPtr+1<br>
<br>
&#xA0;&#xA0; &#xA0;LDA #$00<br>
&#xA0;&#xA0; &#xA0;STA colPtr<br>
&#xA0;&#xA0; &#xA0;LDA #$06<br>
&#xA0;&#xA0; &#xA0;STA colPtr+1<br>
<br>
&#xA0;&#xA0; &#xA0;LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Initialize X<br>
.loop<br>
&#xA0;&#xA0; &#xA0;LDA [bkgPtr],y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Load a byte from the background (Y holds column offset)<br>
&#xA0;&#xA0; &#xA0;STA [colPtr],y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; and store in the corresponding spot in collision table<br>
&#xA0;&#xA0; &#xA0;LDA bkgPtr&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Add 10 to bkgPtr to point to next byte in column<br>
&#xA0;&#xA0;&#xA0; CLC<br>
&#xA0;&#xA0;&#xA0; ADC #$10<br>
&#xA0;&#xA0; &#xA0;STA bkgPtr<br>
&#xA0;&#xA0; &#xA0;STA colPtr&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Also update colPtr<br>
&#xA0;&#xA0; &#xA0;INX<br>
&#xA0;&#xA0; &#xA0;CPX #$0F &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Check if 15 columns have been updated<br>
&#xA0;&#xA0; &#xA0;BNE .loop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; If not then repeat until it does<br>
updateColTblDone:<br>
&#xA0;&#xA0; &#xA0;RTS</code><br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>