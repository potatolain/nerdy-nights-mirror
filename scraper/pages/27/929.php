<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Aug 31, 2017 at 1:27:43 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>brilliancenp</b></i><br>
	<br>
	Found something weird in NESASM3 today. Building on my explanation of how to use a byte for flags and how to set bits of that byte to 1 and 0, I have been progressing nicely. Thanks to all that helped! But when I set bit 1 of my variable to 1 (from $%00000000 to #%00000010) it was locking up the emulator. Now it took me a really long time to figure out what was going on. I thought it was some stupid coding mistake but when I kept the bit at zero but flipped my logic to do what it should do when it was 1 the logic worked fine. I moved my variable down a couple of lines to become the last variable declared because I know that when we declare variables they get put at addresses and the address increases as we go down the program. Doing this make the program to behave correctly and no longer locked up the emulator. Does this mean that this variable was taking up an address that it shouldn&apos;t have been or something? Just wondering for future development.</div>
<br>
Hi,<br>
<br>
In which RAM page is your variable? The debug tools of FcEux can help you with this. From your description, the only thing I can think of is if the variable ended up in a byte of the stack page $0100, messing up the addresses for the rts instructions. To be honest, my bet is that there is a more obvious mistake crashing your code, however, without source code, I cannot help you more.<br>
For sure, $% is a wrong prefix, it should be #% like you have written below in your post; but I am sure you just mistyped it here. By the way, variable placement in memory, #%, #$, and other syntax related things were in the things pushing me towards programming my own assembler and setting up my assembly dialect syntax: I find so easier to program something, than learn the syntax and logic of another assembler made by someone else. But I digress, and this is just me maybe. If your intention is to work with NESASM3, I suggest you to find a complete document about NESASM3 syntax which I believe would help you a lot. Impressing progress so far, keep it up.<br>
<br>
Side note tip about your previous questions on updating a score on screen: in general, of course, do not waste sprites, they are small, and only 64; but also don&apos;t have unused sprites: to update background tiles when you could have the same result using unused sprites, adds complexity, bytes, cycles, and all.<br>
<br>
Consider this: you transfer all your 64 sprites each NMI anyways; so, if really all sprites are used, or there are not 10 empty places for digits in your sprite CHR, or the sprites palette cannot display digits the color you want, or your goal is to learn specifically how to update a specific background tile, or there is any good reason to not use sprites to update your score, then use backgrounds tiles updates, perfect; else, if you still have unused sprites, use these sprites also on your status/score bar: you save processor time removing a further routine in critical V-Blank, save few bytes on code, save few bytes of variables, and sprites are more flexible in any possible way compared to background tiles: you can put them in any x or y coordinate, color them more easily, flip them, and whatever else does not apply to background tiles.<br>
<br>
At least, this is my opinion: don&apos;t waste them, but use them all before deciding to use background updates instead. Just my two cents, from my experience, trying to help; I can be wrong. Better programmers will likely give you more solid advice.<br>
<br>
Kind Regards.
<br>
<br>Edit: misspelling.
				</div><div class="mdl-card--border"></div>