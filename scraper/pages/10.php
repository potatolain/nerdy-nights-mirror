
					<span class="Apple-style-span" style="font-weight: bold; "><div><span class="Apple-style-span" style="font-weight: normal; ">To do the advanced lessons you should have already finished Pong.</span></div><div><br></div>This Week:&#xA0;</span>As you complete a full game you may find the NROM memory limits to be too small.  To enable more ROM on carts many forms of &quot;bank switching&quot; were used.  This article deals with just one type of CHR switching, used on CNROM carts.  CNROM is easy to use and very cheap to manufacture.  The <a href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=42&amp;affiliate_banner_id=1" target="_blank" original-href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=42&amp;affiliate_banner_id=1">ReproPak</a>, <a href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=34&amp;affiliate_banner_id=1" target="_blank" original-href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=34&amp;affiliate_banner_id=1">PowerPak</a>, and <a href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=35&amp;affiliate_banner_id=1" target="_blank" original-href="http://www.retrousb.com/product_info.php?ref=5&amp;products_id=35&amp;affiliate_banner_id=1">PowerPak Lite</a> all support CNROM completely so it is easy to get your code running on real hardware.  If you are using donor carts you can look up games that use CNROM at <a href="http://bootgod.dyndns.org:7777/" target="_blank" original-href="http://bootgod.dyndns.org:7777/">BootGod&apos;s NES Cart Database</a>.<br>
<br>
<br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
CHR Bank Switching</span> </span><br>
  Bank switching is exchanging one chunk of ROM for a different chunk, while keeping everything in same address range.  It is not making a copy, so it happens instantly.  You can switch between different banks whenever you want.  The size and memory range of the banks depends on the mapper.  For the CNROM mapper used in this article the bank size is 8KB of CHR ROM.  The whole 8KB range of PPU memory $0000-1FFF is switched at once.  This means the graphics for all background tiles and sprite tiles will be swapped.  In your game you may have some tiles duplicated in multiple banks so they do not appear to change on screen.  PRG is not bank switched, so it remains at the NROM limit of 32KB.<br>
<br>
<br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
Set Mapper Number</span></span><br>
The first part of adding bank switching is changing the mapper number your .NES file uses.  At the top of your code has previously been:<br>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;.inesmap 0   ; mapper 0 = NROM, no bank swapping</span></p>
<br>
The new line is:<br>
<p></p><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;.inesmap 3   ; mapper 3 = CNROM, 8KB CHR ROM bank swapping</span></p>
<br>
This line in the header just tells the emulator to use CNROM to play your game.  A list of other iNES mapper numbers can be seen at the wiki at <a href="http://nesdevwiki.org/" target="_blank" original-href="http://nesdevwiki.org/">http://nesdevwiki.org/...</a>. <br>
<br>
<br><span class="Apple-style-span" style="font-size: medium; "><span class="Apple-style-span" style="font-weight: bold; ">
Set CHR Size</span></span><br>
The next part is to increase the size of your CHR ROM.  Change the .ineschr value from 1 to 2, showing that there are now two 8KB banks. CNROM can handle 32KB of CHR ROM or four 8KB banks but this example will only use two.<br>
<br>
<br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
Add CHR Data</span></span><br>
The third part adds the data for the next bank into your game.  Just make a new .bank statement below your current one for CHR, giving it the next sequential number.  In your code when you set which bank to switch to this is the number used.  PRG bank numbers are ignored so your original CHR bank will be #0 and the new one will be #1.<br>
<br>
<br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
Bank Switching Code</span></span><br>
The final part it to write your bank switching code.  This subroutine will take a bank number in the A register and switch the CHR bank to it immediately.  The actual switch is done by writing the desired bank number anywhere in the $8000-FFFF memory range.  The cart hardware sees this write and changes the CHR bank.<br><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span class="Apple-style-span" style="font-family: &apos;-webkit-sans-serif&apos;; font-size: 12px; "><br></span></p><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... your game code ...</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;LDA #$01        ;;put new bank to use into the A register</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;JSR Bankswitch  ;;jump to bank switching code</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... your game code ...</span></p>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">Bankswitch:</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;STA $8000       ;;new bank to use</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;RTS</span></p>
<br>
<br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; ">
Bus Conflicts</span></span><br>
When you start running your code on real hardware there is one catch to worry about.  For basic mappers, the PRG ROM does not care if it receives a read or a write command.  It will respond to both like a read by putting the data on the data bus.  This is a problem for bank switching, where the CPU is also trying to put data on the data bus at the same time.  They electrically fit in a &quot;bus conflict&quot;.  The CPU could win, giving you the right value.  Or the ROM could win, giving you the wrong value.  This is solved by having the ROM and CPU put the same value on the data bus, so there is no conflict.  First a table of bank numbers is made, and the value from that table is written to do the bank switch.<br>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... code ...</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;LDA #$01        ;;put new bank to use into A</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;JSR Bankswitch  ;;jump to bank switching code</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">... code ...</span></p>
<br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">Bankswitch:</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;TAX                ;;copy A into X</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;STA Bankvalues, X  ;;new bank to use</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;RTS</span></p>
  <br>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">Bankvalues:</span></p>
<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; "><span style="letter-spacing: 0px; ">&#xA0;&#xA0;.db $00, $01, $02, $03    ;;bank numbers </span></p>
 
<br>
The X register is used as an index into the Bankvalues table, so the value written by the CPU will match the value coming from the ROM.<br>
<br>
  <br><span class="Apple-style-span" style="font-weight: bold; "><span class="Apple-style-span" style="font-size: medium; "><br>
Putting It All Together</span></span><br>
Download and unzip the <a href="scraper/files/chrbanks.zip" target="_blank" original-href="http://www.nespowerpak.com/nesasm/chrbanks.zip">chrbanks.zip</a> sample files.  This set is based on the previous <a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=7974" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=7974">Week 5</a> code.  Make sure that file, mario0.chr, mario1.chr, and chrbanks.bat is in the same folder as NESASM3, then double click on chrbanks.bat.  That will run NESASM3 and should produce chrbanks.nes.  Run that NES file in FCEUXD SP to see small Mario.<br>
<br>
Inside the LatchController subroutine a new section is added to read the Select and Start buttons from the controller.  The Select button switches to CHR bank 0, and the Start button switches to CHR bank 1.  Graphics of CHR bank 1 have been rearranged so Mario will change to a beetle. &#xA0;The tile numbers are not changed, but the graphics for those tiles are.
<div><br></div><div>Open the PPU Viewer from the Tools menu in FCEUXD SP and try hitting the buttons. &#xA0;You can see all the graphics changing at once when the active bank switches.</div>
				