<div class="mdl-card__title"><strong>chowder</strong> posted on 
		
			
				
				Apr 23, 2015 at 4:08:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hello <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
I need some coding help. I&apos;ve finally got some kind of game structure that I&apos;m reasonably happy with, I can add generic objects (player, enemies, bullets, whatever) to a list and then just cycle through them to update animation etc. I have an NMI routine, but at the moment I am doing some logic in there to build the sprite data from variables ready for OAM... I&apos;ve read that this is bad (ideally only PPU updates should be in NMI due to limited vblank time), but it doesn&apos;t work if I try updating in the main loop.<br>
<br>
At the moment I have one dummy sprite that moves from left to right, and it is supposed to stop when you press start on the joypad. It doesn&apos;t work <span class="sprites_emoticons absmiddle" id="emo_sad"></span> Should I be reading the joypad in NMI too? I was trying to keep as much stuff in the main loop as possible, but I don&apos;t really know if that&apos;s right.<br>
<br>
If someone could take a look, that would be much appreciated. I&apos;ve stuffed all the code in a single .asm file, you can get it here:<br>
<br>
<a href="http://pastebin.com/By4NtKVR" target="_blank">http://pastebin.com/By4NtKVR...</a><br>
<br>
Thank you!<br>
Rob.<br>
<br>
Edit: grammar<br>
2nd edit: pastebin link instead
				</div><div class="mdl-card--border"></div>