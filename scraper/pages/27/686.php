<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Oct 29, 2015 at 11:17:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					ASL five times is *32 indeed. However, you need 16-bit math there, as you easily get out of 8-bit number limits. I.e. 10*32=320, too much to hold in a byte.
<br>
<br>Also, it is not necessary to divide playery by 8 then multiply by 32, you can just cut off the lower three bits with and #$f8, then multiply by 4, i.e. do two 16-bit ASLs. Alternatively, do two 16-bit ASLs on playery, then cut the bottom five bits with and #$c0.
<br>
<br>To understand it better think about the numbers as binary. All the math here is just about shifting and omiting some bits.
				</div><div class="mdl-card--border"></div>