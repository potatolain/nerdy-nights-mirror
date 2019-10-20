<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 29 at 3:02:17 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
Thanks. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span> Sounds like you&apos;re fully understanding things now. That&apos;s awesome!</div>
<br>
Hmm... I thought so too until I tried to add a player 2 this week. Here I am late sunday on the weekend still can&apos;t get it lol.&#xA0;<br>
I added a second MoveShip, buttons2, even rotate2, end2, etc. (just to make sure it wasn&apos;t going to another subroutine and overwriting / getting lost)<br>
<br>
No dice, so this is what I did for debugging so far (which seems to be my shortfall, so help me learn some debugging on this).<br>
So I wanted to test the controller and the 2 sprites so I did this:&#xA0;<br>
<br>
1.) Setup FCEUX and tested that 2nd controller is being detected and usable. (CHECK)<br>
2.) I swapped ReadController1&apos;s LDA $4016 for $4017 and the MoveShip to see if controller 2 could move sprite 1 (CHECK)&#xA0;<br>
3.) I swapped ReadController1&apos;s LDA $4016 for $4017 and the MoveShip to see if controller 1 could move sprite 2 (CHECK)&#xA0;<br>
3.) I changed from sprite 1&apos;s tile / attributes ($0201 / $0202) to sprite 2&apos;s tile and attributes ($0204 / $0205) to see if controller 2 could rotated sprite 2 (CHECK)<br>
<br>
So I know its not the sprite code, I know its not the controller...so its the buttons2 / ship movement2 code. Well, I opened debugger, got lost&#xA0;<span class="sprites_emoticons absmiddle" id="emo_blush">&#xA0;</span>&#xA0;<br>
I wanted to somehow setup a test to verify a few things:<br>
<br>
1.) Is buttons2 being populated with a byte of correct values?<br>
2.) View the AND results to see if it even sees left / right bits<br>
3.) etc...but to step through the rest to see where its failing or jumping off.&#xA0;<br>
<br>
So if you or anyone can, I&apos;d like to be helped a bit more on debugging rather than the answer to the problem. I really need to learn debugging and need some help with doing it.&#xA0;<br>
<br>
Thanks!
				</div><div class="mdl-card--border"></div>