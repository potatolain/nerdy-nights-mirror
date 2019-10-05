<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Mar 3, 2016 at 5:13:20 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SomeGuy#27</b></i><br>
<br>
Quick question, is it possible to use comparators with the X and Y registers? Meaning<br>
<br>
CMP Y<br>
<br>
Or something of that like.</div>
<br>
I simply store the Y or X reg in a temporary variable and compare things to that temp variable, something like<br>
<br>
&#xA0; STY maintemp<br>
&#xA0; CMP maintemp
				</div><div class="mdl-card--border"></div>