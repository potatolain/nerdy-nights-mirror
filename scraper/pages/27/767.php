<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 16, 2016 at 12:46:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Alder</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
<span style="line-height: 1.6;">I typoed that bolded part....hope you caught that...</span></div>
I interpreted it another way, but I think I understand. &#xA0;You can reference a &quot;normal&quot; label from anywhere in your code, but you can&apos;t make another label with the same name. &#xA0;Is the only difference with labels starting with a dot that you can reuse the name? &#xA0;When you branch/jump, does it just look for the most recent one? &#xA0;By horizontal placement I meant, two spaces before &quot;.org&quot; means the assembler considers it a directive, but no spaces before &quot;.org&quot; means it&apos;s a label? (Even though you&apos;d never want to do that, it seems to work)</div>
<br>
Yup, a dot in front of a label means you can reuse that name. This way you don&apos;t have to have a label named &apos;loop1000&apos; later on in your code. Just keep using .loop. Now, you cannot have 2 of the same dot labels in the same subroutine. Sorry, I don&apos;t know the exact term. I&apos;m guessing a more professional programmer will. So you cannot do this:<br>
<br>
Label1:<br>
&#xA0;&#xA0; NORMAL CODE<br>
<br>
&#xA0; .loop:<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; loopy1code<br>
&#xA0; BNE .loop<br>
<br>
&#xA0; .loop:<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; loopy2code<br>
&#xA0; BNE .loop<br>
<br>
Label1End:<br>
&#xA0; RTS<br>
<br>
#####<br>
In this case, you would have to use .loop2 since .loop 1 is in the same subroutine.
				</div><div class="mdl-card--border"></div>