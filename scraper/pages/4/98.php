<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Apr 27, 2017 at 4:43:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>user</b></i><br>
		<div class="FTQUOTE">
			<i>Originally posted by: <b>Piputkin3</b></i><br>
			<br>
			I will ask another question, can you determine the sprite rate of less than 1?</div>
		<br>
		<br>
		Yes, using a further byte of RAM.<br>
		Example: you store somewhere (e.g. variable FOO) the value HEX00.<br>
		then each NMI you add HEX40 to that variable.<br>
		each four MNIs the variable will reach &quot;HEX100&quot; (which is HEX FF+1 ) reset to zero and trigger the carry flag.<br>
		When the carry flag is triggered, you advance by 1 pixel.<br>
		So, you advance by 1/4 of pixel each NMI.<br>
		tell me if this helps. <span class="sprites_emoticons absmiddle" id="emo_smile"> </span></div>
	I think this may be better touched in the 16-bit math section further a long in the tutorials. This is only lesson #4. <span class="sprites_emoticons absmiddle" id="emo_wink"> </span><br>
	<br>
	But yes, that is a shorter way to do this than what I posted if you are wanting to save cycles and RAM space.<br>
	&#xA0;</div>
<br>
<br>Indeed. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
<br>What you say makes perfect sense. And nice from you to write a full routine, I was too lazy. <span class="sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>
<br>
<br>In the end, I think that providing Piputkin3 two different solutions, won&apos;t hurt! <span class="sprites_emoticons absmiddle" id="emo_happy">&#xA0;</span>
				</div><div class="mdl-card--border"></div>