
					<b>This Week:</b>  The MMC1 is the first advanced mapper made by Nintendo.  It is used for many games including top titles like The Legend of Zelda.  The main benefits are mirroring control, up to 256KB of PRG ROM, 128KB of CHR RAM or ROM, and 8KB of WRAM.  The WRAM can be battery backed for saved games.  This tutorial will cover all features of the MMC1 and how to use them. You should be comfortable with the normal Nerdy Nights series before starting. &#xA0;Another more simple lesson for bankswitching is&#xA0;<a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=17074" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=17074">Advanced Nerdy Nights #1</a>.&#xA0;&#xA0;If you only need one or two of the banking features then you may want to consider more simple and cheaper mappers instead such as UNROM or CNROM.<br>
<br>
Carts using the MMC1 will have the S*ROM board code, like SNROM and SGROM.  BootGod&apos;s <a href="http://bootgod.dyndns.org:7777/" target="_blank" original-href="http://bootgod.dyndns.org:7777/">NesCartDB</a> database can be searched for which games use which boards.  The <a href="http://www.retrousb.com/product_info.php?cPath=24&amp;products_id=43" target="_blank" original-href="http://www.retrousb.com/product_info.php?cPath=24&amp;products_id=43">ReproPak MMC1</a> board can also be used to build carts. 
<br>
<br><br><span class="Apple-style-span" style="font-size: medium; "><b>
Shift Registers</b></span><br>
The MMC1 uses a 5 bit shift register to temporarily store the banking bits.  Shift registers were covered in <a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747">Week 7</a>.  When writing to the register data comes in from data bit 0 only.  This is similar to the controller reading where data outputs to data bit 0.  Every time a write happens the current bits are shifted and D0 is inserted.  The first bit you write eventually becomes to lowest bank bit.  On the 5th write when the shift register is full the 5 bit value gets copied to the banking register.  At this point the bank switch happens immediately without any delays.  To load a bank register the LSR instruction is used for shifting:<br>
<pre>  LDA banknumber
  STA bankreg    ; load bank bit 0 to shift register from data bit 0
  LSR A          ; shift in next data bit to position 0
  STA bankreg    ; load bank bit 1 from data bit 0
  LSR A
  STA bankreg    ; bank bit 2
  LSR A
  STA bankreg    ; bank bit 3
  LSR A
  STA bankreg    ; bank bit 4, bank register loaded, bank switch happens here</pre><br>
Unlike other simple mappers like UNROM and CNROM, there are no bus conflicts.  The ROM is not enabled while you are writing so you do not have to make the data you are writing match.<br>
<br>
Data bit 7 is also connected to the MMC1.  When a write happens to any banking register with D7=1 the shift register is reset back to position 0.  It will then take another 5 writes to fully load the next value.  All other bits are ignored and D0 is not loaded into the shift register.  The PRG bits of the control register are also reset to their default values as shown in the next section.  Usually you will only reset the MMC1 at the very beginning of your program:
<br>
<pre>  LDA #%10000000
  STA $8000</pre>
 <br><span class="Apple-style-span" style="font-size: medium; "><b>
Config Register at $8000-9FFF</b></span><br>
To load the config register, do 5 writes to the $8000-9FFF range.  The config bits are:<br>
<br>
<pre>  43210
  -----
  CPRMM
  |||||
  |||++- Mirroring (0: one-screen, lower bank; 1: one-screen, upper bank;
  |||               2: vertical; 3: horizontal)
  ||+--- PRG swap range (0: switch 16 KB bank at $C000; 1: switch 16 KB bank at $8000;
  ||                            only used when PRG bank mode bit below is set to 1)
  |+---- PRG size (0: switch 32 KB at $8000, ignoring low bit of bank number;
  |                         1: switch 16 KB at address specified by location bit above)
  +----- CHR size (0: switch 8 KB at a time; 1: switch two separate 4 KB banks)</pre>
<br>
<b>Mirroring Config</b><br>
  Your program can change the mirroring at any point using these bits.  You do not need to wait for vblank to change them.  When using the MMC1 the .inesmir directive bit is ignored.  You must set it through your code.  Mirroring set to 0 and 1 are single screen mirroring modes.  Only 1KB is used for all nametables.  When scrolling the screen will wrap both vertically and horizontally.  Mirroring set to 2 is the typical vertical mirroring, and 3 is horizontal mirroring.<br>
