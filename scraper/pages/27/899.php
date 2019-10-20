<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 2, 2017 at 8:24:00 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	Logically it makes sense. Take the background completely out of the question, what happens? Sprite $0200 with attr $20 will cover sprite $0205 with attr $00 with a transparent background. Populating the the background with non-transparent tiles after the fact doesn&apos;t change the sprite priority. 2 completely different routines.</div>
<br>
Yep, this is pretty much what our tests seem to prove. Thanks for wording it out in proper English. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<br>
I, honestly, before testing, had no clue if this was the logical sequence, or the opposite one (i.e. first determine which sprite pixels are covered by not transparent background pixels, and then afterwards put sprite priority into play).<br>
<br>
Also, I assume that the test ROM I attached above is quite reliable to test this out, and the source (well, in my weird alien asm dialect, sorry about that) is available to check out what it does. However, if someone think that a better test should be made, be my guest! <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<br>
However, this is really good to know for me, since I like to use sprites a lot, and I use a lot the feature of covering them by background, and the fact that an high priority sprite &quot;under background&quot; with the attribute bit 5 set can work as a mobile immediate &quot;cast shadows filter&quot; over other sprites, no matter if &quot;above background&quot;, it is a nice little trick to know about! <span class="sprites_emoticons absmiddle" id="emo_wink">&#xA0;</span><br>
<br>
Edit: misspelling, minor correction to a couple of sentences.
				</div><div class="mdl-card--border"></div>