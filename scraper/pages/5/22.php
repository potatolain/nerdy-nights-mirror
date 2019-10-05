<div class="mdl-card__title"><strong>resynthesize</strong> posted on 
		
			
				
				Oct 26, 2009 at 5:03:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Man, <br><br>Without fail, as soon as I spend the time to type up a message on a forum, the solution jumps out to me a few minutes later.&#xA0; The problem was that I was using the wrong address for the sprites!&#xA0; It is supposed to be $0200, not $2000.&#xA0; After I changed that, it worked OK except the last sprite did not update.&#xA0; That was because the &quot;cpx #$0F&quot; was branching before the last sprite was moved.&#xA0; Here is the finished code that can move the entire sprite.&#xA0; I wanted to write the code this way so that moving an arbitrarily large sprite wouldn&apos;t need a ton of repetitive code:<br><br>&#xA0;<br>&#xA0; ldx #$03 <br>moveloop:<br>&#xA0; lda $0200, x ;load sprite X position<br>&#xA0; clc&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; make sure the carry flag is clear<br>&#xA0; adc #$02&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; <br>&#xA0; sta $0200, x ; save sprite X position<br>&#xA0; inx<br>&#xA0; inx<br>&#xA0; inx<br>&#xA0; inx<br>&#xA0; cpx #$13<br>&#xA0; bne moveloop&#xA0;&#xA0;&#xA0; <br><br>I&apos;m still wondering if there is a better way to &quot;add 4 to x&quot; instead of using 4 inx statements.<br>
				</div><div class="mdl-card--border"></div>