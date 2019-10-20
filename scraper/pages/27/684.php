<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 19, 2015 at 6:54:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Vectrex280996</b></i><br>
<br>
I had an idea for a map system for a 256-room level, with 4 &quot;floors&quot; of 64 rooms. Rather than using 256 bytes of RAM for that map, you can just use 32 bytes by setting bits on and off. (cut...) you have so many ways to make stuff work but the goal is to find the best way to make your stuff work.</div>
<br>
Extending the concept to other types of savings, it is also possible to check back a working routine to see if it is possible to reduce the number of instructions or cycles.<br>
And even if there are cycles to waste, often it is easier to read the code later, if it is shorter.<br>
<br>
For instance, the most banal thing:<br>
<br>
LDA #$00<br>
LDX #$00 ; by the way, here TAX would already save something<br>
LOOP:<br>
STA ADDRESS_IN_RAM,x<br>
INX<br>
CPX #$40<br>
BNE LOOP<br>
<br>
can also be coded like this:<br>
<br>
LDA #$00<br>
LDX #$3F<br>
LOOP:<br>
STA ADDRESS_IN_RAM,x<br>
DEX<br>
BPL LOOP<br>
<br>
the two loops do exactely the same thing, but the second one saves 64 (decimal) CPX instructions.<br>
Moreover, with the second loop it is visually more clear that it is Address+Hex00 to Address+Hex3f being influenced, while Address+Hex40 it is not.<br>
<br>
There are of course way better examples than this one for number of instructions or cycles saved, I just picked the more obvious to understand.<br>
<br>
<strong>Edit</strong>: mistake.
				</div><div class="mdl-card--border"></div>