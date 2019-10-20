<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Jul 7, 2014 at 1:46:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m not really sure, but could it have something to do with this portion?:
<br>
<br>CLC
<br>ADC #$09
<br>CPY #$08
<br>BNE CHR_Loop
<br>
<br>I&apos;ve never really done a CPY without the INY or DEY right before it, so I don&apos;t know if that would mess with anything. I also noticed that it&apos;s an ADC #$09, while it seems to be 8 for the others? I haven&apos;t looked super hard at the code though so 9 might be what you need to do there.
<br>
<br>As an aside, the parts that you do the multiple JSRs would benefit greatly by just doing this instead:
<br>
<br>	pha
<br>	txa
<br>	clc
<br>	adc #$20
<br>	tax
<br>	pla
<br>
<br>Every JSR builds at 3 bytes apiece. So with every time you place that down 8 times, you are building 24 bytes into ROM when just doing the snippet above will build at 7 bytes. Just something to think about!
				</div><div class="mdl-card--border"></div>