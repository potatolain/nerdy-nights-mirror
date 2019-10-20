<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 20, 2017 at 10:47:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
<br>
from what I understand, $4013 is the length of the sample- 15 bytes.&#xA0;</div>
Writing $0F to $4013 means it will play 241 bytes, not 15. &#xA0;The length of the sample in bytes is set by register $4013 (length = %LLLL.LLLL0001) -&#xA0;&#xA0;<a href="http://wiki.nesdev.com/w/index.php/APU#DMC_.28.244010-4013.29" target="_blank">http://wiki.nesdev.com/w/index.ph...</a> &#xA0;So you got the start address correct but not enough data.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>