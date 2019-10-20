<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jan 26, 2016 at 11:10:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>insomniakc</b></i><br>
<br>
Actually, yeah. I think I made an incorrect assumption that bank switching was the culprit. Still, my code doesn&apos;t seem to work if I do the attribute loading before Infin, for example, which is why I thought the updating was what was wreaking havoc. I&apos;ve had such a headache with attributes over the past 24 hours that I don&apos;t think I&apos;ll ever forget to put that bit of code in the right spot! right now it&apos;s resting comfortable in a subroutine which is called during a game state subroutine, loaded by the engine-start subroutine... which is called during infin. I have it set up so that it happens before everything else, and that seems to do the trick. It jumps back to infin and re-writes the attributes, which fixes any glitches which would otherwise happen. I&apos;m still learning. And yes MMM, we did have this discussion before, but I have a thick skull that is like an old car that won&apos;t start sometimes when learning new info hahaha.</div>
<br>
<br>
Check the order of turning things on before the infin loop. Here&apos;s what I do:<br>
<br>
&#xA0; JSR StartTitle&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--That enables my first game state (title), start&apos;s music, loads Sprites, loads backgrounds, load attributes, load palettes<br>
&#xA0;<br>
&#xA0; LDA #$00<br>
&#xA0; JSR GameStateUpdate&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--Just some clean up before starting<br>
&#xA0;<br>
&#xA0; LDA #%10010000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; STA $2000<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; LDA #%00011110&#xA0;&#xA0; ; enable sprites, enable background, no clipping on left side<br>
&#xA0; STA $2001<br>
<br>
&#xA0;<br>
;----------------------------------------------------------------------<br>
;-----------------------START MAIN PROGRAM---------------------<br>
;---------------------------------------------------------------------- &#xA0;<br>
Forever:<br>
<br>
--------------------<br>
If I would load background, palette, and attributes after enabling the NMI, sprites, and background, then it would probably kill my script.<br>
<br>
Just a thought, may not be your issue though.
				</div><div class="mdl-card--border"></div>