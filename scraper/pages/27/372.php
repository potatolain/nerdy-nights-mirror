<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 20, 2014 at 5:38:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>kiljo</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>KHAN Games</b></i><br>
		<br>
		Or &quot;I really want my sprite to collide with the background and stop.&#xA0; What&apos;s the best way to go about this?&quot;</div>
	<br>
	Sorry if this has been asked and answered, but from reading the first ~100 posts I did not see it.&#xA0; I would like my character sprite guy to interact with my background and I have an idea of how to do it, but it does not seem like a good idea.<br>
	<br>
	Currently, I have a sprite that can move around, jump and duck (I achieved this by using the first 4 weeks of tutorials from KHAN). I put a crate on the ground in my background and would like to make my character stop moving when they run into it. Additionally, I would like them to be able to jump on top of it and not fall through it.<br>
	<br>
	My idea is to gather locations that represent the size of my character (I would have a box that defines the space he takes up) and track that with his movements. Then create a space where my crate is and prevent my character from going there (this is how I got Pong working in nerdy nights). But it seems to me that if my game gets more complicated, I would have to have a bunch of lines just checking if I am colliding with any user defined background objects.<br>
	<br>
	Is there a better for my character to interact with the background?<br>
	Also, when I jump and land at a different elevation I get some problems... I currently have my character jump and land at the same elevation (this is all defined in the jumping subroutine). Should I instead have constants defining my background as &#x201C;solid&#x201D; (i.e. don&#x2019;t let my character go past this value) and just have him land when he hits the &#x201C;solid&#x201D; part of the background? If I did things that way, I would probably need to implement a gravity that is constantly happening instead of having my character fall as part of my jumping subroutine.<br>
	<br>
	Hopefully that all sounds right, I did some talking out loud so that if things are terribly wrong someone can let me know (or watch me suffer). I would appreciate any advise or insight into a better way of interacting with my background.<br>
	<br>
	Thanks,<br>
	<br>
	kiljo<span display:>&#xA0;</span><br>
	<div height: id="cke_pastebin" left: overflow: position: top: width:>
		&#xA0;</div>
</div>
<br>
Is your name really Kevin H too?&#xA0; Haha.&#xA0; Weird!<br>
<br>
Anyway, I made a Week 5 lesson dedicated to background collision. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> I&apos;ll upload it now.&#xA0; It&apos;s more geared toward overhead collision, so I&apos;m not sure how well it will work in a platformer scenario, but at least you will kind of get the idea;<br>
<br>
				</div><div class="mdl-card--border"></div>