<div class="mdl-card__title"><strong>resynthesize</strong> posted on 
		
			
				
				Oct 27, 2009 at 5:41:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Zzap</b></i><br><br>Here&apos;s a version that loads a full background, using simple addressing, and note that I haven&apos;t really bothered setting the attributes up so that it looks pretty or anything (it just repeats the rows you had previously) <img border="0" src="images/blank.gif" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"> I also reset the scroll values after writing to the PPU so that it wasn&apos;t having issues there.
<br>
<br><a href="http://nintendoage.pastebin.com/f21f5696c" target="_blank" original-href="http://nintendoage.pastebin.com/f21f5696c">http://nintendoage.pastebin.com/f21f5696c</a>
<br>
<br>Also, here&apos;s a simpler version where I use both the X and Y registers to load the full nametable and attribute table in 1 loop:
<br>
<br><a href="http://nintendoage.pastebin.com/f12cef2c1" target="_blank" original-href="http://nintendoage.pastebin.com/f12cef2c1">http://nintendoage.pastebin.com/f12cef2c1</a></div><br><br>Hi Zzap, <br><br>Would you mind explaining the following block of code?<br><br>===============================<br>&#xA0; LDA #low(background)<br>&#xA0; STA AddrLow<br>&#xA0; LDA #high(background)<br>&#xA0; STA AddrHigh<br><br>&#xA0; LDX #$04&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop X 4 times<br>&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop Y 256 times<br>LoadBackgroundsLoop:<br>&#xA0; LDA [AddrLow],y<br>&#xA0; STA $2007<br>&#xA0; INY<br>&#xA0; BNE LoadBackgroundsLoop<br>; Outer loop<br>&#xA0; INC AddrHigh&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; increment high byte of address backg to next 256 byte chunk<br>&#xA0; DEX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; one chunk done so X = X - 1.<br>&#xA0; BNE LoadBackgroundsLoop&#xA0;&#xA0; ; if X isn&apos;t zero, do again<br>===============================<br><br>I&apos;ve worked out the general idea of it but I&apos;m confused on the details.&#xA0; I don&apos;t understand the purpose of incrementing AddrHigh since that isn&apos;t referenced anywhere else.&#xA0; <br><br>Thanks!<br>Brandon<br><br>
				</div><div class="mdl-card--border"></div>