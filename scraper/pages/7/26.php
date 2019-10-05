<div class="mdl-card__title"><strong>themaincamarojoe</strong> posted on 
		
			
				
				Dec 17, 2009 at 3:25:10 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>How do we use the ReadController and the ReadControllerLoop to read the controller.&#xA0; According to the post, we need to write to the appropiate bit.&#xA0; So, for example, if I want one of my tiles to move up, I kow that I need to write to bit 3, or %00001000.&#xA0; </p><p style="MARGIN: 0px; FONT: 10px Monaco"><span style="LETTER-SPACING: 0px">bit:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; 7 &#xA0; &#xA0; 6 &#xA0; &#xA0; 5 &#xA0; &#xA0; 4 &#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0; 3&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;2&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; 1&#xA0;&#xA0;&#xA0;&#xA0; 0</span></p><p style="MARGIN: 0px; FONT: 10px Monaco"><span style="LETTER-SPACING: 0px">button: A &#xA0; &#xA0; B &#xA0; select start&#xA0; up &#xA0; down&#xA0; left right</span></p><p>I guess that if I wanted to read up I would use the following instruction.</p><p><font size="1">LDA #%00001000<br>STA button1</font></p><p>What I&apos;m confused about is where to write this?&#xA0; Do&#xA0;I use a JSR to hop to ReadControllerLoop and then write to button one?&#xA0; Before we used an instruction like this:</p><p><font size="1">ReadUp:<br>&#xA0;&#xA0; LDA $4016<br>&#xA0;&#xA0; AND #%00000001 <br>&#xA0;&#xA0; BEQ ReadUpDone<br>&#xA0;&#xA0; LDA $0200<br>&#xA0;&#xA0; SEC<br>&#xA0;&#xA0; SBC #$01<br>&#xA0;&#xA0; STA $0200<br>ReadUpDone:</font></p><p><font size="2">How do I combine these instructions to write to up?</font></p><p></p><p style="MARGIN: 0px; FONT: 10px Monaco"><span style="LETTER-SPACING: 0px"></span></p>
				</div><div class="mdl-card--border"></div>