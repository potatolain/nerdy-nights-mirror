<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Dec 13, 2007 at 7:43:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><begin quote><i>Originally posted by: <b>burnambill333</b></i><br><br>So wait...SMB can hold only of 512x240 pixels of background data at a time? So as I&apos;m scrolling through the level, they continually update as I&apos;m running along?</begin></div>
<br>
Exactly, the background data that is off screen gets updated so you don&apos;t see it changing on screen.
<br><br>
<div class="FTQUOTE"><begin quote><i>Originally posted by: <b>burnambill333</b></i>
How does the background data update? Does each individual pixel update, or does it update in increments of X amount of pixels at a time?</begin></div>
Background updates are done by tiles, so an 8x8 pixel tile is changed.  When a game is scrolling horizontally there will be one vertical column of tiles to update for every 8 pixels scrolled.  SMB looks like it is keeping 16 columns ahead off screen correct, or 8 columns of its brick sized blocks.  Using the <a href="http://www.the-interweb.com/serendipity/exit.php?url_id=627&amp;entry_id=90" target="_blank" original-href="http://www.the-interweb.com/serendipity/exit.php?url_id=627&amp;entry_id=90">FCEUXD SP debugger</a> you can see it in action.  First download the <a href="http://www.nespowerpak.com/smb.nes" target="_blank" original-href="http://www.nespowerpak.com/smb.nes">SMB/DH game</a> and load it up in FCEUXD. Before choosing SMB, open the Name Table Viewer in tools menu, and the Debug in the tools menu.  In the 6502 Debugger window press the Add... button below breakpoints.  Type 8082 into the first Address field and click the Execute checkbox.  Hit OK.  This tells the emulator to stop when the code reaches memory address $8082, which happens once per frame in SMB.  You can now select SMB.  The screen will stop at all black.  Now continually click the Run button in the debugger to see the screen being updated.  You will have to click 60 times for one second of game play.  Once the demo starts running you will be able to watch new background being added as mario scrolls.  I would bet the 8 block look ahead is why a turtle can go off screen and come back if there is something out of view to bounce off.
<br><br> 
<div class="FTQUOTE"><begin quote><i>Originally posted by: <b>burnambill333</b></i>
Also, I assume the audio data is stored in PRG correct? Only graphics (background and sprite) are stored in CHR, right?</begin></div>
Yes audio data is in the PRG.  Sounds are all generated by software, anything prerecorded is low quality (Get The Spellbook!).  CHR is only used for graphics, except in some really crazy cases like Racermate when it is used for save files.
				</div><div class="mdl-card--border"></div>