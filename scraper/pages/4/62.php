<div class="mdl-card__title"><strong>spoonybard</strong> posted on 
		
			
				
				Aug 7, 2014 at 10:17:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, I have a question about the DMA part. First of all, I have looked for information about DMA in general and more specifically for the Nes. Let me tell you what I understand so far.<br>
<br>
The &quot;classical&quot; way of communication between CPU and PPU is to write data at the $2000 - $2007 CPU address range : this range of memory can be called the &quot;communication ports&quot; between the CPU and the PPU. But there is another way to move data from the CPU memory to the PPU memory (quick thought : does it work both ways ? CPU mem &lt;--&gt; PPU mem) by using DMA. DMA is a faster way to copy data between the CPU and PPU memories because we do not send data byte by byte like the CPU would do : the exchange of data by DMA does not involve the CPU (I even think I&apos;ve read that during DMA, the CPU is not working).<br>
<br>
Now, in the code, you send the sprite data which is stored at $0200 - $02FF in the CPU RAM. We send the origin address $0200 by writing first the low byte $00 at the CPU address $2003 and the high byte $02 at the CPU address $4014 which triggers the &quot;DMA data exchange&quot;.<br>
<br>
But we didn&apos;t give any information about how many bytes we transfer and we didn&apos;t tell where to<br>
store it in the PPU memory. Is the number of bytes fixed for each DMA transfer ? Is the DMA transfer only possible for the sprites data, in terms of hardware : the hardware is such that the PPU memory range target is only the sprite data memory range ?<br>
<br>
Thanks in advance.
				</div><div class="mdl-card--border"></div>