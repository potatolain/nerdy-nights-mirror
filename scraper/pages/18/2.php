<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Sep 4, 2009 at 5:56:51 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>This is pretty neat. I may neat to rewrite my NMI: I&apos;ve read Disch&apos;s document, but don&apos;t quite understand everything he does in it. I&apos;m hesitant to change my NMI right now, just cause it&apos;ll probably break my game since I don&apos;t understand what&apos;s all happening there yet.
<br></div><br>Keep rereading it and it will eventually click.&#xA0; That&apos;s been my experience with NES documents <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif">.&#xA0; You can probably get away with not rewriting your NMI as long as you are able to stick the call to the sound engine in there somewhere to ensure the sound engine is run once per frame.<br><br><br><div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>should a sound engine always go in the first bank? I&apos;m pretty sure
the code runs banks in order, and since music can take a long time, you
may always want the sound to run first. <br></div><br><br>It doesn&apos;t matter.&#xA0; You can stick the sound engine anywhere.&#xA0; The order the code is run doesn&apos;t have to anything to do with bank order.&#xA0; On startup, code execution starts at the address you state in the RESET vector.&#xA0; Then it executes one instruction at a time, only jumping/branching where you explicitly tell it to jump.<br><br>If you were using a mapper, you&apos;d probably want your sound engine in a swappable bank rather than the fixed bank, but other than that it doesn&apos;t matter where you stick it.<br><br><div class="FTQUOTE">the .i files gave me some trouble at first, cause I couldn&apos;t open
them with windows, so I made copies of them and converted them to .txt
files so I could look at them in notepad. I can see what they&apos;re doing
now, so I&apos;m pretty sure I can write a different tune to play.</div><br>Sorry about that.&#xA0; I&apos;ve seen other people put a .i extension on their includes so I was just copying the convention.&#xA0; They&apos;re just text files.&#xA0;&#xA0; You should be able to open them from Notepad&apos;s File-&gt;Open without changing their extension.<br><br><div class="FTQUOTE">&#xA0;According
to the sound_data.1, it&apos;s playing 17 ascending notes on the 3 channels
then writing $FF which I assume is a flag to stop.</div><br>Almost.&#xA0; If you look at sound_play_frame in sound_engine.asm, you&apos;ll see that I only write to the Square 1 channel.&#xA0; The different data streams just play a different variety of ascending notes.&#xA0; You&apos;re right about $FF.&#xA0; It terminates the data streams.<br><br>Try tracing through sound_play_frame and see if you can follow what it&apos;s doing.&#xA0; Feel free to ask more questions if there&apos;s something that&apos;s still unclear. <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"><br>
				</div><div class="mdl-card--border"></div>