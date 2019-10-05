<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 30, 2014 at 4:57:29 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	<strong>So, I tried to change the palete by changing the values in .db, but it just came up a black screen.</strong> (cut...)</div>
<br>
I&apos;m not sure this will help, however, I&apos;ll try to help. All this is AFAIK.<br>
<br>
You have two palettes of 16 values: one palette is for the sprites, the other is for the background.<br>
<br>
Each palette is composed by 4 sub-palettes of 4 values each, the first value (of the four values) of each sub-palette is the same <em>transparency </em>color, which is common in all the (4 x 2 palettes) eight sub-palettes.<br>
<br>
<img align alt border="0" hspace="4" src="images/missing/07321682-F930-22C9-979A2CCF3C1B635F.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/07321682-F930-22C9-979A2CCF3C1B635F.png"><br>
<br>
This is the sprite palette of <em>Swords and Runes</em>. As you can see, each sub-palette has the same black color in its first <em>slot</em> (I don&apos;t know what is the best word to use, I mean the first hex value of each sub-palette); then three other colors. Note that you cannot mix these colors: for instance, you can&apos;t have in your game a sprite with a yellow, a green and a blue color using this palette, since these colors are not in the same sub-palette.<br>
<br>
So, a single 8x8 sprite, can only use three colors from a specific sub-palette, plus the <em>transparency </em>color.<br>
<br>
I hope this helps a little, but I&apos;m not too sure this is what you asked for.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
<strong>Edit</strong>: misspelling.
				</div><div class="mdl-card--border"></div>