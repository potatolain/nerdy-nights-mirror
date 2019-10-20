<div class="mdl-card__title"><strong>Dark_human</strong> posted on 
		
			
				
				Aug 14, 2018 at 4:13:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hello All: Dark_human here. I&apos;ve been wading into the 6502 pool here for my new project, and I&apos;ve been making a little progress. I am running into just a few small bugs while programming in NESASM3 and I would love a few pointers. I have read through all of the Nerdy nights tutorials, and I was able to follow them as I have learned quite a bit of older programming from years past.<br>
My first question would be about moving sprites. I can get multiple sprites to move together with button presses, but how would I go about making the sprite move and then stop without releasing the button. (like pressing select to change game modes in Kung Fu). It just keeps cycling through the options endlessly until the button is released.<br>
Secondly, I can turn the screen on and off to draw different option menus, but pressing a button to do so draws the screen incorrectly until the button is released, Unless I turn the screen of and wait for the next time my &quot;Drawscreen&quot; subroutine runs (then the sprites from the previous screen I did not want are rendered)<br>
i.e.<br>
LDA #%10010000 ; enable NMI, Sprites = Pattern table 0 / BG = Pattern table 1<br>
STA $2000<br>
LDA #%00011110<br>
STA $2001<br>
LDA #$00<br>
STA $2005<br>
STA $2005<br>
<br>
(also if I don&apos;t do LDA #%00011010 there I get unwanted artifacts too). Thanks for your wisdom and help in advance!! -DH
				</div><div class="mdl-card--border"></div>