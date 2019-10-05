<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Apr 27, 2017 at 3:57:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Piputkin3</b></i><br>
	<br>
	I will ask another question, can you determine the sprite rate of less than 1?</div>
<br>
<br>Yes, using a further byte of RAM.
<br>Example: you store somewhere (e.g. variable FOO) the value HEX00.
<br> then each NMI you add HEX40 to that variable.
<br> each four MNIs the variable will reach &quot;HEX100&quot; (which is HEX FF+1 ) reset to zero and trigger the carry flag.
<br> When the carry flag is triggered, you advance by 1 pixel.
<br>So, you advance by 1/4 of pixel each NMI.
<br>tell me if this helps. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>