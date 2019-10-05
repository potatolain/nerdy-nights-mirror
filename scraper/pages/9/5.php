<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jul 1, 2014 at 7:09:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Seems like &quot;advanced&quot; bankswitching is not that hard to pull off. This might be interesting for the Mystique multicart I&apos;d like to make at some point!<br>
However, MMC1 stuff is still kinda new to me, and before trying to program my own MMC1 program, I&apos;d like you to clarify a few things for me.<br>
<br>
What I understand about the shift register use is that only the first bit is used (Kind of like the controller). You have to do an LSR to get the previous bits to this particular bit<br>
(Ex: 0001001[1] C0 - Only the byte in the brackets is read, then as you LSR, the bytes you wanna read go to the right, like this - 0000100[1] C1)<br>
Also, if I wrote this to the config at $8000, it should be 1 - two 4KB CHR banks, 0 - 32 KB PRG switch at once, 0-Not used due to 32KB swap, 11-Horizontal Mirroring<br>
Is that how it works?<br>
<br>
However, I don&apos;t really understand why you have to write to the registers in $XXXX-$YYYY ranges... Aren&apos;t those ranges used for the PRG? Thanks for enlightening me on that <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>