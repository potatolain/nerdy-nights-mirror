<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 24, 2015 at 10:16:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>splitpane</b></i><br>
<br>
First of all, thanks a lot, BunnyBoy, for these tutorials. I&apos;ve learned a lot and made it all the way through in a couple of weeks, and have managed to get a lot of key parts of my game working as proof of concept code already. But now I&apos;ve been working through the example in this lesson and trying to figure out CHR RAM, but not having a lot of luck. I&apos;m looking to use CHR RAM to draw custom tiles. The example program here is all about loading a lot of text (and from the .ineschr 0 at the beginning I guess doesn&apos;t even use CHR RAM) but I&apos;m trying to figure out how to just draw some pixels. I changed the first two lines, removed the text file loading, and started removing a lot of the text printing code, but I am having trouble seeing clearly what is the core of the CHR RAM code. Let&apos;s say I want to do nothing but update a few tiles of background with some random pixels. Can anybody point me toward a minimal sample? Or suggest what the minimal steps would be?</div>
<br>
.ineschr 0 just means that you are not using CHR ROM. <strong>&quot;This sample uses 8KB of CHR RAM so no CHR banking has been included.&quot;</strong><br>
<br>
Here is the CHR RAM loading subroutine in the tutorial. Really, it&apos;s not much different than what we did before, you are just reading the .chr file (or in the tutorials case, the graphics.nes file) and loading it into the CHRRAM area on the PPU. I literally just went through this tutorial Sunday night so I could prep my game to flash to my my UNROM flash board. As for answering your question on how to load the screen with random pixels, about the only think I can think of is to use a Pointer Table with the tiles you want to use and a random number generator subroutine to select tiles from the table at random and then write them to the screen. Maybe I&apos;m wrong on this though.<br>
<br>
<strong>GRAPHICS TILES AND SPRITES STORED IN BANK 14</strong><br>
.bank 14<br>
&#xA0; .org $C000&#xA0;&#xA0; ;;8KB graphics in this fixed bank<br>
Graphics:<br>
&#xA0; .incbin &quot;graphics.nes&quot;<br>
&#xA0; .incbin &quot;graphics.nes&quot;<br>
<br>
<strong>CODE TO LOAD PPU WITH CHRRAM</strong><br>
LoadCHRRAM:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;copies 8KB of graphics from PRG to CHR RAM<br>
&#xA0; lda $2002<br>
&#xA0; lda #$00<br>
&#xA0; sta $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;set PPU to the CHR RAM area $0000-1FFF<br>
&#xA0; sta $2006<br>
&#xA0; ldy #$00<br>
&#xA0; ldx #$20&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;32 x 256 bytes = 8 KB<br>
&#xA0; lda #LOW(Graphics)<br>
&#xA0; sta sourceLo<br>
&#xA0; lda #HIGH(Graphics)&#xA0; ;get the address of the graphics data ($C000)<br>
&#xA0; sta sourceHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;put into our source pointer<br>
LoadCHRRamLoop:<br>
&#xA0; lda [sourceLo], y&#xA0;&#xA0;&#xA0; ;copy from source pointer<br>
&#xA0; sta $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;to PPU CHR RAM area<br>
&#xA0; iny<br>
&#xA0; bne LoadCHRRamLoop&#xA0;&#xA0; ;;loop 256 times<br>
&#xA0; inc sourceHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;then increment the high address byte<br>
&#xA0; dex&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;do that 32 times<br>
&#xA0; bne LoadCHRRamLoop&#xA0;&#xA0; ;;32 x 256 = 8KB<br>
LoadCHRRamDone:<br>
&#xA0; rts<br>
&#xA0;
				</div><div class="mdl-card--border"></div>