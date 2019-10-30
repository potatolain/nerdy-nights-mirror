<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Apr 22, 2010 at 12:19:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Metalslime, as always, you sir are the man!  Thanks for the suggestions, especially number 3.  I noticed in skeleton.asm and a lot of other stuff I&apos;ve been looking at that drawing buffers are typically turned on and off in case there&apos;s other stuff that needs to be drawn.&#xA0; I was wondering how to do that.  Now I know, so thanks!
<br>
<br>I didn&apos;t even consider number one, but now I get exactly what terminators are to be used for.  Very nifty!  Number two took me a minute but I started plugging in the numbers to my programming calc and see how it works now.  I haven&apos;t played around too much yet with using flag bits instead of flag bytes, but am gradually seeing how they work.  Basically what it seems I need to do is add a BIT test in the part where it&apos;s reading from background.i and use an AND to read from bit 7.  If bit 7 is one, jump to RLE, if it&apos;s 0, write the matatile into RAM and jump to next byte.  That&apos;s pretty cool!  Obviously this means you can&apos;t have any more than 128 metatiles on any one list, because after $7F (decimal 127) the test bit for RLE would always be set and you&apos;d always jump to RLE.  How do you usually get around this?  Actually, have you ever needed to in the first place?  Upon thinking about it it seems that&apos;s a lot of metatiles, but then this demo is pretty simple and it uses 25, so I&apos;m guessing the number can add up pretty quick.  Do you simply jump to different metatile indexes if the number gets too high?
<br>
<br>And OMG, number 4!  I&apos;m slamming my head into my desk right now!  You know I actually spent time writing a block of code to increment by 32 for the addresses?  It didn&apos;t work, so I came up with that hi_address, lo_address etc scheme.  If I&apos;d just looked at Deskin&apos;s technical doc and realized what you said here earlier I would have saved myself so much time.  It&apos;s right there in Appendix B in the table for register $2000 &quot;Bit 2 - Specifies amount to increment address by, either 1 if this is 0 or 32 if this is 1.&quot;  It&apos;s undoubtedly been written in the other tuts too but I foolishly ignored it.  Raarrggghh!!!  Oh well, painful lesson learned.  :-)
<br>
<br>So anyway, yeah, I&apos;m going to work these suggestions in.&#xA0; Thanks again for the help!&#xA0; As always, it&apos;s much appreciated.<br>
				</div><div class="mdl-card--border"></div>