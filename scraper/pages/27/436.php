<div class="mdl-card__title"><strong>Baka94</strong> posted on 
		
			
				
				Dec 8, 2014 at 4:06:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>farmerdwight</b></i><br>
	<br>
	Ok, so there is a lot of manual effort involved in decompiling a ROM? &#xA0;I downloaded the files that &quot;L&quot; posted at this site:<br>
	<br>
	<a href="http://forums.selectbutton.net/viewtopic.php?t=26956&amp;sid=1a883209e1ba63877bcd58c007bb63ae" target="_blank">http://forums.selectbutton.net/viewtopic.php?t=26956&amp;sid...</a> <br>
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
	&#xA0;</div>
<br>
I guess the iNES header is in separate file just to make things easier to read. It&apos;s better to have the code broken in smaller parts than have everything in one .asm file (especially in large games). It makes reading and editing the code easier.<br>
<br>
Also, for your another question:<br>
I don&apos;t think the level data is in the .asm file. Even if they are, they are probably compressed to save space. I don&apos;t know how SMB compresses levels, but I&apos;m farily sure it goes along something like this:&#xA0;8x8 tiles &gt; Metatiles &gt; Screens &gt; Levels<br>
<br>
If the level data is in the .asm file, it&apos;d probably look something like this<br>
<br>
<code>World1_3: &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;; Lable indicating stage<br>
&#xA0;.db $04,$05,$06</code><br>
<br>
(The .db is probably longer and there may be multiple lines of it)<br>
By the values of the .db, the level decompression code starts to decode the level data and then write it in the PPU to draw it on screen.<br>
<br>
I&apos;m not expert in these things, but I believe that this is how just about every NES game handles level data.
				</div><div class="mdl-card--border"></div>