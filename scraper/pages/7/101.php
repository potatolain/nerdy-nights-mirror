<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 21, 2012 at 7:34:53 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					A few things:  What are &quot;TopPaddle&quot; and &quot;BottomPaddle&quot;?  Variables, labels?  Nothing seems to be happening with them, no reference elsewhere.  Maybe I don&apos;t know of an alternate syntax for what you use them for because I would think those would throw compiler errors.
<br>
<br>Secondly, I assume you have a block of code that takes the values stored in paddle1ytop, paddle1ybot, paddle1ynext, +1, +2, +3 and then puts them into the sprite memory (i.e. at $0204, $0208, etc.) otherwise changing these variables wouldn&apos;t be helping change what is on the screen.
<br>
<br>Lastly, and I think this is the issue - LDX #$00 should come after the UpPaddleNext: label in your subroutine.  Otherwise it never clears the X register out because the JSR goes right to the label, and whatever happens to be in X is whatever you use as your starting index from there onward.  I think that is what is causing the weird behavior.
<br>
<br>Dan
				</div><div class="mdl-card--border"></div>