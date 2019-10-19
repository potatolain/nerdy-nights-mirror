<div class="mdl-card__title"><strong>tree of might</strong> posted on 
		
			
				
				Jul 15, 2014 at 2:24:38 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>tree of might</b></i><br>
		<br>
		Sorry, guys, I just don&apos;t get this. At the end of the bankswitch subroutine the value in X gets stored in the bankvalues area, then what? What part of the code actually causes the bank switching to happen? Sorry if this is a dumb question.</div>
	<br>
	It&apos;s storing it into the $8000 address, right?<br>
	<br>
	;;code<br>
	<span>STA $8000 ;;new bank to use</span><br>
	RTS</div>
<br>
What section of the code does it write to $8000? I can&apos;t seem to find it.<br>
<br>
				</div><div class="mdl-card--border"></div>