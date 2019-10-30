<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				May 12, 2010 at 5:49:59 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Never messed with sprite-0 stuff myself, but if I were to guess how to do it, I&apos;d try this:<br><br>1) Draw the status bar at the top of the nametable instead of the bottom.<br>2) At the end of NMI, set scroll to 0, 0<br>3) Wait for sprite 0<br>4) set scroll to scroll_x, 0<br><br>For the controller reading,?MRN has the right idea.&#xA0; You want to make a distinction between a button that is pressed and one that is newly pressed (ie, wasn&apos;t pressed last frame).&#xA0; To do that, you will need to save the button states for last frame:<br><br>read_controller:<br>&#xA0;&#xA0;&#xA0; lda buttons<br>&#xA0;&#xA0;&#xA0; sta buttons_old&#xA0;&#xA0; ;save last frame&apos;s button state before getting the new one<br>&#xA0;&#xA0; &#xA0;<br>&#xA0;&#xA0;&#xA0; ;snip.. read controller and store result in buttons<br><br>&#xA0;&#xA0;&#xA0; lda buttons_old&#xA0;&#xA0;&#xA0; ;last frame&apos;s buttons<br>&#xA0;&#xA0;&#xA0; eor #$FF&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0; &#xA0; ;flip the bits, so 1=not pressed last frame, 0=pressed<br>&#xA0;&#xA0;&#xA0; and buttons&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;and with this frame&apos;s buttons.<br>&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0; &#xA0; &#xA0; ;Only those buttons not pressed last frame and pressed this frame will return as 1.<br>&#xA0;&#xA0;&#xA0; sta buttons_newly_pressed&#xA0; ;store results.<br>&#xA0;&#xA0;&#xA0; rts <br>
				</div><div class="mdl-card--border"></div>