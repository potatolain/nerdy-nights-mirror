<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Mar 13, 2009 at 1:14:08 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i><br><br><span style="font-weight: bold;" class="Apple-style-span"><span style="font-size: medium;" class="Apple-style-span">
Bank Switching Code</span></span><br>
The final part it to write your bank switching code.  This subroutine will take a bank number in the x register and switch the CHR bank to it immediately.  The actual switch is done by writing the desired bank number anywhere in the $8000-FFFF memory range.  The cart hardware sees this write and changes the CHR bank.<br><p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="font-family: &apos;-webkit-sans-serif&apos;; font-size: 12px;" class="Apple-style-span"><br></span></p><p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">... your game code ...</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  LDA #$01        ;;put new bank to use into X register</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  JSR Bankswitch  ;;jump to bank switching code</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">... your game code ...</span></p>
<br>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">Bankswitch:</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  STA $8000       ;;new bank to use</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  RTS</span></p>
<br>
<br><span style="font-weight: bold;" class="Apple-style-span"><span style="font-size: medium;" class="Apple-style-span"></span></span></div><br><br>Nice to see Nerdy Nights back. <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"><br><br>I found a little typo in the above part.&#xA0; You talk about using the X register (both in the paragraph and in the code comments) but you do everything with A.&#xA0; I don&apos;t think anyone who has made it far enough to complete pong will get confused by that, but for completeness&apos; sake, you might want to fix it <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"><br>
				</div><div class="mdl-card--border"></div>