<br>
<b>PRG Bank Size Config</b><br>
  The MMC1 swaps PRG ROM in either 16KB or 32KB chunks.  By default this bit is set to 1 for 16KB banks.  Clearing it to 0 enables 32KB banks.  Notice these are not the same size as the 8KB NESASM banks so the bank numbers will be different.  When using 16KB banks the MMC1 banks are twice as big, so you must divide your NESASM bank number by 2 when writing it to the bank register.  When using 32KB banks you must divide by 4.  16KB banks is most commonly used, with the bulk of the code in the fixed bank and data/graphics/music in the swappable banks.<br>
<br>
<b>PRG Swap Range Config</b><br>
  When using 16KB banks set above, the PRG address range that gets swapped can be configured.  If 32KB banks are used this bit is ignored and the entire $8000-FFFF range is swapped at once.<br>
<br>
By default this bit is set to 1, making the $8000-BFFF range swappable while the $C000-FFFF range is fixed to the last bank Of PRG.  This matches the PRG swapping of the UNROM mapper and is most commonly used.  Clearing this bit to 0 changes this so $8000-BFFF is fixed and $C000-FFFF is swappable.  <br>
<br>
Changing the range or bank size can be useful for swapping audio samples but you have to be careful to put IRQ/reset/NMI vectors in all banks that are loaded into the vector area at $FFFA-FFFF.<br>
<br>
<b>CHR Bank Size Config</b><br>
Like the PRG the CHR bank size can be configured to either 4KB or 8KB banks.  With 8KB banks the whole $0000-1FFF range is one bank.  With 4KB banks there are two banks at PPU $0000-0FFF and $1000-1FFF.  This can be used with background in one bank and sprites in another.  Then, for example, all sprites could be swapped and the background could stay.<br>
<br>
<br><span class="Apple-style-span" style="font-size: medium; "><b>
CHR Bank 0 Register at $A000-BFFF</b></span><br>
This is the register for CHR bank 0.  To set it do 5 writes to the $A000-BFFF range.  When in 4KB CHR mode it selects a bank for PPU $0000-0FFF. The full 5 bit value is used so there are 32 possible banks.  Each bank is 4KB making it 128KB CHR maximum.  When in 8KB CHR mode this register controls the full PPU $0000-1FFF.  The bottom bit is ignored so there are 16 possible banks.  Each bank is now 8KB which is still 128KB max.<br>
<br><div><table style="width: 75%; " align="center" border="1"><tbody><tr><td width="50%"><b>4KB mode</b></td><td width="50%"><b>8KB mode</b></td></tr><tr><td>controls $0000-0FFF</td><td>controls $0000-1FFF<br>bottom bit is ignored</td></tr></tbody></table><br>
<span class="Apple-style-span" style="font-size: medium; "><b><br></b></span></div><div><span class="Apple-style-span" style="font-size: medium; "><b>CHR Bank 1 Register at $C000-DFFF</b></span><br>
This is the register for CHR bank 1.  To set it do 5 writes to the $C000-DFFF range.  When in 4KB CHR mode it selects a bank for PPU $1000-1FFF.  When in 8KB CHR mode it is completely ignored.<br><br></div><div><table style="width: 75%; " align="center" border="1"><tbody><tr><td width="50%"><b>4KB mode</b></td><td width="50%"><b>8KB mode</b></td></tr><tr><td>controls $1000-1FFF</td><td>register ignored</td></tr></tbody></table><br><br><br><br>
<br><span class="Apple-style-span" style="font-size: medium; "><b>
PRG Bank Register at $E000-FFFF</b></span><br>
This is the register for PRG banking.  To set it do 5 writes to the $E000-FFFF range.  The bits are:<br>
<br><pre>  43210
  -----
  WPPPP
  |||||
  |++++- Select a PRG ROM bank (low bit ignored in 32 KB mode)
  +----- WRAM chip enable (0: enabled; 1: disabled)</pre>
