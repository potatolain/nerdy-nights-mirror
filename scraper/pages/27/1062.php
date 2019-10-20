<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Aug 01 at 3:57:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m very interested in the why simply so I know for later when it may bite me in the butt haha.&#xA0;Here is the current (attached).&#xA0;<br>
<br>
In its current version, both player 1 and 2 controllers can rotate their respective sprites.&#xA0;So to revert to the &quot;non working&quot; version you take lines 210 - 332&#xA0; and cut them.<br>
Then paste it over / replace the 2 &quot;JSR MoveShip[1|2]&quot; lines at the end of the NMI. I think you have to remove the last RTS as well since its no longer a subroutine being referenced, but that should be all.&#xA0;&#xA0;<br>
Player 1 controller will be able to spin the player 1 sprite, but Player 2 controller won&apos;t be able to spin player 2 sprite.&#xA0;<br>
<br>
Other than taking it out of the NMI and calling the MoveShip as a subroutine there&apos;s no changes to the code really.&#xA0;
				</div><div class="mdl-card--border"></div>