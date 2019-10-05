<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Sep 17, 2009 at 10:36:19 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>this is excellent. I actually think week 4 was the big step for me. This one kinda just built off of that one more. I don&apos;t understand everything in this one for sure, but I can definitely follow it enough to know what the sections of code are doing. It took me like 10 mins to add my old SFX into this engine and place the updated engine into my game. 
<br></div><br>Oh good!&#xA0; I was a little worried that this week might be too much all at once, but I cut it down as far as it would go.&#xA0; Glad to see that it turned out ok!<br><br><div class="FTQUOTE">I was was thinking about blank notes or breaks and wondering if the
easiest way to do it would to be just add a word byte to the
note_table.i call BK and have it with a value of $0000. then when
writing a song with a rest or something would be like
<br>.byte D3,D4,BK,D4,D3,$FF
<br></div><br>That should work for the Squares.&#xA0; I don&apos;t remember the exact number off the top of my head, but the Square channels output silence for any period below $006 or $007.&#xA0; I think I read somewhere that the Triangle channel will still produce audible output even at a period of $000, so you will have to do something else in the Triangle case.&#xA0; I&apos;ll see if I can fit Rests into the next lesson.&#xA0; I think the next lesson is a little easy, so adding an extra topic shouldn&apos;t hurt.<br><br><div class="FTQUOTE"><i>&#xA0;</i>I&apos;m learning a lot about pointers, lookup tables, and include from
you which is just as useful as the music engine itself. I&apos;ve always
been a bit better at hacking existing code, then designing. I much
prefer seeing code in use, then trying to figure out how to design it.
After seeing this, it will probably help me a ton on my next game with
all kinds of loads. Right now I have seperate subroutines to load my
backgrounds and each one of them has the same sets of loops to load the
background tiles and attribute table. Now that I kinda see how these
lookup tables work, I could cut a ton of code out and use a single
loading loop and use a table to decide which backgound and attributes
to load. <br></div><br>Great!&#xA0; Aside from the sound-specific stuff, one of my goals with these tutorials is to introduce some advanced techniques that can be applied to other components of a game.&#xA0; Pretty much everything carries over.&#xA0; If you were going to write an RPG textbox engine for example, you&apos;d have the same thing.&#xA0; You&apos;d have a pointer table to all the text strings in the game.&#xA0; Talking to a villager would &quot;load&quot; one of the strings from the pointer table.&#xA0; Your text data would be divided into ranges: one range for characters, one for opcodes (next line, clear the box, play a sound, etc).&#xA0; Your data reading routine would test the ranges and branch to different sections of code.&#xA0; The method is the same, just the details are different.<br><br>Good call on the background loading routines.&#xA0; That&apos;s exactly how I&apos;d do it.&#xA0; Setup a pointer table and have a single set of routines that will load and draw your background based on an index (background number).<br><br><br><br><div class="FTQUOTE">I tend to be able to always make things work, but I design poorly. These sound tutorials will make me much more efficient in the future.<br></div><br>We all start out that way.&#xA0; You should see the code of my first project.&#xA0; It wasn&apos;t very pretty <img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;">.&#xA0; But you learn a lot just trying stuff and tinkering with things.&#xA0; Once you get that experience under your belt, you can start looking at other peoples&apos; code and figuring out better ways to do things.&#xA0; I learned most of these techniques from peeking at commercial games in FCEUX&apos;s debugger.&#xA0; But I wouldn&apos;t have been able to do that if I hadn&apos;t gotten my hands dirty with my own project first.&#xA0; I&apos;m glad you are finding these tutorials helpful!<br>
				</div><div class="mdl-card--border"></div>