<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 30, 2014 at 11:40:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Having a strange issue with my code when loading the Title Screen from a Game Over game state. When I start the ROM, the title screen loads just fine. Then I play the game, lose, and get to the game over screen. During all of this, I am changing the palette (with the PPU off) during game state changes and background changes. Now, when I switch from the game over game state back to the title screen, the title screen is all 0s. When I look at the Name Table Viewer in FCEUXD, the correct title screen is in $2000 and mirrored to $2800 and the other 2 name tables are all 0s. Now, if I press start again, the game playing state loads just fine and I can play the game again.<br>
<br>
With further troubleshooting, I commented out the palette change code before loading the title screen when transitioning from game over screen and the title screen loads just fine, but using the wrong palette since I commented out that part. Any ideas on what could cause this?&#xA0; Here is the relevant code to the processes: <a href="http://pastebin.com/EEWkgebx" target="_blank" original-href="http://pastebin.com/EEWkgebx">http://pastebin.com/EEWkgebx...</a><br>
<br>
If nothing looks out of sorts here, I could post the entire code for those that request it. Picture below of the emulator and the nametable.<br>
<br>
Thanks!<img align alt="hhissue" border="0" hspace="4" src="scraper/images/239C3E93-9102-893B-563EC5E76EE3F60C.png" vspace="4" original-src="http://nintendoagemedia.com/users/19959/photobucket/239C3E93-9102-893B-563EC5E76EE3F60C.png">
				</div><div class="mdl-card--border"></div>