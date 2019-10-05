<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Feb 9, 2010 at 5:14:09 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>rizz</b></i><br><br>I&apos;m a latecomer for the nerdy nights stuff, but maybe someone can answer my question(s).  Up until this point, I&apos;ve been using NESASM3 to follow along on the tutorials, but I want to switch over to asm6.  I attempt to code the conversion, replacing a few lines of code, but for some reason, I&apos;m getting a solid gray screen when I run the .nes file that was made from asm6.  As far as I can tell, I just need to replace the header with the ines header, and use .base directives in the place of .bank.  At this point, it&apos;s a bit frustrating, so I&apos;d really appreciate it if someone could explain the specific code changes to make.</div><br><br>1) Remove all the .inesxxx stuff and specify your 16-byte ines header at the top like this:<br><br><span style="font-weight: bold;">.byte &quot;NES&quot;,$1a</span><br style="font-weight: bold;"><span style="font-weight: bold;">.byte $01 ; 1 PRG-ROM block</span><br style="font-weight: bold;"><span style="font-weight: bold;">.byte $01 ; 1 CHR-ROM block</span><br style="font-weight: bold;"><span style="font-weight: bold;">.byte $00 ;</span><br style="font-weight: bold;"><span style="font-weight: bold;">.byte $00 ; </span><br style="font-weight: bold;"><span style="font-weight: bold;">.byte 0,0,0,0,0,0,0,0</span><br><br>2) remove the lines .bank 0, .bank1 and .bank2 (asm6 doesn&apos;t use them)<br><br>3) replace .org $c000 with: <span style="font-weight: bold;">.base $c000</span><br><br>4) remove .org $e000 (you don&apos;t really need to make a division here.&#xA0; If you really want to you can replace .org $e000 with <span style="font-weight: bold;">.pad $E000</span> followed by a <span style="font-weight: bold;">.base $E000</span>)<br><br>5) replace .org $FFFa with:&#xA0;<span style="font-weight: bold;"> .pad $FFFA</span><br><br>5) replace .org $0000 with:&#xA0; <span style="font-weight: bold;">.base $0000</span><br><br>I think those are all the changes I made to get controller.asm to assemble with asm6.&#xA0; <br>
				</div><div class="mdl-card--border"></div>