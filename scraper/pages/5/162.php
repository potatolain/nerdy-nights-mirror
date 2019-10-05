<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Dec 29, 2017 at 8:52:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;d add that, basically the way an assembler works under the hood is it has a variable called the &quot;program counter.&quot; This is not the same thing as the pc or program counter in the cpu while running your game---this concept I&apos;m about to describe is only for the assembler.<br>
<br>
It basically starts at 0, but if you say .org $8000, that will effectively set the assembler&apos;s program counter to that value. Then, if you do some .db&apos;s<br>
<br>
.org $8000<br>
some_data:<br>
.db 1, 2, 3<br>
<br>
more_data:<br>
.db 1, 2, 3<br>
<br>
Each byte output to your rom will increment the program counter by 1. When the assembler sees &quot;more_data&quot;, the program counter will now be $8003. So if you use the address &quot;more_data&quot; somewhere in your code, it&apos;ll know to use the address $8003.<br>
<br>
The program counter does the same thing in ram, only you are not outputting any data, you&apos;re just reserving space. So you go:<br>
<br>
.org $0000 ;or it might actually be .rsset in nesasm. every assembler has small differences with these commands. but it&apos;s still going to affect the program counter as the assembler creates your rom file. In the case of variables, nothing gets output, it&apos;s just counting using how many bytes you&apos;re reserving, so when you use &quot;variable1&quot; or &quot;variable2&quot; etc. in your code, it knows the right address to use.<br>
variable1:<br>
.ds 1<br>
<br>
;program counter is now at $0001<br>
variable2:<br>
.ds 2<br>
<br>
;program counter is now at $0003<br>
variable3:<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>