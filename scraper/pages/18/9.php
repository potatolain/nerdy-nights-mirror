<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 28, 2012 at 10:57:06 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Question: In the description of the add_to_dbuffer subroutine, you say the following:
<br>
<br>;   Note:   dbuffer starts at $0100.  This is the stack page.  The
<br>;               stack counts backwards from $1FF, and this program is small enough that there
<br>;               will never be a conflcit.  But for larger programs, watch out.
<br>
<br>
<br>What does this mean?  In the add_to_dbuffer and draw_dbuffer subroutines you appear to be reading everything from $0100 until you hit the termination control (#$00) for a string length.  I understand that in this situation we can only have from $0100 to $01FF in RAM for the stack (and therefore that is the maximum length of a buffer) because the sprite shadow OAM is in $0200 - $02FF, but I don&apos;t see anything in here that indicates there is a &quot;counting backwards&quot; sequence and I don&apos;t know what sort of trouble we could run into here.
				</div><div class="mdl-card--border"></div>