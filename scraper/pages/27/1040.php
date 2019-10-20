<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 17 at 7:29:25 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					From nerdy nights week 2:<br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i><br>
<br>
<strong>Background</strong><br>
This is the landscape graphics, which scrolls all at once. The sprites can either be displayed in front or behind the background. <strong>The screen is big enough for</strong> <strong>32x30 background tiles,</strong> and there is enough internal RAM to hold 2 screens. When games scroll the background graphics are updated off screen before they are scrolled on screen.</div>
As you can see, backgrounds are 32x30 tiles. Yes, you could code your background loops accordingly. It isn&apos;t an emulator issue. This is just how the NES architecture is. It saves that space for the attribute data.<br>
<br>
Attribute data already starts at $23C0 (if the backgrounds were 32x32 there would be no room for attribute data. It would have to start at $2400, but that&apos;s where the second nametable data is stored).<br>
<br>
I&apos;ve always just left the loops running a full four times. Whatever garbage gets written there will immediately be overwritten when you write your attribute loops, so long as you write it after you load your background.<br>
<br>
As for your last question, that second loop wouldn&apos;t work since you&apos;re resetting X to zero every time, but other than that, you&apos;re already not saving space by having to write a second loop in the first place. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span> It&apos;s cool that you&apos;re making sense of it though. Getting it to be &quot;faster&quot; isn&apos;t really needed, since the screen is always off upon bootup initialization.
				</div><div class="mdl-card--border"></div>