<div class="mdl-card__title"><strong>Nallebeorn</strong> posted on 
		
			
				
				Jul 17 at 9:18:51 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					1) A full NES screen isn&apos;t actually square; its native resolution in 256x240 pixels. It always outputs in that resolution, on hardware and in emulators. The size of the visible area of the screen might differ depending on the TV and emulator configuration because of overscan, but the internal resolution if always the same.<br>
Anyway, 240 pixels vertically&#xA0;gives us just 30 rows of 8x8 tiles, but 32 columns. This is also the reason you want to clear OAM with $fe: as long as a sprite&apos;s Y value is larger than or equal to 240 ($f0), it will be off-screen and therefore invisible. The other sprite values (tile ID, attributes and even the X position) don&apos;t actually matter.<br>
2) &amp; 3) A full screen of tile indices takes up 960 bytes (32x30, not 32x31). Conveniently, attribute data for a full screen takes up exactly 64 bytes, so we&apos;re back at 1024 bytes in total. So if you just want to copy a full screen of uncompressed background data, you can very easily copy nametable and attribute data in the same 256x4 nested loop &#x2013; just makes sure you only have 30 rows worth of tile indices, and then put the attribute data directly after that in ROM.&#xA0;<br>
<br>
EDIT: Didn&apos;t see KHAN&apos;s post there, so sorry for duplicate information&#xA0;<span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
&#xA0;
				</div><div class="mdl-card--border"></div>