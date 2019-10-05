<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Sep 3, 2013 at 3:26:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Tommy The Cat</b></i><br>
	<br>
	Question: The first table above shows a layout of the various addresses and what they are for. The second table goes into further detail for $0000 thru $3FFF and shows $2000 thru $23C0 as being a name table of 30x32 tiles.<br>
	<br>
	1) What exactly is a name table? (I&apos;m not a programmer)<br>
	<br>
	2) How come later on in the tutorial specific values/settings are stored in the low $2000&apos;s? These don&apos;t seem to be related to tiles.</div>
<br>
1) A name table is basically the background for one full screen.<br>
<br>
2) The name table starting at $2000 is in the PPU, the values written to the low $2000&apos;s are in the CPU. You can&apos;t write directly to the PPU, or read from it.<br>
<br>
				</div><div class="mdl-card--border"></div>