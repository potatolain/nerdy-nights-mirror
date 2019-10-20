<div class="mdl-card__title"><strong>nes_fan</strong> posted on 
		
			
				
				Jan 30, 2018 at 8:34:49 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m interested in understanding the game mechanics behind the appearance of the &quot;Lizard King&quot; in the NES-game Dragon&apos;s Lair. Basically, he appears at &quot;random&quot; in certain spots, but I&apos;d like to know if it&apos;s in any way possible to predict/manipulate his appearance.
<br>What I know is that RAM-address $0718 changes to 100 before the LK turns up and starts counting down. Otherwise it&apos;s always 0. In the fceux debugger, I&apos;ve located the line of code that&apos;s executed when $0718 changes to 100. This is where I&apos;m stuck. The last lines of executed code copied from the trace logger look like this:
<br>
<br>$D769:AD 03 03  LDA $0303 = #$00           A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>$D76C:4A        LSR                        A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>$D76D:90 FA     BCC $D769                  A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>...
<br>...
<br>...
<br>$D769:AD 03 03  LDA $0303 = #$00           A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>$D76C:4A        LSR                        A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>$D76D:90 FA     BCC $D769                  A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>$D769:AD 03 03  LDA $0303 = #$00           A:00 X:00 Y:0C S:FF P:nvUbdIZc
<br>&apos;Here the frame advances by one and $0718 gets the value 100.
<br>&apos;The same loop of 3 lines of code are repeated 10 more times before the loop is broken after an execution of $D769 and other lines of code are executed
<br>
<br>1. Maybe not related to the appearance of the LK, but is there a plausible explanation for why the game executes the same code over and over in what appears to be an infinite loop? Except for when the LK counter changes, none of the RAM-addresses change during the loop (easily verified with the &quot;RAM search&quot; feature in the emulator) nor do X, Y, A or the flags.
<br>2. What does LSR act on when there are no arguments? The accumulator?
<br>3. Where does $0718 come into the picture here? There is no reference to it and still it changes value all of a sudden?
<br>4. What could be the explanation for breaking the loop? &quot;RAM search&quot; still doesn&apos;t indicate any changes to any RAM address and none of X, Y, A or any of the flags change (according to the trace logger).
<br>5. Why is the loop broken after an execution of $D769 (LDA) and not the BCC in $D76D?
				</div><div class="mdl-card--border"></div>