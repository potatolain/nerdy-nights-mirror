<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Oct 17, 2014 at 7:56:45 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Mega Mario Man</b></i><br>
		<br>
		Is there a cleaner way to do this? I am messing with the Power Pad. Basically, I want to utilize the &quot;buttons pressed&quot; code so if the button is stepped on, it only registers as 1 press and not a continual press.<br>
		<a href="http://pastebin.com/64rKimJe" target="_blank">http://pastebin.com/64rKimJe</a></div>
	<br>
	This is pretty much what my program does for combos: save the first input, don&apos;t save other inputs until the button was relsased (old button == 00) in previous frames.<br>
	So A + A is: A, release, A.<br>
	And L + R is: L (don&apos;t take another L in the next frames if L was not released), release, R.<br>
	<br>
	I don&apos;t know if this is the best practice, it is just the one I use too.<br>
	<br>
	- Cheers!<br>
	<br>
	- user<br>
	&#xA0;</div>
Thanks for the reply! I think you and I are talking about 2 different things. Specifically, this part:<br>
<div class="de1">
	&#xA0; <span class="kw1">LDA</span> buttons1Lo_old <span class="co1">;what was pressed last frame. &#xA0;EOR to flip all the bits to find ...</span></div>
<div class="de2">
	&#xA0; <span class="kw1">EOR</span> <span class="sy0">#</span><span class="nu13">$FF</span> &#xA0; &#xA0;<span class="co1">;what was not pressed last frame</span></div>
<div class="de1">
	&#xA0; <span class="kw1">AND</span> buttons1Lo <span class="co1">;what is pressed this frame</span></div>
<div class="de2">
	&#xA0; <span class="kw1">STA</span> buttons1Lo_pressed <span class="co1">;stores off-to-on transitions</span></div>
<div class="de1">
	&#xA0;</div>
<div class="de2">
	&#xA0; <span class="kw1">LDA</span> buttons1Hi_old <span class="co1">;what was pressed last frame. &#xA0;EOR to flip all the bits to find ...</span></div>
<div class="de1">
	&#xA0; <span class="kw1">EOR</span> <span class="sy0">#</span><span class="nu13">$FF</span> &#xA0; &#xA0;<span class="co1">;what was not pressed last frame</span></div>
<div class="de2">
	&#xA0; <span class="kw1">AND</span> buttons1Hi <span class="co1">;what is pressed this frame</span></div>
<div class="de1">
	&#xA0; <span class="kw1">STA</span> buttons1Hi_pressed <span class="co1">;stores off-to-on transitions</span></div>
<div class="de2">
	&#xA0; <span class="kw1">RTS<br>
	<br>
	<br>
	The way I have it coded now, it works great. I was just looking to see what others may have done.</span><br>
	&#xA0;</div>
<br>
<br>
I was mainly asking if their was a better way to write the code I have their to make it smaller.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>