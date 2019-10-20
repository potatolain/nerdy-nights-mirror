<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Mar 29, 2016 at 5:18:47 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>compile_6502</b></i><br>
<br>
OK, I had read about two&apos;s complement, but I haven&apos;t fully understood it yet. &#xA0;Appreciate the response!</div>
<br>
Hope this help digging into the concept.<br>
<br>
Put any value &quot;x&quot; into the accumulator. Subtract 01.<br>
Again, same value &quot;x&quot; into the accumulator, add FF.<br>
Same result. Hence you can use FF like if it was -01.<br>
<br>
Add FE or subtract 02: again, same result. And so on going up in positive, or down in negative.<br>
<br>
Add 80 (Hex, dec 128) or subtract 80: same result, in this case is consedered -128 in dec rather than +128.<br>
I&apos;m not too sure why, but I think there are few reasons:<br>
00 is positive programming wise, so the opposite, 80, must be negative;<br>
00 is positive programming wise, and that makes 128 positive values, to make 128 negative ones you need 80 to be negative;<br>
80 (bin 10000000) has the bit7 set, hence makes it logic to be a negative value like all the others with bit7 set;<br>
<br>
Values 00 (positive) and 80 (negative) are a bit tricky to handle, for the rest once you get the concept it makes a lot of sense.<br>
<br>
And like TheFox says, you decide the range of your values: 00 to FF can be 0 to 255 if always positive; or 0 to 127 and -1 to -128 if you decide so.<br>
<br>
Hope this makes sense to you and helps a bit!<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>