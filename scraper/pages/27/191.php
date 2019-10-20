<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Mar 18, 2014 at 12:19:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>GradualGames</b></i><br>
	<br>
	Without studying your code in great detail, it would appear the program is based entirely on nmi interrupts rather than main thread + interrupts (which is fine for something small). However, you still need an infinite loop to prevent your nmi handler from running outside of nmi. Right above your nmi routine, put something like:<br>
	<br>
	GameLoop:<br>
	jmp GameLoop<br>
	<br>
	For an nmi based game that doesn&apos;t need much processing, you can just leave it blank.</div>
Can&apos;t believe I&apos;m so stupid for having forgotten this! Of course it won&apos;t work that way <span class="sprites_emoticons absmiddle" id="emo_tongue"></span><br>
<br>
<i>Originally posted by:&#xA0;<b>KHAN Games</b></i><br>
<br>
<div class="FTQUOTE" "background-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); border-left-width: border-left-style: border-left-color: rgb(119, 119, 119); border-right-width: border-right-style: border-right-color: border-top-width: border-top-style: border-top-color: width: 413px; margin-top: 10px; margin-right: 30px; margin-bottom: margin-left: padding-top: 6px; padding-right: padding-bottom: padding-left: ">
	<i>Originally posted by:&#xA0;<b>Vectrex280996</b></i><br>
	<br>
	Anyone?</div>
<br>
You commented all the parts of the code that I don&apos;t need to understand. I have no idea what you&apos;re trying to do after MoveRightDone.<br>
<div>
	<br>
	First forgetting an infinite loop, then forgetting to comment. That&apos;ll teach me to program on Sundays</div>
<br>
				</div><div class="mdl-card--border"></div>