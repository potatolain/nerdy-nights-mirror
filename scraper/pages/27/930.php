<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Aug 31, 2017 at 8:26:43 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks for the reply. &#xA0;I used the nerdy nights tutorials for most of my learning thus far. &#xA0;Here is the code as it is after the change:<br>
&#xA0;
<div>.inesprg 1 &#xA0; ; 1x 16KB PRG code</div><br><br><div>.ineschr 1 &#xA0; ; 1x &#xA0;8KB CHR data</div><br><br><div>.inesmap 0 &#xA0; ; mapper 0 = NROM, no bank swapping</div><br><br><div>.inesmir 1 &#xA0; ; background mirroring</div><br><br><div>&#xA0;</div><br><br><div>;;;;;;;;;;;;;;;</div><br><br><div>;;;VARIABLES</div><br><br><div>.rsset $0000 &#xA0; &#xA0;;put variables starting at 0</div><br><br><div>buttons1 <span style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>re&quot;&gt;  &#xA0; .rs 1</div><br><br><div>gamestate<span style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>re&quot;&gt;  &#xA0; .rs 1</div><br><br><div>playerSpriteCount &#xA0;.rs 1</div><br><br><div>playerSpeed<span style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>re&quot;&gt;  &#xA0; .rs 1</div><br><br><div><span style="color:#FF0000;">playerDisplayFlags .rs 1</span></div><br><br><div>playerAnimationFrameNumber .rs 1<br>
<br>
The red line is the one that was moved. &#xA0;Prior to that, it was below the gamestate variable. &#xA0;I will do some more research tonight but it seems to have fixed the problem for now.<br>
<br>
Also, im new here is there a specific tag we are supposed to use for code examples?<br>
<br>
Edited: question about code</div>
				</div><div class="mdl-card--border"></div>