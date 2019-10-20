<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Aug 13, 2017 at 7:47:19 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>S. P. Sour</b></i><br>
<br>
<br>
dlload:<br>
LDA Ldialogue,x<br>
STA $2007<br>
INX<br>
CPX #$5B ;The error can be seen when this value is increased beyond #$57. #$5B is what I used in the screenshot, but it&apos;s usually set to #$60.<br>
BNE dlload</div>
I&#xA0;<em>think&#xA0;</em>I see the issue here, at least initially- drawing upwards of 96 tiles in one frame is a little more than the NMI can handle. Here&apos;s a couple things you can do:<br>
<br>
First, you&apos;ll want to create some variables. You can use a 2-byte variable to keep track of the address of the PPU the &quot;printhead&quot; will print at next- load it to 2006 and increment it each print. then, keep a 1 byte variable to store into x that you can use to index into Ldialouge, which you can also increment.<br>
<br>
you can use these to easily either print one tile per frame or multiple tiles in a couple frames.&#xA0;<br>
<br>
an example of printing one tile per frame would look like this:<br>
<br>
LDA $2002<br>
LDA ppuPrintHead+1 ; HI of printhead location<br>
STA $2006<br>
LDA ppuPrintHead; LO of printhead location<br>
STA $2006<br>
...<br>
...<br>
dlload:<br>
LDX printIndex ;index of current character in string<br>
LDA Ldialouge, x&#xA0;<br>
STA $2007<br>
<br>
INC printIndex<br>
INC ppuPrintHead<br>
<br>
LDA ppuPrintHead ;check to see if we flipped the LO byte<br>
CMP #$00<br>
BNE .done<br>
INC ppuPrintHead+1 ;increment the HI byte<br>
...<br>
...<br>
<br>
Hope this helps. For your screen jumping problem, I think I&apos;d have to play around with the actual code. I remember something like that happening to me before, but I forgot how to fix it...<br>
<br>
EIDT: fixed a HI/LO mixup
				</div><div class="mdl-card--border"></div>