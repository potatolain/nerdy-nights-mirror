<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Nov 3, 2015 at 4:37:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>sempressimo</b></i><br>
<br>
I am having a bit of trouble with collision against background I can&apos;t figure out. Attached is the .nes so that you can see it in the emulator. Logical tiles and logical player box are all 16x16 pixels.<br>
<br>
Collisions againts left and right seem about right. But I am having an offset of about 3 pixels against up and down. Also it is weird I had to add 15 instead 16 to the player width to get the right wall collision right (i.e. no gaps).<br>
<br>
I am testing againts a collision map of #$00 for walk or #$01 for wall created as .db(s). The player box position is updated each frame. Some relevant code is:<br>
<br>
;--------------------------------------<br>
<br>
NMI:<br>
<br>
&#xA0;&#xA0;...<br>
<br>
&#xA0; JSR StoreLastPlayerPos<br>
<br>
&#xA0; JSR ReadController1&#xA0; ; get the current button data for player 1<br>
<br>
&#xA0; JSR ProcessUserInput<br>
<br>
&#xA0; JSR UpdatePlayerBox<br>
&#xA0;<br>
&#xA0; JSR CheckPlayerBackgroundCollision<br>
<br>
&#xA0; LDA player_collided<br>
&#xA0; CMP #$01<br>
&#xA0; BEQ DontUpdatePosition<br>
&#xA0;<br>
&#xA0; JSR UpdatePlayerSpritePosition<br>
&#xA0;<br>
&#xA0; RTI</div>
Not really answering your question, but a huge tip that may clear up a lot of issues you are having now or in the future.<br>
<br>
So, this may not be the correct way to word this, and I may get flamed for it, but this is how I finally made sense of it in my head.<br>
<br>
There are 2 types of code, main game code and NMI code. The NMI portion of the code is very short and it is very crucial to only be doing what is needed during this time. The NMI will interupt the code every frame to do what it needs. The best anaolgy I have read is that imagine that a frame is 1 hour. The first 5 minutes is the NMI, after that, your main code continues where it was interrupted. The NMI doesn&apos;t care what your main code is doing, when it is time for the NMI to run, it will interrupt the main code and do its thing. If you tryt o do too much during the NMI, the screen will output garbage or your code may not do what you what you intended because the NMI ended before your code completed.<br>
<br>
So, the point of that was, don&apos;t busy the NMI with main code stuff, like Reading the controller. I try to reserve my NMI for only code that needs to run at this time, such as:<br>
Updating Palette Color, Updating any background tiles (such as writing a score or text to the screen), and enabling PPU details (Like enabling the PPU or turn scrolling on and off).<br>
<br>
To activate these to run, I set a flag in the Main Code that activates them to run. So, if something happened that caused my score to increase, I would INC a ScoreFlag to #$01. When the NMI interrupts, it will check to see if this score flag is#$01. If true, then it will enable the subroutine that writes the new score to the screen. The only thing that I am doing here is taking the value out of RAM and putting it on the screen. Anything that needs to happed to update that value must happen in the main code and then copied into RAM for use in the NMI.<br>
<br>
For a better understanding of the NMI and vblanks, read this: <a href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank">http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs</a><br>
That is one of the most helpful links I have ever read on NMI and it turned on the lightbulb for me.<br>
<br>
I hope this makes sense. At times, its tough for me to interpret how I understand things and then regurgitate that into useful knowledge for others.</div>
Expanding the concept.<br>
<br>
Each 1/60th of seconds there is a NMI, which is about 30000 cycles of span from one to the next<br>
The NMI is triggered when VBLANK starts<br>
VBlank is the short interval of time when the PPU is NOT drawing on screen, the rest of the time it is busy drawing stuff<br>
<br>
So:<br>
<br>
when you trigger the NMI, the FIRST things to do are the ones about updating the PPU data (e.g. SPRITE transfer).<br>
Then you do music update, input check, logic stuff, collision and all the rest.<br>
<br>
Having two separate codes (NMI and LOGIC) is a more PRO solution, having an unique script of less than 30000 cycles (in any case) for both is another solution.<br>
<br>
In any case, unless you really know what you are doing, think like:<br>
NMI<br>
- UPDATE PPU<br>
- DO ALL THE REST<br>
RTI<br>
<br>
So, example:<br>
- draw sprite in position x,y (&lt;&lt; PPU stuff, to be done in VBlank)<br>
- music engine (must tick once every 1/60th of second)<br>
- then check for inputs and detect L is pressed, (else you are done here)<br>
- then move the sprite left,<br>
- then check for collision,<br>
- if so put back the sprite where it was,<br>
- then RTI<br>
You can also check for collision and then decide if move the sprite or not. It depends on what is shorter. Or put the music engine at the end (however, I have been adviced to do it right after PPU stuff since that way the span between one tick and the next will always be the same time-wise, and not depending on the time elapsed in the previous logic).<br>
<br>
In any case, the sprite will be draw in the new position in the NEXT NMI VBLANK.<br>
<br>
If you do logic first and then PPU update later, the risk is to transfer the PPU stuff after the VBLANK time is over, and screw everything.<br>
The issue is that emulation sometimes works (at least in FcEux), while on real hardware is badly glitchy if going over VBlank with PPU stuff.<br>
And it is enough to put the PPU update stuff in the beginning of the NMI code to solve the issue.<br>
So, quick background updates and sprites updates, unless turning rendering off, must be done ASAP after the NMI is triggered.<br>
<br>
This at least is what I understood so far on the matter.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>