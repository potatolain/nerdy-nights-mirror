<div class="mdl-card__title"><strong>derekb</strong> posted on 
		
			
				
				Sep 3, 2011 at 8:24:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m having a trouble doing palette cycling and was wondering if anyone could help, when I change a palette color my entire background winds up pushing itself down for some reason, my lil code snip is
<br>
<br>[code]
<br>   lda	 $2002
<br>   lda   #$3F
<br>   sta   $2006
<br>   lda   #$00
<br>   sta   $2006
<br>   lda   #$0F
<br>   sta   $2007
<br>   RTS
<br>[/code]
<br>
<br>before:
<br>
<br><img src="images/missing/001.png" original-src="http://bombsomedodongos.com/a/images/001.png">
<br>
<br>after code runs:
<br>
<br><img src="images/missing/002.png" original-src="http://bombsomedodongos.com/a/images/002.png">
<br>
<br>(the boxes on top are just reference points to see whats happened)
<br>
<br>if anyone has an idea off top of their head of what would cause this please lmk <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>