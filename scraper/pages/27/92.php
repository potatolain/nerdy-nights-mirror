<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Dec 7, 2013 at 11:49:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	One question that has been eluding me for a while has been the practical difference between CHR RAM and CHR ROM. I have read through the NESDEV material on the subject, and also several threads, but no one seems to be too interested in breaking down the differences in practical terms, i.e. how they actually affect game design and for which types of games each is best suited. Instead the material seems to focus more on the exceptions to the rule and fancy technical effects (which are interesting, but way down the line for me). I understand that one&apos;s choice can be made for them through the choice of a mapper, but in the case of the MMC1 both options exist (looking at INL&apos;s flashable options). So, for those who have done some programming, what has your experience been? What influenced your decision, and what benefits/limitations came with your choice? Also, if you have any recommendations for someone looking to do an overhead adventure game with a lot of tile data, I would be curious to know your thoughts on this as well<br>
	<br>
	Lastly, when choosing a flashable board for testing purposes, is it all right to have too high of specs? Would the best bet for development be to get the largest board possible, or will this cause complications? The answer may be obvious, but I thought that I would check before purchasing (assuming that I can make a decision on the CHR RAM/ROM issue).<br>
	<br>
	Thanks for any and all help!</div>
<br>
CHR-RAM can be written to as well as read from, whereas CHR-ROM is read only and all you can do is swap it out, usually in 4kb sized banks (I believe there are smaller and larger configurations of chunks that can be swapped out, as well).<br>
<br>
I like CHR-RAM for my games because it allows maximum deduplication of graphics data. Say you have some background graphics for a given area or level, and then you proceed to a new area or level and most of the graphics are the same but a couple of tiles are different. With CHR-ROM, unless the bank swapping granularity of your mapper is sufficiently high this will force you to duplicate a lot of your graphics just so you can show those couple of new tiles. With CHR-RAM, you can simply keep all these chunks of background data separate, and load them in different combinations based on what area or level you are loading up. The same thing applies for sprites, in fact this application is probably much more commonly used for sprites than for background data.<br>
<br>
For most existing mappers, typically CHR-ROM was used for background animation because of the bank swapping capability. But with new mappers being developed by bunnyboy and others, we can now bankswitch with CHR-RAM, which essentially gives us the best of both worlds. To me, I cannot at the moment envision any real benefits of CHR-ROM over CHR-RAM. I think CHR-RAM is probably the best option for homebrew game development. I have more experience with it though so I&apos;ll let others comment on any details I may have left out.
				</div><div class="mdl-card--border"></div>