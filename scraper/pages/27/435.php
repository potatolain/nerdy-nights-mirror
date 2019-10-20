<div class="mdl-card__title"><strong>farmerdwight</strong> posted on 
		
			
				
				Dec 7, 2014 at 11:28:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>farmerdwight</b></i><br>
		<br>
		Is it possible to take a .nes game file and extract the code so that it looks like the assembly code in the nerdy nights tutorial? I looked in the FCEUXD and the debugger looks similar to the assembly code because I see many opcodes but it&apos;s still quite different. I&apos;m trying to understand the relationship between these different files like .nes and .asm.</div>
	<br>
	Decompilation is a very complicated process I&apos;m afraid, and even if you manage to decompile the ROM, you&apos;ll still need to annotate it. However, there are a few decompiled NES ROMs out there, like SMB3, SMB, Metroid, and Secret Scout (The latter being interesting due to being the actual source code published by the programmer himself)</div>
Ok, so there is a lot of manual effort involved in decompiling a ROM? &#xA0;I downloaded the files that &quot;L&quot; posted at this site:<br>
<br>
<a href="http://forums.selectbutton.net/viewtopic.php?t=26956&amp;sid=1a883209e1ba63877bcd58c007bb63ae" target="_blank">http://forums.selectbutton.net/vi...</a><br>
<br>
which shows an annotated SMB assembly.<br>
<br>
Why is the iNES header in a seperate file (smb.hdr)? &#xA0;In the Nerdy Nights tutorials, the iNES headers are just the first lines in the code I thought or is that something different:<br>
<br>
<div>
	&#xA0; .inesprg 1 &#xA0; ; 1x 16KB PRG code</div>
<div>
	&#xA0; .ineschr 1 &#xA0; ; 1x &#xA0;8KB CHR data</div>
<div>
	&#xA0; .inesmap 0 &#xA0; ; mapper 0 = NROM, no bank swapping</div>
<div>
	&#xA0; .inesmir 1 &#xA0; ; background mirroring</div>
<br>
Another question I have is where are the levels stored (in SMB) like the exact layout of where each block is located? &#xA0;Are they in the .asm file somewhere?<br>
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>