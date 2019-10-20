<div class="mdl-card__title"><strong>Vaevictus</strong> posted on 
		
			
				
				Aug 23, 2009 at 11:55:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Took me a while to find this.&#xA0; for NTSC roms, here&apos;s the period table.&#xA0; You can convert pitches to codes with it.<br><a href="downloads/missing/NotesTableNTSC.txt" target="_blank" original-href="http://www.freewebs.com/the_bott/NotesTableNTSC.txt">http://www.freewebs.com/the_bott/...</a><br>So, to play an E, 3rd octave... you&apos;d change that code from $0C9 to $152.<br>Specifically:<br>&#xA0;&#xA0;&#xA0; lda #$C9&#xA0;&#xA0;&#xA0; ;0C9 is a C# in NTSC mode<br>&#xA0;&#xA0;&#xA0; sta $4002<br>&#xA0;&#xA0;&#xA0; lda #$00<br>&#xA0;&#xA0;&#xA0; sta $4003<br>To:<br>&#xA0;&#xA0;&#xA0; lda #$52&#xA0;&#xA0;&#xA0; ;152 is a E3 in NTSC mode<br>&#xA0;&#xA0;&#xA0; sta $4002<br>&#xA0;&#xA0;&#xA0; lda #$01<br>&#xA0;&#xA0;&#xA0; sta $4003<br><br><br>I can&apos;t wait for the next section!&#xA0; <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"><br>
				</div><div class="mdl-card--border"></div>