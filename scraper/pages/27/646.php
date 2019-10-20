<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 6, 2015 at 9:50:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	I&apos;ve been wondering about this some too. What are the pros/cons of using a fixed bank versus not?</div>
I&apos;d say that using a fixed bank is slightly more convenient. You don&apos;t have to worry about duplicating code/vectors/etc. The downside is that part of the address space is &quot;wasted&quot; on data you cannot change. Depending on the mapper and the game this may or may not be a big deal.<br>
<br>
The upside of using 32 KB banking is that you get access to a big chunk of memory at once. The downside is that if your data (and the code that operates on the data) doesn&apos;t fit within the 32 KB, you&apos;re going to have problems. Another downside is the need to duplicate code, as mentioned.<br>
<br>
DPCM sample playback can be a problem for 32 KB banking as well. Since the DPCM sample data needs to be available at all times, it would need to be duplicated in all banks. May or may not be a problem depending on how many samples there are and how large they are. For mappers with a 16 KB fixed bank (like UxROM) the DPCM samples would have to fit within the fixed bank, so that&apos;s another restriction.<br>
<br>
Mappers that have an 8 KB fixed bank (e.g. MMC3, MMC5, FME-7, VRC6) tend to be the most flexible, since they usually have multiple switchable banks available. Unfortunately these mappers are also more expensive.
				</div><div class="mdl-card--border"></div>