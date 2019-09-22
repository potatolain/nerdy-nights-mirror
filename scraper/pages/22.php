
					This lesson is largely unrelated to programming, but instead focuses on ROM editing.  Using the recently released <a href="http://www.nintendoage.com/forum/messageview.cfm?catid=5&amp;threadid=19704" target="_blank">Exerion 2 ROM</a> we will edit the title screen text to show your own message.  The instructions here will work for many games but not all.  Some use text/graphics compression or do not have all the letters available for use.<div><br>
<br><span class="Apple-style-span" style="font-weight: bold; ">
You will need:</span><br>
  <li><a href="http://www.the-interweb.com/serendipity/index.php?/archives/90-Release-of-FCEUXD-SP-1.07.html" target="_blank">FCEUXDSP emulator</a> with graphics viewer.  Sorry Mac/Linux users, the best development emulators are Windows only.
  </li><li>Hex editor application</li>
  <li>Text editor application</li>
  <li>10 minutes</li><br><br>
<br><span class="Apple-style-span" style="font-weight: bold; "><br>
</span><div><span class="Apple-style-span" style="font-weight: bold; ">Step 1: Backup!</span><br>
  Make a copy of the ROM.  Work with this copy.  In case you mess up you can go back to the original.<br>
  <br><div><br><span class="Apple-style-span" style="font-weight: bold; ">
Step 2: Finding the graphics</span><br>
  Load up the game in FCEUXDSP and go to the screen you want to edit.  When you are there choose the Debug... menu option and hit the Step Into button in the window that opens.  That will tell the emulator to pause so you can keep working without it changing.<br>
  <br>
  Next choose the PPU Viewer... menu option.  On one side will be the sprite graphics, and on the other the background graphics.  The text is made of background graphics tiles.  <br>
  <br><img src="scraper/images/836A6B57-CF2F-A78B-80322DE23B40799B.jpg" original-src="http://www.NintendoAgeMedia.com/users/142/photobucket/836A6B57-CF2F-A78B-80322DE23B40799B.jpg"><br>
  <br>
  If you put your mouse over one of the letter graphics the tile number will update.  Use those tile numbers to make a chart of which number corresponds to which tile number.  For Exerion 2, that chart will start like:<br>
  <br>
<tt>
  A = 0A<br>
  B = 0B<br>
  C = 0C<br>
  D = 0D<br>
  E = 0E<br>
  F = 0F<br>
  G = 10<br>
  H = 11<br>
  I = 12<br>
  etc<br></tt>
  <br>
  
  <br><span class="Apple-style-span" style="font-weight: bold; ">
Step 3: Finding the text</span><br>
  Use that chart to write out what text you are looking for.  For Exerion 2 we are going to edit the &quot;PLAYERS&quot; text for the 2 players option.  The hex characters we will be looking for are:<br><pre>  TEXT  P  L  A  Y  E  R  S
  HEX   19 15 0A 22 0E 1B 1C</pre>
  Now that you know what to look for, open up the ROM in your hex editor application.  Do a hex search for the string you just figured out.  Hopefully it will appear just once in the ROM.  In Exerion 2 the 2 PLAYERS text is around hex address 2F40.<br>
  <br><img src="scraper/images/83649C28-DD7A-6645-5AE624F6D84884CA.png" original-src="http://www.NintendoAgeMedia.com/users/142/photobucket/83649C28-DD7A-6645-5AE624F6D84884CA.png"><br>
  
  <br>
<br><span class="Apple-style-span" style="font-weight: bold; ">
Step 4: Replacing the text</span><br>
  Use your chart again to make a new string, the same length as the previous text.  This is very important.  The size of the ROM must stay exactly the same size so you cannot add extra characters.  If your new string is shorter than the old one then you must add space characters to make it the same length.<br>
<br>
  For Exerion 2 I want to add a message longer than just the PLAYERS text.  Looking before the P in players there is a space, a 2, and lots more spaces.  I can safely replace some of those too, as long as I don&apos;t add or subtract from the ROM size.<br><pre>  OLD TEXT      2     P  L  A  Y  E  R  S
  OLD HEX    30 02 30 19 15 0A 22 0E 1B 1C
  NEW TEXT   M  R  M  A  R  K     S  U  X
  NEW HEX    16 1B 16 0A 1B 14 30 1C 1E 21</pre>
  Just select the old hex and delete it, then paste in the new hex.  Save your ROM and load it up in the emulator to make sure it worked.  If the game doesn&apos;t load in the emulator then you likely changed the size of the ROM.<br>
  <br>
<img src="scraper/images/83649A15-EED7-09A5-8FE2B306803D871E.png" original-src="http://www.NintendoAgeMedia.com/users/142/photobucket/83649A15-EED7-09A5-8FE2B306803D871E.png"></div><div><br>
<br>
  Now that your game is done, test it on real hardware with your PowerPak or make a physical copy with the ReproPak at <a href="http://www.retrousb.com" target="_blank">http://www.retrousb.com...</a></div></div></div>
				