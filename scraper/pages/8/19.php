<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Apr 1, 2014 at 8:12:37 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	Is there a correct time to use #LOW(background) instead of #$00, or are they the same?</div>
In this case it doesn&apos;t matter much, because the code expects the lowbyte to be $00, otherwise it doesn&apos;t work. But it would be preferable to use LOW(background) for clarity. In some assemblers you can define an ASSERT, so that if &quot;background&quot; is moved to some other place and is no more aligned to a 256-byte page, the code would no longer compile (which lets you know that there&apos;s a problem and you have to fix it).<br>
<br>
LOW() and HIGH() are NESASM specific operations, other assemblers most often use &lt;background and &gt;background for the same purpose (&quot;&lt;&quot; = low, &quot;&gt;&quot; = high).<br>
<br>
				</div><div class="mdl-card--border"></div>