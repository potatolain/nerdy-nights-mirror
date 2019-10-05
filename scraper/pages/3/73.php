<div class="mdl-card__title"><strong>Lincoln</strong> posted on 
		
			
				
				Sep 15, 2015 at 6:27:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Cockroachcharlie</b></i><br>
<br>
Ok. I think I have figured out where my major roadblock is on 6502 design. I am going to write an excerpt in BASIC (we should all recognize this one)<br>
<br>
10: Print &quot;Hello World&quot;<br>
<br>
20 Goto 10<br>
<br>
It&apos;s obvious here why the words &quot;Hello World&quot; appear on the screen. The command &quot;Print&quot; told them to. I think that&apos;s where I am running into trouble here. In 6502 all I am STILL seeing is storing numbers in memory locations (after various tutorials and two books), but I am not understanding how all this number movement adds up to telling the processor to print &quot;Hello World&quot; to the screen. From this weeks tutorial<br>
<br>
LDA %10000000 ;intensify blues<br>
<br>
STA $2001<br>
<br>
I don&apos;t get how that storage is any different than storing at any other location, yet produces a different result. Can somebody explain what I am missing here or guide me to a place that would help me wrap my head around this part. I am actually becoming pretty educated in assembly, but still fail to see how to APPLY all of it to produce an intended result other than moving numbers around.</div>
<br>
<br>
on the NES, $2001 isn&apos;t really storage- it&apos;s like a set of switches the system provides you to interact with the graphics system. flipping the first switch does blue intensity, second switch is red, third is green (or vice versa on those last two), and whatever else the other 5 bits control. there are several addresses like this in the $2000 range that affect ppu activities, and there are more in the $4000 range that handle controller communication and audio, etc.&#xA0;<br>
<br>
I still don&apos;t know how to put hello world on the screen though. someone else can explain that.
				</div><div class="mdl-card--border"></div>