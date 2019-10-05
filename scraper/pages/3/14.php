<div class="mdl-card__title"><strong>Sivak</strong> posted on 
		
			
				
				Jun 7, 2008 at 1:38:03 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bubbahotep</b></i><br><br>Hi,
<br>
<br>I&apos;m new to this, so these may be dumb questions.
<br>
<br>In background.asm
<br>
<br>In the vblankwait1: section
<br>What does BIT and BPL mean?
<br>
<br>In the clrmem: section
<br>You increment x and then branch if not equal
<br>I thought you had to do some kind of comparison on the line before BNE
<br>What is the BNE comparing to? What values must be equal to continue and not jump back to clrmem:?
<br>
<br>
<br>
<br>
<br>
<br>Thanks</div><br><br>BNE in this case kind of functions like &quot;jump if not zero&quot;.&#xA0; So basically, the loop increases until it hits the number 255 (FF in hex).&#xA0; The next increment in would normally make it be 256, but in the world of 8 bit,&#xA0; it goes back to 0 and the branching stops because you&apos;re at 0.<br><br>I think the way it works is the zero flag gets set, and that&apos;s what stops the branching.<br><br><br>The loop could also have been set up like this:<br><font face="courier">
&#xA0;&#xA0;LDX #$FF<br>
.loop:<br>
&#xA0;&#xA0;;Do whatever code you want<br>
&#xA0;&#xA0;DEX<br>
&#xA0;&#xA0;BNE .loop</font><br><br><br>That&apos;s the best way to do most counting loops.<br>
				</div><div class="mdl-card--border"></div>