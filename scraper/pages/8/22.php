<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 2, 2014 at 1:51:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Mega Mario Man</b></i><br>
		<br>
		Thanks 3GenGames and thefox! It makes a bit more sense now. Don&apos;t have the full grasp of the [] yet, but what 3Gen mentions make sense to me.</div>
	Here&apos;s an example:<br>
	<br>
	Let&apos;s say the memory (RAM) is laid out as follows:<br>
	<pre>Address    Value
-------    -----
$0010      $12
$0011      $34
$0066      $78
$3468      $9A</pre>
	Let&apos;s also start with <strong>Y = $56</strong> for the sake of the example.<br>
	<br>
	Now, <strong>LDA $10,Y</strong>&#xA0;would load A from the address <strong>$10+Y = $10+$56 = $66</strong>, so <strong>A = $78</strong>.<br>
	<br>
	If you do <strong>LDA [$10],Y</strong>, 6502 first fetches a 16-bit address from memory at <strong>$10</strong> and <strong>$11</strong>. The address, in this case, is <strong>$3412</strong> (6502 is little-endian, meaning the low byte of address is stored first in memory). It then takes that address and adds Y to it. Result is <strong>$3412 + Y = $3412 + $56 = $3468</strong>. Finally, it fetches the byte from this address, so in this case, <strong>A = $9A</strong>.<br>
	<br>
	Note that even though you can use a 16-bit address with the&#xA0;<strong>LDA aaaa,Y</strong> addressing mode, <strong>LDA (aa),Y</strong>&#xA0;only accepts 8-bit addresses (in other words, the address must be on the zero page).<br>
	<br>
	Also note that many other assemblers use the notation <strong>LDA ($10),Y</strong> for the exact same thing that is&#xA0;<strong>LDA [$10],Y</strong>&#xA0;in NESASM.<br>
	<br>
	Finally note that names like <strong>pointerLo</strong>, <strong>pointerHi</strong>, <strong>background</strong>, etc. are just fancy names for memory addresses to make the code easier to write and understand. In this case, you could create symbols like&#xA0;<strong>pointerLo=$10</strong> and <strong>pointerHi=$11</strong>, but I left them out to make the example easier to grasp.</div>
The pointers I get, I have used them in other languages. In the case of #HIGH(background), I wasn&apos;t for sure if background was a term that NES 6502 knew itself or was it actually refering to the subroutine holding the background data.<br>
<br>
I like your example showing the difference betweem LDA [$10],Y and LDA $10,Y. Visualizing the results is a perfect way to explain this. In fact, I really don&apos;t understand a lot of the tutorials until I dig into the source code from the tutorial and change values. Then I can see the results of what I just changed in the emulator. That&apos;s when the light bulb turns on!<br>
<br>
&apos;m very much a visual learner as opposed to reading. Seeing the code on screen and reading the explanations of what it does confuses me. Actually tinkering with the code and checking the results is where I learn the most.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>