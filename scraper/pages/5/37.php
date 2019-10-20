<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Feb 19, 2010 at 8:13:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bigjt_2</b></i><br><br>I&apos;m a noob assembly programmer (and not a professional programmer at all) so I was wondering if the following would screw me in the long run:
<br>
<br>While revisiting the controller reading in a graphics test I&apos;m doing, I was also trying to clean it up by looping through the four addresses of four different sprites tiles, but then discovered the INC and DEC instructions.  So now, for example, my ReadUp looks like this:
<br>
<br>ReadUp:
<br>  LDA $4016       ; player 1 - Up
<br>  AND #%00000001  ; only look at bit 0
<br>  BEQ ReadUpDone   ; branch to ReadBDone if button is NOT pressed (0)
<br>                  ; add instructions here to do something when button IS pressed (1)
<br>
<br>   DEC $0200
<br>   DEC $0204
<br>   DEC $0208
<br>   DEC $020C
<br>ReadUpDone:        ; handling this button is done
<br>
<br>I&apos;ve ran through NESASM and it&apos;s working.  But again, I get a bad feeling like there&apos;s something that may come around and bite me later on if I use this on more complicated stuff.  Was this a decent way to handle this or was it sloppy?</div><br><br>One technique you can use to clean things up is to separate controller reading from input handling.&#xA0; <a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747">Week 7</a> talks about how to do this.<br><br>Another thing you can do is instead of treating each of those 4 sprites as individuals, is to wrap them in a &quot;metasprite&quot;.&#xA0; A metasprite will be a data type that you create to organize objects that are made up of more than one sprite.&#xA0; Your metasprite will have its own pair of X/Y coordinates, and pressing up for example will decrement the <span style="font-style: italic;">metasprite&apos;s</span> Y coordinate (1 subtraction), rather than doing each of the pieces individually (4 subtractions).&#xA0; Then, in your metasprite handling code you set the X/Y coords of the individual pieces to values <span style="font-style: italic;">relative</span> to the metasprite&apos;s X/Y.<br><br>This separation makes things cleaner when your program becomes large.&#xA0; Instead of having to keep track of 64 sprites that can go all over the place you are instead dealing with a handful of metasprites.&#xA0; Each metasprite will be in charge of setting the values for each of its own individual sprites.&#xA0; And the individual sprites themselves are effectively hidden from the rest of the program - only their parent metasprite touches them.<br>
				</div><div class="mdl-card--border"></div>