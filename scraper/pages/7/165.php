<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Aug 22, 2017 at 11:13:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br>
<br>
Ok so this is an old thread I know, I have been going through the tutorials and have everything working except updating the score. I didn&apos;t see this explained anywhere but the comments say to update using background tiles or lots of sprites. I would figure updating using background tiles is best since the background tile numbers correspond to the numbers so &apos;0&apos; = $00 &apos;1&apos; = $01 and so on. The problem I am having is updating the background sprites. I can t seem to figure out how to do it and searching google I cant find an answer. Anyone have an example? I would figure I would need to update the background table which I can do (I think) but how to push it to the ppu correctly. Any help would be greatly appreciated.</div>
<br>
The best way is to write it to a buffer to where it writes all your background updates in a single frame, but I won&apos;t confuse you with that just yet until you get your bearings a little more.<br>
<br>
Basically, somewhere in the vblank (which is typically at the beginning of NMI), you have to update the background tiles. The code will look something like this:<br>
<br>
UpdateBackgroundTile:<br>
&#xA0; LDA $2002 ;wake up PPU and let it know we are about to update stuff<br>
&#xA0; LDA #$20 ;this is the hi byte of the address you&apos;re writing to. so if the nametable tile you&apos;re updating is located at $2084, $20 is the hi byte.<br>
&#xA0; STA $2006<br>
&#xA0; LDA #$84 ;this is the low byte of the address you&apos;re writing to. I kept the same address example that I used above.<br>
&#xA0; STA $2006<br>
&#xA0; LDA #$xx ;this is the tile number of the new tile you are writing to the address you described above.<br>
&#xA0; STA $2007 ;write the tile<br>
&#xA0; RTS<br>
<br>
Now, doing it this way is fine, but you have to understand that unless you have a flag telling it to only do it once, it&apos;s going to re-draw this tile every single frame until you tell it otherwise. And when you start developing a bigger game, you won&apos;t get far before updates like this prevent you from expanding, because vblank is a treasured commodity.<br>
<br>
Let us know if you need further clarification, or when you&apos;re ready for more advanced solutions.<br>
<br>
Homework is to read this: <a href="https://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank" original-href="https://wiki.nesdev.com/w/index.php/The_frame_and_NMIs">https://wiki.nesdev.com/w/index.p...</a><br>
<br>
You don&apos;t need to understand the technical details of what it&apos;s doing, but at least try to give it a read and understand the concepts. We&apos;ll get there. One step at a time!<br>
<br>
Also, welcome to NintendoAge!<br>
&#xA0;
				</div><div class="mdl-card--border"></div>