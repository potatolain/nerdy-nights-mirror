<div class="mdl-card__title"><strong>Broke Studio</strong> posted on 
		
			
				
				Jun 30, 2016 at 1:40:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					With NESASM, it seems that you have to use LOW(dialog00) and HIGH(dialog00) (maybe with a # before low/high, I never used NESASM).<br>
<br><br>
So you&apos;ll have one table for the low byte address of your label (here dialog00 for example) and on table for the high byte address.<br>
Using this method you can address 256 labels instead of 128 with &apos;word&apos;.<br>
<br><br>
Of course it will eat more rom space.<br>
<br><br>
As SoleGooseProductions said, you can also use sub-tables depending on your level / chapter or whatever you call this.<br>
<br><br>
Example :<br>
<blockquote>
level1Dialogs:<br>
    .word cutSceneDialog00,cutSceneDialog01<br>
<br><br>
level2Dialogs:<br>
    .word cutSceneDialog00,cutSceneDialog01<br>
<br><br>
etc ...
</blockquote>
You can have up to 128 dialogs per level with this method.<br><br>But you can also add the low/high method and have 256 dialogs per level (or whatever)<br><br>Example :<br><br><blockquote>
level1DialogsLo:<br>
    .byte LOW(level1Dialog00),LOW(level1Dialog01)<br>
<br>
level1DialogsHi:<br>
    .byte HIGH(level1Dialog00),HIGH(level1Dialog01)<br>
<br>
etc ...
</blockquote><br><br><br>
If it&apos;s not clear, tell me and I&apos;ll try to be clearer <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>