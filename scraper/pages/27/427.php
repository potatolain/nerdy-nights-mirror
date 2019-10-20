<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 4, 2014 at 6:19:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>user</b></i><br>
		<br>
		<div class="FTQUOTE">
			<i>Originally posted by: <b>Vectrex280996</b></i><br>
			<br>
			How do you make aimed bullets on the NES? I can&apos;t figure out a clever way to do this...</div>
		Do you mean detect a collision between two sprites?<br>
		<br>
		&#xA0;</div>
	<br>
	No, I think I already know how to do this I mean having enemies aim at you and then shoot so the bullets come to you (but don&apos;t home), like in many shooters such as Gradius<br>
	&#xA0;</div>
I don&apos;t know Gradius. However, I guess you have to shoot at different angles. The only thing I can think about is a lookup table of x coordinate movement and y coordinate movement, depending on the direction of the target, like, for instance: 355&#xB0; / 5&#xB0; -&gt; x 00, y ##; 5&#xB0;-15&#xB0; -&gt; x ##, y ##; and so on up to 345&#xB0;-355&#xB0;. But there is probably a better way and maybe this is not even what you are looking for.<br>
<strong>Edit</strong>: misspelling.
				</div><div class="mdl-card--border"></div>