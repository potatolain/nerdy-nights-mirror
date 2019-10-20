<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				May 31, 2014 at 2:08:39 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi all,
<br>
<br>I have few other doubts I need confirmation about.
<br>
<br>Screen shots of asm code and hex binary: it works, of course.
<br>
<br><a href="http://nintendoagemedia.com/users/21264/photobucket/2887D08E-C252-63B0-082B229C49B18A2F.png" target="_blank">http://nintendoagemedia.com/users...</a>
<br>
<br><a href="http://nintendoagemedia.com/users/21264/photobucket/2887DB52-9A59-155B-1965439D976051F8.png" target="_blank">http://nintendoagemedia.com/users...</a>
<br>
<br>#1. Line 47
<br>
<br>With 16KB of Code ROM, .bank 1 always starts at e000, correct?
<br>This is not a 6502 instruction, it is NESASM assembler specific, correct?
<br>It says to the assembler:
<br>- in the &quot;zone&quot; between e000 and ffff
<br>- go to fffa
<br>- and from there write the following addresses (xxyy as yy xx)
<br>correct?
<br>I mean, .bank 1 does not start at fffa as for the following .org; with 16KB of Code ROM it always starts at e000, whatever the following .org says. It is this correct?
<br>Also, it is this instruction (.bank) valid only for the NESASM assembler?
<br>
<br>#2. Lines 14-15
<br>
<br>The concept of setting up the stack still a bit foggy, any further feedback about it is welcome.
<br>
<br>#3. Hex Binary
<br>
<br>Starting at c000, the program bytes (except for the fffa-ffff data) end at c045 (with the 16 bytes of header not part of it): why all the other bytes are ff? why not 00? it is this important?
<br>Also, in the real time emulator hex editor the whole program is there twice, once from 8000 to bfff, and once from c000 to ffff: it is this the way Nes works whit only 16KB of Code ROM instead of 32KB?
<br>
<br>Thanks in advance to anyone has a bit of time to give some feedback, I&apos;m interested about it.
<br>
<br>I hope my English is understandable, and my questions not too silly. Also, I hope this is the correct thread to post those questions (by the way, how do you format lists in your posts?).
<br>
<br>Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
<br>
<br>- user
<br>
<br>@BunnyBoy (if you read this): interesting writings!
				</div><div class="mdl-card--border"></div>