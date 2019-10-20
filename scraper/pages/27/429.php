<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 4, 2014 at 10:56:39 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
	<br>
	And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.</div>
I was thinking exactly about these two optimizations (divide the &quot;circle&quot; in a multiple of 2, and do a LSR on bigger distances) after posting, but I wasn&apos;t even sure I gave a good advice in the beginning so I didn&apos;t bother editing! Thank you for confirming me that I was somehow on the good track, after all!<br>
<br>
- user<br>
<br>
<strong>Edit</strong>: misspelling.
				</div><div class="mdl-card--border"></div>