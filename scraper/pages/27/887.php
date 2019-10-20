<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 15, 2017 at 7:15:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>RockyHardwood</b></i><br>
	JSR setPPU</div>
<br>
<br>
can you show me what that sub routine does?<br>
<br>
<br>
&quot; do you mean RAM as in the first $07FF pages? &quot;<br>
<br>
on the NES, yes. And page $0100 to $01ff is used for the stack, so avoid using that (at least a part of that memory page is going to be used to jump to subroutines, and push and pull data to accumulator).<br>
<br>
<br>
&quot;or is there some sort of indexing thing I&apos;m missing?&quot;<br>
<br>
In such cases, I check out myself.<br>
<br>
First run a test, from a screen homogeneous (all same tiles, all same attributes), try to change the first tile, or the first attribute, to some other value hard coded in such test code.<br>
Now, if this does work, it is a step forwards.<br>
<br>
Next try to have some place which is not the first tile or first attribute to be edited.<br>
<br>
Now, if this does work, it is a step forwards.<br>
<br>
Finally try to have indexed the source data you want to put in that place on screen, and see if it works.<br>
<br>
I am not claiming that this is a good method to solve issues, I am not a programmer academically wise, this is just the way I discover and understand things, and solve these kind of issues when programming on assembly for the NES.<br>
<br>
Better programmers than I am will probably give better advice.
				</div><div class="mdl-card--border"></div>