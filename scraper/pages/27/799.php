<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 20, 2016 at 2:32:24 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
<br>
hmm, okay- the CHRAM is the part I&apos;m trying to understand, mostly. When you say &quot;reload the PPU with new graphics while the PPU is turned off&quot;, does that translate to NMI? and what do you mean by disabling the CPU? And how can you only swap a few tiles if your swapping whole banks? That&apos;s my main question.<br>
<br>
or, would this flow work in the NMI:<br>
<br>
draw black box at bottom of screen<br>
swap to bank with text CHR data<br>
draw text after swap<br>
swap back<br>
other updates, repeat on next NMI<br>
<br>
my question is, would swapping, drawing, and swapping back give me the effect I&apos;m looking for?<br>
<br>
EDIT: well, that didn&apos;t work. Found a thing on the programming resources page, I think... gonna check that out and figure out the CHR RAM nonsense</div>
<strong>what do you mean by disabling the CPU?</strong><br>
--oops...PPU, not CPU<br>
<br>
Also, sorry for all my spelling errors. CHR-RAM and CHR-ROM.<br>
View this as it will explain CHRRAM and CHRROM much better than I can.<br>
<a href="http://wiki.nesdev.com/w/index.php/CHR_ROM_vs._CHR_RAM" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/CHR_ROM_vs._CHR_RAM">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
What is sound like you are trying to accomplish is not bank swap related. Bank Swapping is for getting more ROM space in your game.<br>
What you are trying to do is manipulate tiles on the screen. For this, you must have all the tiles in RAM at PPU Address $1000-$1FFF, Pattern Table 1. That is where the background tiles are stored in RAM, think of it as a your Tile Holder in Scrabble. Your Name Table refers to addresses in the Pattern Table to display your background, think of this as the Game Board in Scrabble. You can use any tiles on your Tile Holder to write words on the Game Board. Only difference is, that your Tile Holder never actaully loses its tiles. (this is sort of a poor example, but kind of paints a picture). Now, lets say you have tiles ASDFPIG in your Tile Holder (Pattern Table). You can use those tiles to spell PIG on the game board (Name Table). However, if you would swap out the PIG tiles in your Tile Holder (Pattern Table) with CAT (ASDFCAT), now the game board (Name Table) would display CAT.<br>
<img src="scraper/images/ppumemmap.png" original-src="http://www.nesmuseum.com/images/ppumemmap.png"><br>
So, using CHRRAM,<br>
1. you would bank swap,<br>
2. turn off the PPU,<br>
3. write the new tiles to the Pattern Table,<br>
4. and then turn the PPU back on.<br>
At this point, those new tiles are now in the Pattern Table and can be used in the Name Table. You are free to bank swap away at this point. Steps 1 and 2 are interchangable.<br>
<br>
<br>
To accomplish what you want to do, your black box is probably going to be composed of 1 repeating black tile, lets say tile $00 is a plain black tile in the Pattern Table. So your box looks like this in the Name Table.<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 1<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 2<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 3<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 4<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 5<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 6<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 7<br>
<br>
Now you want to add text, lets say PIG, right in the beginning of line 4. In your Pattern Table, you need to have the tiles P, I, and G. Let&apos;s just say they stored as follows in the Pattern Table:<br>
$00 = Blank Tile<br>
$01 = P<br>
$02 = I<br>
$03 = G<br>
<br>
So, now what you need to do is your Background Updating Routine to write these tiles to the Name Table in the PPU. You can only write to the PPU during an interrupt, in our case, the NMI. So, what you would do is store tiles P, I, G ($01, $02, $03) in a buffer. Then, during the NMI, activate the Background Updating Routine Code (that you must write) and write those three tiles to the address in the Name Table that you want them. So, now, your Name Table looks like this.<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 1<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 2<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 3<br>
$01,$02,$03,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 4<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 5<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 6<br>
$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00&#xA0; ;Line 7<br>
<br>
Well, that was much longer than I expected it to be I will leave you with the code I use to draw text to the Name Table with a few examples of text I write in my game.<br>
<br>
;Loading Code into Buffer Variables during main code (not during NMI)<br>
&#xA0;&#xA0;&#xA0; LDA #LOW(Hit1Text)&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;Load &apos;HIT 1&apos; into TextPointer<br>
&#xA0;&#xA0; &#xA0;STA TextPointer<br>
&#xA0;&#xA0; &#xA0;LDA #HIGH(Hit1Text)<br>
&#xA0;&#xA0; &#xA0;STA TextPointer+1<br>
<br>
&#xA0;&#xA0; &#xA0;LDA #$05&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&apos;HIT 1&apos; is 5 characters long<br>
&#xA0;&#xA0; &#xA0;STA TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;The length of the text being written to the screen (number of characters being written)<br>
<br>
&#xA0;&#xA0; &#xA0;LDA #$6F&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Write to PPU Address $206F (On the Name Table)<br>
&#xA0;&#xA0; &#xA0;STA TEXTLOWBYTE &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA #$20<br>
&#xA0;&#xA0; &#xA0;STA TEXTHIGHBYTE<br>
<br>
&#xA0; INC LoadTextFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Enable the Load Text Routine<br>
<br>
;Call this during NMI<br>
&#xA0;&#xA0; &#xA0;JSR LoadText&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Jump to Subroutine LoadText<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br>
LoadText:<br>
&#xA0; LDA LoadTextFlag<br>
&#xA0; BEQ LoadTextDone<br>
<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA TEXTHIGHBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address (Name Table)<br>
&#xA0; LDA TEXTLOWBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address (Name Table)<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
<br>
LoadTextLoop:<br>
&#xA0; LDA [TextPointer], y&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in y)<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Y = Y + 1<br>
&#xA0; CPY TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare Y to value in TEXTLENGTH<br>
&#xA0; BNE LoadTextLoop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Branch to LoadTextLoop if compare was Not Equal to TEXTLENGTH<br>
LoadTextDone:<br>
&#xA0; RTS<br>
&#xA0;<br>
;;;;;<br>
BlankTiles:<br>
&#xA0; .db $24,$24,$24,$24,$24,$24,$24,$24&#xA0; &#xA0;<br>
MissText:<br>
&#xA0; .db $16,$12,$1C,$1C&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;MISS<br>
Hit1Text:<br>
&#xA0; .db $11,$12,$1D,$24,$01&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 1<br>
Hit2Text:<br>
&#xA0; .db $11,$12,$1D,$24,$02&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 2<br>
Hit3Text:<br>
&#xA0; .db $11,$12,$1D,$24,$03&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 3<br>
Owned:<br>
&#xA0; .db $18,$20,$17,$0e,$0d&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;OWNED<br>
&#xA0;
				</div><div class="mdl-card--border"></div>