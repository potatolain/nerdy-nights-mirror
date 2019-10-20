<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 18, 2016 at 10:27:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Here is a very simple Python script to generate sin/cos tables, just in case:
<br>
<br>
<br>
<br>import math
<br>
<br>
<br>table_length=256
<br>circle_size=127
<br>
<br>
<br>
<br>print &quot;;cos table&quot;
<br>
<br>for angle in range(0,table_length):
<br>
<br>    print &quot;\t .byte %i&quot; % math.floor(circle_size*math.cos(math.radians(360.0/table_length*angle)))
<br>
<br>print &quot;;sin table&quot;
<br>
<br>for angle in range(0,table_length):
<br>
<br>    print &quot;\t .byte %i&quot; % math.floor(circle_size*math.sin(math.radians(360.0/table_length*angle)))
				</div><div class="mdl-card--border"></div>