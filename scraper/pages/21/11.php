<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jan 23, 2016 at 5:54:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>rizz</b></i><br>
<br>
For some reason, I have to do a write to $400F (any value) prior to my write to $400E. Any clue as to why?<br>
<br>
I believe I&apos;ve said it before, but these tutorials are fantastic.</div>
<br>
I&apos;ve also been wondering why this is (even when length counter is disabled and using the constant volume flag for the envelope). Haven&apos;t been able to find an explanation for it from any of the available APU docs.</div>
Going to answer myself here. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> I&apos;m guessing that the $400F write is needed because the length counter might be initially holding a 0 value -- the $400F write will reload a non-zero value into the length counter (and the length counter&apos;s halt flag will then keep it at a non-zero value).<br>
<br>
You don&apos;t see this problem with the pulse channels because the pulse&apos;s &quot;length counter load&quot; is in the same register ($4003/$4007) as the high 3 bits of period, so the length counter reload will happen as a side-effect of writing those high 3 bits.<br>
<br>
Also, since the length counter value is read from a lookup table which doesn&apos;t contain zeros, the written value is irrelevant (if the length counter halt flag is set).<br>
<br>
EDIT: Just as a further note, even if length counter is not used, the zero value in it is a problem because it will unconditionally silence the channel.<br>
EDIT #2: Accidentally had written &quot;$400E write&quot;, not &quot;$400F write&quot;. Fixed.
				</div><div class="mdl-card--border"></div>