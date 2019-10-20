<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 16, 2014 at 9:16:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	Is there a cleaner way to do this? I am messing with the Power Pad. Basically, I want to utilize the &quot;buttons pressed&quot; code so if the button is stepped on, it only registers as 1 press and not a continual press.<br>
	<a href="http://pastebin.com/64rKimJe" target="_blank">http://pastebin.com/64rKimJe</a></div>
<br>
This is pretty much what my program does for combos: save the first input, don&apos;t save other inputs until the button was relsased (old button == 00) in previous frames.<br>
So A + A is: A, release, A.<br>
And L + R is: L (don&apos;t take another L in the next frames if L was not released), release, R.<br>
<br>
I don&apos;t know if this is the best practice, it is just the one I use too.<br>
<br>
- Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
				</div><div class="mdl-card--border"></div>