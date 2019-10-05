<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 8, 2014 at 2:43:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>spoonybard</b></i><br>
	<br>
	The &quot;classical&quot; way of communication between CPU and PPU is to write data at the $2000 - $2007 CPU address range : this range of memory can be called the &quot;communication ports&quot; between the CPU and the PPU. But there is another way to move data from the CPU memory to the PPU memory (quick thought : does it work both ways ? CPU mem &lt;--&gt; PPU mem) by using DMA.</div>
It does not work both ways, only CPU =&gt; PPU.<br>
<br>
<div class="FTQUOTE" "width: 679.1875px;">
	<i>Originally posted by:&#xA0;<b>spoonybard</b></i><br>
	<br>
	DMA is a faster way to copy data between the CPU and PPU memories because we do not send data byte by byte like the CPU would do : the exchange of data by DMA does not involve the CPU (I even think I&apos;ve read that during DMA, the CPU is not working).</div>
Yeah, normal CPU instructions are not executed while a DMA is active.<br>
<br>
<div class="FTQUOTE" "width: 679.1875px;">
	<i>Originally posted by:&#xA0;<b>spoonybard</b></i><br>
	<br>
	Now, in the code, you send the sprite data which is stored at $0200 - $02FF in the CPU RAM. We send the origin address $0200 by writing first the low byte $00 at the CPU address $2003 and the high byte $02 at the CPU address $4014 which triggers the &quot;DMA data exchange&quot;.</div>
This is slightly incorrect. You can only control the source address at a 256 byte granularity. So if you write $02 to $4014, the transfer will always start from $200. Simply put, the source address is writtenByte*256. The register at $2003 sets the destination address (0..255) at the PPU side, not CPU.<br>
<br>
<div class="FTQUOTE" "width: 679.1875px;">
	<i>Originally posted by:&#xA0;<b>spoonybard</b></i><br>
	<br>
	But we didn&apos;t give any information about how many bytes we transfer and we didn&apos;t tell where to<br>
	store it in the PPU memory. Is the number of bytes fixed for each DMA transfer ? Is the DMA transfer only possible for the sprites data, in terms of hardware : the hardware is such that the PPU memory range target is only the sprite data memory range ?</div>
Yes, the number of bytes is fixed at 256. Yes, the DMA can only be used to transfer sprite (OAM) data.<br>
<br>
If you write $02 to $4014, what actually happens during DMA is functionally exactly equivalent to the following code:<br>
<br>
LDA $200<br>
STA $2004<br>
LDA $201<br>
STA $2004<br>
... (lines stripped) ...<br>
LDA $2FE<br>
STA $2004<br>
LDA $2FF<br>
STA $2004<br>
<br>
The advantage of DMA is that it is 4 times faster than using code like above (it reads from $200 in a single cycle, then writes to $2004 in a single cycle, rinse and repeat, whereas LDA and STA would take 4 cycles each).
				</div><div class="mdl-card--border"></div>