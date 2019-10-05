<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Dec 29, 2017 at 8:28:00 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>think1st</b></i><br>
<br>
I found the answer. Seems the INES file format only contains ROM data, so the answer to my first question would be a simple NO. And after some experimentation with some other assemblers I figured that out, too. The assemblers don&apos;t care what goes to the PPU and what not, they just output the raw data as you define it using .org statements. Then, when the assembled .nes file is 16 bytes (header) + 16kb (1x prg rom) + 8kb (1x chr rom), the emulator is actually responsible for realizing that the first 16kb after header is for prg rom and the 8kb after is for chr rom.</div>
I know you found the answers, but I just wanted to assure you.<br>
<br>
No, .db cannot be used in RAM. You can only use .db to build tables in ROM.<br>
<br>
The address you associate with the .org directive is relative to the bank you are in. That&apos;s how bank switching works. Small example from my code. Whatever bankSource I am current using, the CPU will use the proper code from that address. This is all PRG Data as I program in UNROM, so I don&apos;t use CHRROM. I have 15 banks that look like this below that can swap out $8000-$BFFF and 1 fixed bank that never swaps out in addresses $C000-$FFFF. Essentially, the concept is the same with CHR Data as well, that&apos;s why the Mario.chr is in $0000 at that the start of CHRROM. This confused me for the longest time as well. Just remember, you have PRGROM and CHRROM in NROM, so you have 2 sets of addresses to deal with.<br>
<br>
;----------------------------------------------------------<br>
;-----------------------BANKS------------------------------<br>
;----------------------------------------------------------<br>
;;;;;;;;;;;;;;;;;bankSource=00;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000 &#xA0;<br>
&#xA0; .include &quot;maincode2.asm&quot;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 1<br>
&#xA0; .org $A000<br>
&#xA0; .include &quot;maincode3.asm&quot;&#xA0;&#xA0;&#xA0; &#xA0;<br>
<br>
;;;;;;;;;;;;;;;;;bankSource=01;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 2&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
&#xA0;&#xA0;&#xA0; .include &quot;SpriteData.asm&quot;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 3<br>
&#xA0; .org $A000<br>
&#xA0;<br>
;;;;;;;;;;;;;;;;;bankSource=02;;;;;;;;;;;;;;;;;;;; &#xA0;<br>
&#xA0; .bank 4&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
TitleGraphics: &#xA0;<br>
&#xA0; .incbin &quot;CHRfiles\titlesprites.chr&quot;<br>
&#xA0; .incbin &quot;CHRfiles\titlegraphics.chr&quot;<br>
&#xA0;<br>
&#xA0; .bank 5<br>
&#xA0; .org $A000<br>
RoomGraphics:<br>
&#xA0; .incbin &quot;CHRfiles\MainCharacterSprites.chr&quot;<br>
&#xA0; .incbin &quot;CHRfiles\RoomGraphics.chr&quot;<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>