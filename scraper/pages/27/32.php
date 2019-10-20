<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				May 17, 2013 at 4:11:22 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>JKeefe56</b></i><br>
	<br>
	What does dw stand for? I&apos;ve only ever seen .db before.<br>
	&#xA0;</div>
<br>
As .db is a byte-sized chunk, .dw is a word sized chunk.&#xA0;<br>
<br>
.db $12 ; 8-bit number<br>
<br>
.dw $1234 ; 16-bit number<br>
<br>
MOST of the time, as in Kevin&apos;s example, it is an address in ROM. Some assemblers have different ways you can have a word-sized numeral for better readability, such as .addr (address):<br>
<br>
<span style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">.addr gamebkgd0&#xA0;&#xA0; ;;level 0 background</span><br style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
<span style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">.addr gamebkgd1&#xA0;&#xA0; ;;level 1 background</span><br style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
<span style="color: rgb(0, 0, 0); font-family: Geneva, Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">.addr gamebkgd2&#xA0;&#xA0; ;;level 2 background<br>
; etc etc etc<br>
<br>
That just depends on the assembler that you end up choosing though.</span>
				</div><div class="mdl-card--border"></div>