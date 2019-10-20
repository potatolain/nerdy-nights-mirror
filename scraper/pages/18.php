
					<b>Last Week</b>: <a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=22776" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=22776">Periods, Lookup Tables</a><br><br><b>This Week</b>: Sound Engine Basics.&#xA0; We will setup the framework to get our sound engine running.<br><br><b><font size="4">Sound Engine</font></b><br><br>Now
that we know how to get notes to play we can start thinking about our
sound engine.&#xA0; What do we want it to be able to do?&#xA0; How will the main
program interact with it?<br><br>It&apos;s good practice to separate the
different pieces of your program.&#xA0; The sound engine shouldn&apos;t be
messing with main program code and vice-versa.&#xA0; If you mix them, your
code becomes harder to read, the danger of variable conflicts increases
and you open yourself up to hard-to-find bugs.&#xA0;&#xA0; If you keep the
different pieces of your program separate, you get the opposite: your
code reads well, you avoid variable conflicts, and bugs are easier to
trace.&#xA0; Separation also improves your ability to reuse code.&#xA0; If your
sound engine only accesses its own internal routines and variables, it
makes it that much easier to pull it out from one game and plug it into
another.<br><br>There has to be some communication between the main
program and the sound engine of course.&#xA0; The main program needs to be
able to tell the sound engine to do things like: &quot;Play song 2&quot; or &quot;shut
up&quot;.&#xA0; But we don&apos;t want the main program sticking its nose in the sound
engine&apos;s business.&#xA0; We only want it to issue commands.&#xA0; The sound
engine will handle the rest on its own.<br><br>To set this up, we will
create a small set of subroutines that the main program can use to
invoke the sound engine and give it commands.&#xA0; I&apos;ll call these
subroutines &quot;<b>entrances</b>&quot;.&#xA0; We want as few entrances into the
sound engine as possible.&#xA0; The sound engine itself will have several
internal subroutines it can work with, but the main program will only
use the entrances.<br><br><b>Entrances</b><br>So what will our entrance
subroutines be?&#xA0; We need to think about what the main program would
need to tell the sound engine to do.&#xA0; Here is a list of entrances we
might want for our sound engine:<br><br>-Initialize sound engine&#xA0;&#xA0;&#xA0; (sound_init)<br>-Load new song/sfx&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; (sound_load)<br>-Play a frame of music/sfx&#xA0; (sound_play_frame)<br>-Disable sound engine&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; (sound_disable)<br><br>The
names in paranthesis are what I&apos;m going to call the subroutines in
code.&#xA0; I prefixed them with sound_ for readability.&#xA0; You can tell at a
glance that they are sound routines.&#xA0; Here is a rundown of what our
commands will do:<br><br><b>sound_init</b> will enable channels and silence them.&#xA0; It will also initialize sound engine variables.<br><br><b>sound_load</b>
will take a song/sfx number as input.&#xA0; It will use that song number to
index into a table of pointers to song headers.&#xA0; It will read the
appropriate header and set up sound engine variables.&#xA0; If that didn&apos;t
make sense, don&apos;t worry.&#xA0; We&apos;ll be covering this stuff next week.<br><br><b>sound_play_frame</b>
will advance the sound engine by one frame.&#xA0; It will run the note
timers, read from the data streams (if necessary), update sound
variables and make writes to the APU ports.&#xA0; This stuff will also be
covered in future weeks.<br><b><br>
sound_disable</b> will disable channels via $4015 and set a disable flag variable.<br><br>We
already know enough to knock out two of those, sound_init and
sound_disable.&#xA0; Let&apos;s write them now.&#xA0; We&apos;ll write skeleton code for
the other entrance subroutines as well.&#xA0; A few things to mention before
we do that though:<br><br><b>RAM</b><br>A sound engine requires a lot
of RAM.&#xA0; A large sound engine might even take up a full page of RAM.&#xA0;
For this tutorial, we&apos;ll stick all our sound engine variables on the
$300 page of RAM.&#xA0; There is nothing magic about this number.&#xA0; I chose
$300 for convenience.&#xA0; $000 is your zero-page RAM.&#xA0; $100 is your
stack.&#xA0; If you completed the original Nerdy Nights series, $200 will be
your Sprite OAM.&#xA0; So $300 is next in line.<br><br><b>ROM</b><br>The
sound engine itself won&apos;t require a lot of ROM space for code, but if
you have a lot of music your song data might take up a lot of space.&#xA0;
For this reason, I&apos;m going to change our header to give us two 16k
PRG-ROM banks, like this:<br><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; .inesprg 2 ;2x 16kb PRG code</span><br>&#xA0;&#xA0; &#xA0;<br>Now
we have twice as much ROM space, just in case we need it.&#xA0; BTW, this is
the maximum amount of ROM we can have without using a mapper.<br>&#xA0;&#xA0; &#xA0;<br><b>Noise Channel</b><br>I
purposely haven&apos;t covered the Noise channel yet.&#xA0; We will want to
silence it in our init code though, so I will go ahead and teach that
much.&#xA0; Noise channel volume is controlled via port $400C.&#xA0; It works the
same as $4000/$4004 does for the Square channels, except there is no
Duty Cycle control:<br><br><span style="font-family: Courier New;">NOISE_ENV ($400C)</span><br style="font-family: Courier New;"><br style="font-family: Courier New;"><span style="font-family: Courier New;">76543210</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0; ||||||</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0; ||++++- Volume</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0; |+----- Saw Envelope Disable (0: use internal counter for volume; 1: use Volume for volume)</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0; +------ Length Counter Disable (0: use Length Counter; 1: disable Length Counter)</span><br>&#xA0; <br>Like the Squares, we will silence the Noise channel by setting both disable flags, and setting the Volume to 0.<br>&#xA0;&#xA0; &#xA0;<br><b><font size="3">Skeleton Sound Engine</font></b><br>Let&apos;s
write the entrance subroutines to our sound engine.&#xA0; Most of this code
should be very familiar to you if you completed the first three
tutorials in this series.<br><br><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; .rsset $0300 ;sound engine variables will be on the $0300 page of RAM</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">sound_disable_flag&#xA0; .rs 1&#xA0;&#xA0; ;a flag variable that keeps track of whether the sound engine is disabled or not.</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;if set, sound_play_frame will return without doing anything.</span><br style="font-family: Courier New;"><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; .bank 0</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; .org $8000&#xA0; ;we have two 16k PRG banks now.&#xA0; We will stick our sound engine in the first one, which starts at $8000.</span><br style="font-family: Courier New;"><br style="font-family: Courier New;"><span style="font-family: Courier New;">sound_init:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$0F</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $4015&#xA0;&#xA0; ;enable Square 1, Square 2, Triangle and Noise channels</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$30</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $4000&#xA0;&#xA0; ;set Square 1 volume to 0</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $4004&#xA0;&#xA0; ;set Square 2 volume to 0</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $400C&#xA0;&#xA0; ;set Noise volume to 0</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$80</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $4008&#xA0;&#xA0; ;silence Triangle</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$00</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta sound_disable_flag&#xA0; ;clear disable flag</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;later, if we have other variables we want to initialize, we will do that here.</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; rts</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">sound_disable:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$00</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta $4015&#xA0;&#xA0; ;disable all channels</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$01</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta sound_disable_flag&#xA0; ;set disable flag</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; rts</span><br style="font-family: Courier New;"><br style="font-family: Courier New;"><span style="font-family: Courier New;">sound_load:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;nothing here yet</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; rts</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">sound_play_frame:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda sound_disable_flag</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; bne .done&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;if disable flag is set, don&apos;t advance a frame</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;nothing here yet</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">.done:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; rts</span><br style="font-family: Courier New;"><br>&#xA0;&#xA0; &#xA0;<br><b>Driving the Sound Engine</b><br>We
have the framework setup for our sound engine to run.&#xA0; The main program
now has subroutines it can call to issue commands to the sound engine.&#xA0;
Most of them don&apos;t do anything yet, but we can still integrate them
into the main program.&#xA0; First we will want to make a call to sound_init
somewhere in our reset code:<br><br><span style="font-family: Courier New;">RESET:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sei</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; cld</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ldx #$FF</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; txs</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; inx</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;... clear memory, etc</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; jsr sound_init</span><br style="font-family: Courier New;"><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;... more reset stuff</span><br>&#xA0;&#xA0; &#xA0;<br>Next
we need something to drive our sound engine.&#xA0; Music is time-based.&#xA0; In
any piece of music, assuming a constant tempo, each quarter note needs
to last exactly as long as every other quarter note.&#xA0; A whole note has
to be exactly as long as four quarter notes.&#xA0; If our sound engine is
going to play music, it needs to be time-based as well.&#xA0; We have a
subroutine, sound_play_frame, that will advance our sound engine a
frame at a time.&#xA0; Now we need to ensure it gets called repeatedly at a
regular time interval.<br><br>One way to do this is to stick it in the
NMI.&#xA0; Recall that when enabled, the NMI will trigger at the start of
every vblank.&#xA0; Vblank is the only safe time to write to the PPU, so the
NMI is typically full of drawing code.&#xA0; We don&apos;t want to waste our
precious vblank time running sound code, but what about after we are
finished drawing?&#xA0; If we stick our call to sound_play_frame at the end
of NMI, after the drawing code, we are set.&#xA0; sound_play_frame gets
called once per frame, and we avoid stepping on the PPU&apos;s toes.&#xA0; And
since sound_play_frame doesn&apos;t write to the PPU registers, it doesn&apos;t
matter if our sound code spills out of vblank. &#xA0;<br><br>Let&apos;s setup the NMI to drive our sound engine:<br><br><span style="font-family: Courier New;">NMI:</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pha&#xA0;&#xA0;&#xA0;&#xA0; ;save registers</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; txa</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pha</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; tya</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pha</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;do sprite DMA</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;update palettes if needed</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;draw stuff on the screen</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; ;set scroll</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; jsr sound_play_frame&#xA0;&#xA0;&#xA0; ;run our sound engine after all drawing code is done.</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;this ensures our sound engine gets run once per frame.</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; lda #$00</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; sta sleeping&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;did you do your homework and read Disch&apos;s document last week?</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;<a href="http://nesdevhandbook.googlepages.com/theframe.html" target="_blank" original-href="http://nesdevhandbook.googlepages.com/theframe.html">http://nesdevhandbook.googlepages...</a></span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pla&#xA0;&#xA0;&#xA0;&#xA0; ;restore registers</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; tay</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pla</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; tax</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; pla</span><br style="font-family: Courier New;"><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; rti</span><br><b><br>
.include</b><br>To further separate our sound engine from the main
program, we can keep all our sound engine code in a separate file.&#xA0;
NESASM3 gives us a directive .include that we can use to copy a source
file into our main program.&#xA0; We actually used this directive last week
to include the note_table.i file, which contained our period lookup
table. &#xA0;<br><br>Using .include to copy a source file into our code is
very similar to how we use .incbin to import a .chr file.&#xA0; Assuming our
sound engine code is saved in a file called sound_engine.asm, we will
add the following code to our main program:<br>&#xA0;&#xA0; &#xA0;<br><span style="font-family: Courier New;">&#xA0;&#xA0;&#xA0; .include &quot;sound_engine.asm&quot;</span><br><br>We
will continue to include note_table.i, but since it is part of our
sound engine we will stick the .include directive in the
sound_engine.asm file.<br><br>It&apos;s not bad practice to use includes a
lot.&#xA0; You can pull your joypad routines out and stick them in their own
file.&#xA0; You can have separate files for your gamestate code, for your
PPU routines and for just about anything else you can think of.&#xA0;
Breaking up your code like this will make it easier to find things as
your program gets larger and more complicated.&#xA0; It also makes it easier
to plug your old routines into new programs.<br>&#xA0;&#xA0; &#xA0;<br><b>Putting It All Together</b><br>Download
and unzip the <a href="downloads/NerdyNightsSoundSourceCollection/skeleton.zip" target="_blank" original-href="http://tummaigames.com/skeleton.zip">skeleton.zip</a> sample files.&#xA0; Make sure skeleton.asm,
sound_engine.asm, skeleton.chr, note_table.i, sound_data.i and
skeleton.bat are all in the same folder as NESASM3, then double click
skeleton.bat. That will run NESASM3 and should produce the skeleton.nes
file. Run that NES file in FCEUXD SP.<br><br>I&apos;ve hardcoded sound_load
and sound_play_frame to play a little melody on the Square 1 channel.&#xA0;
It uses a simple frame counter to control note speed.&#xA0; The data for the
music is found in the sound_data.i file.&#xA0;&#xA0; Use the controller to
interact with the sound engine.&#xA0; Controls are as follows:<br>&#xA0;&#xA0; &#xA0;<br><span style="font-weight: bold;">A</span>: Play sound from the beginning (sound_load)<br><span style="font-weight: bold;">B</span>: Initialize the sound engine (sound_init)<br><span style="font-weight: bold;">Start</span>: Disable sound engine (sound_disable)<br><br>Try
editing sound_engine.asm to change the data stream that
sound_play_frame reads from.&#xA0; The different data streams available are
located in sound_data.i.&#xA0; Try adding your own data stream to
sound_data.i too.&#xA0; Use the note symbols we made last week and terminate
your data stream with $FF.<br><br><b>Homework</b>: Write two new sound engine entrance subroutines for the main program to use:<br>&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; 1. sound_pause: pauses playback of the sound, but retains the current position in the data stream.<br>&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; 2. sound_unpause: if the sound is currently paused, resumes play from the saved position.<br>Then modify handle_joypad to allow the user to pause/unpause the music.<br><br><b>Homework #2</b>: If the ideas presented in Disch&apos;s <a href="http://nesdevhandbook.googlepages.com/theframe.html" target="_blank" original-href="http://nesdevhandbook.googlepages.com/theframe.html">The Frames and NMIs</a> document are still fuzzy in your head, read it again. <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"><br><br><b>Extra Credit</b>:&#xA0;
See if you can understand how my drawing buffer works.&#xA0; Use Disch&apos;s
document to help you.&#xA0; I won&apos;t cover drawing buffers in these sound
tutorials, for obvious reasons, but it is definitely worth your time to
learn how to use them.<br>&#xA0;&#xA0; &#xA0;<br><b>Next week</b>: <a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=23452" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=23452">Sound Data, Pointer Tables, Headers</a><br>
				