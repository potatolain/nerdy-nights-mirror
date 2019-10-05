<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Feb 19, 2010 at 12:42:54 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m a noob assembly programmer (and not a professional programmer at all) so I was wondering if the following would screw me in the long run:
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
<br>I&apos;ve ran through NESASM and it&apos;s working.  But again, I get a bad feeling like there&apos;s something that may come around and bite me later on if I use this on more complicated stuff.  Was this a decent way to handle this or was it sloppy?
				</div><div class="mdl-card--border"></div>