<br>
In 16KB PRG mode it selects a 16KB PRG bank for the current swappable address range.  Only the 4 lower bits are used for 16 possible PRG banks.  That is 256KB maximum. In 32KB PRG mode it selects a 32KB bank for the $8000-FFFF range.  Only bits 3-1 are used for 8 possible banks.  Bit 0 is ignored.&#xA0;</div><div><br></div><div><table style="width: 75%; " align="center" border="1"><tbody><tr><td width="33%"><b>16KB mode</b><br>swap=0</td><td width="33%"><b>16KB mode</b><br>swap=1</td><td width="33%"><b>32KB mode</b></td></tr><tr><td>controls $C000-FFFF</td><td>controls $8000-BFFF (default setting)</td><td>controls $8000-FFFF<br>low bit ignored</td></tr></tbody></table><br>
<b><br></b></div><div><b>WRAM</b><br>
Bit 5 of the PRG Bank register also controls WRAM access.  Clear this bit to enable WRAM access.  Setting the bit to 1 disables the WRAM.  If the WRAM is used for saved games it is usually disabled when it is not being accessed to prevent unwanted writes from corrupting the saves when the console is reset.<br>
<br>
To use WRAM in your program nothing needs to be changed in the iNES header.  The emulator will assume there is WRAM based on the mapper number.  Next you need to enable the WRAM in the PRG Bank register.  With that bit at 0 you can now use the WRAM.  It is just plain RAM that you can read or write at the $6000-7FFF range.  Like the console RAM the contents are unknown when the console is powered on.  All RAM is cleared to unknown values when power is removed.  However the RAM is not cleared when just the reset button is pushed.  Power is still going to the cart so the RAM is still valid.  This can be useful for telling if the console was just turned on or was only reset.<br>
<br>
To add a battery to the WRAM, set the .inesmir directive to 2 in the iNES header.  Now read and write to the WRAM normally.  When power is removed the RAM contents will remain.  The emulator will create an 8KB .sav file for the WRAM, however some emulators will not do this unless you have done some WRAM access.<br>
<br>
<br>
<span class="Apple-style-span" style="font-size: medium; "><b>Banking Routines</b></span><br>
Keeping track of all the register addresses and bits can get confusing, so a few simple routines are used instead.  In general subroutines should be used for even simple bank switching so the mapper can be changed more easily later.  Only the most commonly used Config and PRG Bank register routines are shown here, it is your job to write the others.<br>
<br><pre>ConfigWrite:        ; make sure this is in a fixed PRG bank so the RTS doesn&apos;t get swapped away
  LDA #$80
  STA $8000         ; reset the shift register
  LDA #%00001110    ; 8KB CHR, 16KB PRG, $8000-BFFF swappable, vertical mirroring
  STA $8000         ; first data bit
  LSR A             ; shift to next bit
  STA $8000         ; second data bit
  LSR A             ; etc
  STA $8000
  LSR A
  STA $8000
  LSR A
  STA $8000         ; config bits written here, takes effect immediately
  RTS<br><br>PRGBankWrite:       ; make sure this is in a fixed bank so it doesnt get swapped away
  LDA bankNumber    ; get bank number into A
  STA $E000         ; first data bit
  LSR A             ; shift to next bit
  STA $E000
  LSR A
  STA $E000
  LSR A
  STA $E000
  LSR A
  STA $E000         ; bank switch happens immediately here
  RTS</pre>
<br><span class="Apple-style-span" style="font-size: medium; "><b>
Putting It All Together</b></span><br>
Download and unzip the <a href="scraper/files/cyoammc1.zip" target="_blank" original-href="http://www.nespowerpak.com/nesasm/cyoammc1.zip">cyoammc1.zip</a> sample files.  The CYOA code has been changed to the MMC1 mapper.  Running the cyoammc1.bat file will create cyoammc1.nes, which will run in an emulator.  This sample uses 8KB of CHR RAM so no CHR banking has been included.  The changes from UNROM PRG mapping are minimal.  Some of the variables have been moved to the WRAM area to show how to use it.  An example of using WRAM to detect reset is also included in resetCount.  Try changing the battery info in the iNES header to see how it makes resetCount change between power and resets.<br><br><br><br><br><br></div>
				