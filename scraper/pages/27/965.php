<div class="mdl-card__title"><strong>ubuntuyou</strong> posted on 
		
			
				
				Nov 7, 2017 at 10:01:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>pk space jam</b></i><br>
<br>
So I could use a little help, I was told that my code was doing most of it&apos;s logic in the NMI which is generally frowned upon, I&apos;m trying to rearrange the code as so that is not so, I managed to get the file to compile, but now lost my ability to move sprites, if anyone would be willing to help me grokk this out I would really appreciate it, Assembly is hard lol <a href="https://hastebin.com/wahulohivi.pl" target="_blank">https://hastebin.com/wahulohivi.pl</a></div>
<br>
<br>
<br>
Doesn&apos;t look like you&apos;re calling your subroutines to check for button presses in your forever loop. Anything you want done outside of NMI has to be called between FOREVER and JMP FOREVER.<br>
<br>
Also, in your NMI you&apos;ll want to push your A, X, and Y registers to the stack before doing anything else, then restore them all just before your RTI.<br>
<br>
<br>
<code>NMI:<br>
<br>
&#xA0;&#xA0;&#xA0; PHA<br>
&#xA0;&#xA0;&#xA0; TXA<br>
&#xA0;&#xA0;&#xA0; PHA<br>
&#xA0;&#xA0;&#xA0; TYA<br>
&#xA0;&#xA0;&#xA0; PHA<br>
<br>
&#xA0;&#xA0;&#xA0; ; do NMI stuff<br>
<br>
&#xA0;&#xA0;&#xA0; DEC sleeping ; set sleeping variable to #$00 so your main loop will run once<br>
<br>
&#xA0;&#xA0;&#xA0; PLA<br>
&#xA0;&#xA0;&#xA0; TAY<br>
&#xA0;&#xA0;&#xA0; PLA<br>
&#xA0;&#xA0;&#xA0; TAX<br>
&#xA0;&#xA0;&#xA0; PLA<br>
<br>
&#xA0;&#xA0;&#xA0; RTI</code><br>
<br>
<br>
Then in your FOREVER loop do:<br>
<br>
<br>
<code>FOREVER:<br>
<br>
&#xA0;&#xA0;&#xA0; INC sleeping<br>
.loop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; NMI will return in the loop with sleeping set to #$00<br>
&#xA0;&#xA0;&#xA0; LDA sleeping<br>
&#xA0;&#xA0;&#xA0; BNE .loop<br>
<br>
&#xA0;&#xA0;&#xA0; ; Call game logic subroutines here<br>
<br>
&#xA0;&#xA0;&#xA0; JMP FOREVER</code><br>
<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>