<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Sep 19, 2015 at 3:02:29 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m making an <strong>MMC3</strong>&#xA0;game with an IRQ-triggered status bar on the bottom. I made my routine and it works on FCEUX. However other emulators don&apos;t seem to be very keen on that routine. Anyone knows why it&apos;s wrong?<br>
Here is the IRQ triggering code in my NMI and my IRQ handler.<br>
<br>
<span style="font-family:courier new,courier,monospace;">&#xA0; LDA IRQFlag &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;This is the code that&apos;s in my NMI handler. Basically, it checks if the game needs IRQs with the IRQFlag variable<br>
&#xA0; BEQ .noirq &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;then it does IRQ stuff like it&apos;s explained here - <a href="scraper/files/mmc3irqs.txt" target="_blank">http://bobrost.com/nes/files/mmc3...</a><br>
&#xA0; STA IRQOFF &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;IRQLATCH&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;= $C000<br>
&#xA0; LDA #$BF &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;IRQRELOAD&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;= $C001<br>
&#xA0; STA IRQLATCH &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;IRQOFF&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;= $E000<br>
&#xA0; STA IRQRELOAD &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;IRQON&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;= $E001<br>
&#xA0; STA IRQOFF<br>
&#xA0; STA IRQON<br>
.noirq<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;More code here...<br>
<br>
IRQ: &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;This is my IRQ handler. Right now, it just scrolls the status bar with the &quot;ticker&quot; variable, and bankswitches CHR<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;Works on FCEUX, doesn&apos;t work on any other emulator<br>
&#xA0; PHA &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;(Don&apos;t have a flashcart to test it on...)<br>
&#xA0; TXA<br>
&#xA0; PHA<br>
&#xA0; TYA<br>
&#xA0; PHA<br>
<br>
&#xA0; LDX #$00<br>
.loop<br>
&#xA0; INX<br>
&#xA0; CPX #$0A<br>
&#xA0; BNE .loop<br>
<br>
&#xA0; NOP<br>
<br>
&#xA0; LDA #%10000000<br>
&#xA0; STA BANKSWAP<br>
&#xA0; LDA #%00010000<br>
&#xA0; STA BANKDATA<br>
<br>
&#xA0; LDA ticker<br>
&#xA0; STA $2005<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2005<br>
<br>
&#xA0; LDA #%10110000<br>
&#xA0; STA $2000<br>
<br>
&#xA0; STA IRQOFF &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;;It&apos;s supposed to acknowledge the IRQ here.<br>
<br>
&#xA0; PLA<br>
&#xA0; TAX<br>
&#xA0; PLA<br>
&#xA0; TAY<br>
&#xA0; PLA<br>
<br>
&#xA0; RTI</span><br>
<br>
Thanks for your help guys <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>