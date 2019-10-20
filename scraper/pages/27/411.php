<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 30, 2014 at 5:42:40 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	<a href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank">http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs</a><br>
	EDIT: Concentrate on this section -<strong><span class="mw-headline" id="VBlank.2C_Rendering_Time.2C_and_NMIs"> VBlank, Rendering Time, and NMIs</span></strong><br>
	<br>
	Read this. Once I read this, I started to understand VBlanks and NMIs.<br>
	<br>
	Basically, if you can&apos;t get everything done in that 1/60th of a second, thePPU moves on without you and you will have major glitches. I think it would take a TON of graphic updates in order for you to spill into a 2nd NMI. There is a lot you can update in the 1/60th of a second.</div>
Thanks for your answer. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
I knew that document, and I know that a NMI will interrupt a main loop.<br>
<br>
My question (curiosity) was about interrupting the code executed after an NMI.<br>
<br>
I try asking it in a different way: putting an infinite loop starting with an NMI, the game will freeze. Does in this case still trigger NMIs? Or since the RTI was never reached, no other NMI are triggered?<br>
<br>
Or, if you prefer: if the NMI code is too long and doesn&apos;t reach the RTI in 1/60th of second, 1/60th of second later another NMI will be triggered or not? If it will, will NMI code restart executing? In this case will the RTI ever be reached?<br>
<br>
I hope this makes sense in English and programming wise.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
<strong>Edit</strong>: formatting, added a note
				</div><div class="mdl-card--border"></div>