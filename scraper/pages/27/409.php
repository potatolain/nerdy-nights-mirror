<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 30, 2014 at 4:07:51 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi all,<br>
<br>
I have a question I&apos;m wondering about just for teh sake of it.<br>
<br>
<strong>Can a NMI happen if the code from the previous NMI didn&apos;t reach a RTI yet?</strong><br>
<br>
My program has a flag to set the change of the background.<br>
This is used for example when a dialog has to be shown.<br>
<pre>In pseudocode:
NMI
If the flag is set:
0. disable $2001, only the rendering (not $2000!)
1. unset the flag (and do music stuff)
2. the &quot;set background routine&quot; uploads all the text &quot;glyphs&quot; background in $2007
3. RTI
If the flag is NOT set:
0. (unrelated to this: music stuff, joypad inputs detect and other quick stuff)
1. enable $2001
2. RTI</pre>
My question is: let say the &quot;set background routine&quot; takes more than 1/60th of a second to execute, since only $2001 (not $2000) is disabled, can in theory another NMI happen before the code gets to the RTI? If so, what happens then?<br>
Or instead the next NMIs will never happen if the running NMI loop didn&apos;t exit yet with an RTI?<br>
<br>
Thank you. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user
				</div><div class="mdl-card--border"></div>