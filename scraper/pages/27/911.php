<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				May 20, 2017 at 6:27:56 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
<br>
are you sure that the correct bank was mapped in when you were looking at the memory?<br>
&#xA0;</div>
<br>
Hadn&apos;t thought of that... But since it&apos;s loading from the NES memory and not straight from the ROM, wouldn&apos;t whatever is in C000 at the time be the right data...? I&apos;ll put it through famitracker and see what happens, and try all the C000&apos;s from the ROM hex as well. Thanks!</div>
If you looked at the memory while you were stepping through the code which had those $4012/$4013 writes, then yeah, the correct bank probably was already mapped in.<br>
<br>
(P.S. If you want to find out which ROM address corresponds to an address in the CPU address space, you can right click in the FCEUX Hex Editor (with View -&gt; NES Memory checked), and select &quot;Go Here in ROM File&quot;.)
				</div><div class="mdl-card--border"></div>