<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				May 18, 2013 at 12:02:05 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I mostly remember &quot;Load&quot; and &quot;Store&quot; as in you have to &quot;Load&quot; something to change it, and when you&apos;re done, you &quot;Store&quot; it when you&apos;re done. Like when you go grocery shopping. You store everything away in the cabinets and walk away. I don&apos;t really know how else to explain it. Just give it some time. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
I think a lot of people that are learning to program are getting hung up on math. I have no idea what %01010101 is in decimal. I have no idea what $E4 is in decimal. When I need to know these things, I open up the Windows calculator, turn it to Hex or Bin, type in the value, then change it to Dec and it converts it for me. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
The main thing you&apos;re going to have to understand is the various values of addresses on the Nintendo, because you&apos;re going to be manipulating them over and over and over.<br>
<br>
The nametable you&apos;re going to be using 95% of the time is $2000. The sprites you&apos;re using will be starting at $0200 (or $0300 depending on where you put them.) The palette is at $3F00. All of these addresses are just things you&apos;re going to have to ingrain in your memory, because that&apos;s the stuff you&apos;re going to be changing.<br>
<br>
Other than that, the main thing you&apos;re going to have to learn is how certain things are changed and when you can change them. Moving a sprite across the screen can be done at anytime. Changing a tile of the background can only be done in a very short time called Vblank, which sounds complicated, but there&apos;s a specific location in your assembly document where all this stuff goes. Eventually if you try to do too much there, it will run out of time and things start blowing up, so you have to be very careful.<br>
<br>
I generally don&apos;t take notes, but I do have to open up some of the Nerdy Nights tutorials every now and then to remind myself on how to do certain things.<br>
<br>
I build my entire games with only these commands haha.<br>
<br>
LDA<br>
STA<br>
CMP<br>
BEQ<br>
BNE<br>
BCC<br>
BCS<br>
LDX<br>
CPX<br>
TAX<br>
TXA<br>
LDY<br>
TAY<br>
TYA<br>
CPY<br>
ADC<br>
SBC<br>
JSR<br>
JMP<br>
<br>
Well, I guess that&apos;s more commands than I thought.&#xA0; Still seems simple! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>