<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Apr 16, 2016 at 7:51:44 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Basically you can&apos;t jump or branch to a local subroutine if there&apos;s a non-local subroutine in between.<br>
<br>
LoadNametable:<br>
&#xA0; LDA Blah<br>
&#xA0; CMP #$00<br>
&#xA0; BEQ .Local<br>
&#xA0; RTS<br>
LoadAttribute:<br>
&#xA0; Stuff<br>
&#xA0; RTS<br>
.Local:<br>
&#xA0; More Stuff<br>
&#xA0; RTS<br>
<br>
It wouldn&apos;t see .Local because it&apos;s on the other side of a non-local subroutine. Even though it&apos;s well within the range of normal branching.<br>
<br>
Apologize for bad terminology.
				</div><div class="mdl-card--border"></div>