<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jul 20, 2015 at 3:36:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
BCS &quot;gotoaddressC&quot; ; B+5 is &gt;= A, hence A &lt; B+5, hence C happens</div>
Small mistake there. If B+5 &gt;= A, then A &lt;= B+5, but not necessarily A &lt; B+5. Consider for example B=0 and A=5. Can be fixed by adding 4 instead of 5, so it becomes: B+4 &gt;= A, thus A &lt;= B+4, thus A &lt; B+5. Another way to do it would be to calculate the B+5 result in a temporary variable and then do the comparison the other way around (as in bunnyboy&apos;s table).
				</div><div class="mdl-card--border"></div>