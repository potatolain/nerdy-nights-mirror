<div class="mdl-card__title"><strong>resynthesize</strong> posted on 
		
			
				
				Oct 27, 2009 at 8:10:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>You have to incriment AddrHigh cause:
<br>$2000 + $00 = $2100
<br>So on the second outer loop you want to start writing from $2100 not $2000.  If you didn&apos;t do this, you would just overwrite the top 1/4 of the screen 4 times.</div><br><br>I understand that AddrHigh is incremented to start processing the next chunk.&#xA0; What I am confused about is how incrementing it is automatically updating the loop to look at the correct address.&#xA0; <br><br>Here is my understanding of the loop: <br><br>* AddrHigh and AddrLow are both set to the high and low bytes of the background address<br>* X and Y registered are set with 4 and 0 respectively<br>* Loop starts<br>* The first byte of the background is loaded into the accumulator and stored in $2007.&#xA0; This is where I am confused.&#xA0; If the background tiles started at $3F00 for example, AddrHigh should contain $3F and AddrLow $00, right?&#xA0; The LDA is reading from  AddrLow ($00) + Y, which is 0 the first time around the loop.&#xA0; Wouldn&apos;t that load whatever was in $00 the first time around?&#xA0; I think there is some magic with the brackets where LDA [AddrLow], y is automatically calculating the correct offset from AddrHigh and AddrLow, but I don&apos;t see how that is done, and that is what I&apos;m confused about <img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;"> <br><br>&#xA0;<br><br>
				</div><div class="mdl-card--border"></div>