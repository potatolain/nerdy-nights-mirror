<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Feb 24, 2010 at 9:48:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks MetalSlime.&#xA0; I&apos;ve been reading the word &quot;metasprite&quot; dropped here and there on the forums recently.&#xA0; But only now after reading your description do I understand what they actually are.<br><br>I&apos;m confused, however, as to how one goes about coding something like that.&#xA0; Is it done perhaps by storing the cooresponding addresses in a db directive?&#xA0; For example, say we have a 4tile x 4tile metasprite:<br><br>Metasprite1y:<br>&#xA0; db. $0200, $0204, $0208, $020C<br>..then when I want to move it UP...<br>&#xA0; INC Metasprite1y<br>?<br><br>Or can those addresses be grouped together in a constant or variable?&#xA0; I&apos;m just getting my feet went on directives and am having a really hard time finding out exactly what they do.&#xA0; For example, I&apos;m still completely clueless on what .word does (or .dw, which I understand is the same thing from reading the NESASM usage doc).&#xA0; As for constants or variables, I&apos;m kind exploring the different uses of those, as well, testing out different things and seeing what makes the assembler yell at me.&#xA0; :-)<br>
				</div><div class="mdl-card--border"></div>