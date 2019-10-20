<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 8, 2017 at 8:25:20 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>pk space jam</b></i><br>
<br>
Thank you guys for the help, before I put the engine into the forever loop, just want to double check I&apos;ve done everything else correctly, also trying to single out what of my engine I need to put inside the forever loop, basically everything from 182 to 293? or would I include all the sub routines? It&apos;s just I suppose still hard for me to contextualize how the hardware is working. <a href="https://hastebin.com/anonolavoc.pl" target="_blank" original-href="https://hastebin.com/anonolavoc.pl">https://hastebin.com/anonolavoc.pl</a><br>
<br>
Also, here&apos;s what I got when I tried the above code w/ sleeping, did I need to define this somewhere else? feel like im missing something obvious lol, attached is my error log&#xA0;</div>
Everything except variables, constants, and game startup code.<br>
<br>
Here is my layout.<br>
<br>
Header<br>
Variables<br>
Constants<br>
Startup Code (Rest, clrmem, music init, sfx init, save data load, game state init, Enable PPU and NMI)<br>
Forever Loop (with it waiting for the NMI right at the start)<br>
&#xA0;&#xA0;&#xA0;&#xA0; - Wait for NMI to start and finish<br>
&#xA0;&#xA0;&#xA0;&#xA0; - Read Controllers<br>
&#xA0;&#xA0;&#xA0;&#xA0; - Game Engine<br>
&#xA0;&#xA0;&#xA0;&#xA0; - Check if game state changed during engine<br>
&#xA0;&#xA0;&#xA0;&#xA0; - Loop back to forever and wait for NMI<br>
<br>
<br>
The forever loop is exactly what it sounds like, one big loop that runs all of your data from 1 frame. You update everything in this loop and when you are finished, you put in a wait for the NMI to hit. As long as it is enabled, the NMI interrupts once a frame. This code ensures that we wait for the NMI to run before proceeding with the rest of our code.
<pre>Forever:
  INC sleeping                     ;wait for NMI<br><br>.loop
  LDA sleeping
  BNE .loop</pre><br><br><p><br>
This code at the end of NMI tells the Forever loop that is done and you can update the game code for the next frame:</p><br><br><pre><br><br>&#xA0; LDA #$00
&#xA0; STA sleeping&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;wake up the main program &#xA0;
&#xA0;
&#xA0; PLA&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;restore the registers
&#xA0; TAY
&#xA0; PLA
&#xA0; TAX
&#xA0; PLA<br><br>&#xA0; RTI           ;Return from the Interrupt back to the Forever loop
</pre>
<br>
This is how we &quot;time&quot; hitting the NMI. Otherwise, we could be running our game code and the NMI would Interrupt and mess up everthing. The only think that should happen during the NMI is writing to the PPU and APU. All other code goes in your game engine. So, if you have a background tile that needs to change (think Score or Time), you could update that data in your game code and then write it during the NMI. You will advance your sprites once per frame in your game code (updating the $0200 page in RAM), then the first part of the NMI writes the $0200 page to the PPU every frame. Even if you don&apos;t understand why at this point, that is what is happening here.
<pre>  LDA #$00
  STA $2003                        ; set the low byte (00) of the RAM address
  LDA #$02
  STA $4014                            ;Set High byte of sprite RAM</pre>
<br>
Does that clear it up some more?
				</div><div class="mdl-card--border"></div>