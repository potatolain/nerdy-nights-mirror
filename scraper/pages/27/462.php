<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Dec 18, 2014 at 5:35:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	I&apos;m not really sure what&apos;s wrong. I see that when you do the SEC/SBC Scroll, you use BCC and BCS, not the same. Not sure if that&apos;s intentional. For me, if I run across a bug I can&apos;t find, I&apos;ll just delete the routine and re-write it. Usually works and is faster than chasing down a stupid bug.<br>
	<br>
	I might be looking at it wrong, but wouldn&apos;t the &quot;ADC #$10&quot; at the bottom be &quot;ADC #$04&quot; if you&apos;re looking for the next sprite?<br>
	<br>
	<br>
	<br>
	A couple suggestions:<br>
	<br>
	Use the local references, the period before the address, in all things that aren&apos;t routines. Like your &quot;SetNT1&quot;, &quot;SetNT0&quot;, &quot;NoHide&quot;, etc. This makes it a lot easier to avoid using the same &quot;address&quot; twice and keeps it simple cause you know anything without a period is a routine.<br>
	<br>
	Next, on the sprite references, you should consider using something like &quot;Sprite_RAM&quot; for $0224 and &quot;Sprite_RAM+3&quot; for $0227. If you ever realize, oh fuck, I have need sprite zero for something, or oh ball sack, I need 2 more bullets in my bullet routines and you need to add them in, you&apos;ll be forever chasing down these hard-coded references. If you have &quot;Sprite_RAM = $0224&quot; and you need to insert one, you only have to change it to &quot;Sprite_RAM = $0228&quot; not 1000 times throughout your entire program.</div>
<br>
Thanks for the tips, this will definitely help me for my games. Also, I managed to fix the glitch (<br clear="all"><div class="col-md-6"><div class="embed-responsive embed-responsive-16by9"><iframe width="500" height="280" frameborder="0" src="https://www.youtube.com/embed/P3ALwKeSEYs" allowfullscreen></iframe></div></div><br clear="all">) by condensing the routine and adding a small check for when you&apos;re on the spot where the glitch was occuring. It works fine now.
				</div><div class="mdl-card--border"></div>