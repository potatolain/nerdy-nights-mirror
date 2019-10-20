<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				May 16, 2013 at 11:44:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	Even though an one-way scrolling engine could contain not that much more code compared to a single screen game, that does not mean it is &apos;not than much&apos; more complex than a single screen game. It is non-linear relation, scrolling introduces a number of problems to solve, making code considerable more complex. Like, world space in 16-bit coordinates (at least) with &apos;virtual camera&apos;; unpacking level data row by row, as unpacked scrolling levels take a lot of room; updating video memory when needed; keeping status bar static via screen split or something; sprites that could go offscreen - a range of subproblems, as you can&apos;t now process all enemies on a level like in a single screen game, you have to keep amount of simultaneously processed enemies reasonable in some way. Also, while you can easily code a level for a single screen game without extra tools, you&apos;ll sure will need a custom map editor or a converter from some general map format - something that&apos;ll allow to edit large levels and pack them into your custom format. So you may need skills of PC programming as well.<br>
	<br>
	Bottom line: there is a reason why so many homebrew games are single screen ones, and the reason is because it is noticeably easier. So don&apos;t start with a scrolling game like SMB right away.</div>
<br>
I don&apos;t see camera space to screen space adding that much more code, just a loop that subtracts the camera&apos;s X and Y from each metasprite&apos;s X and Y.<br>
<br>
Unpacking level data is a problem for a large single screen game, too.&#xA0; Battle Kid had around 500 rooms I believe. If you string them out end to end, that&apos;s actually longer (in terms of sheer screen real-estate) than Nomolos. I&apos;d be shocked if Sivak did that all in a text editor. So you could still need that skill (programming an editor for use on a PC) for a single screen game.<br>
<br>
Actually updating the nametables for scrolling is definitely a challenge, but in my opinion does not introduce much complexity until you allow backtracking. Nomolos was originally single scrolling----and the number of problems I had to solve really exploded when I decided to rewrite the scrolling engine to allow backtracking. *edit* I suppose it is also possible I am taking for granted the step up from single screen since I&apos;ve never made a single screen game! (on the NES...made lots in QBasic years ago)<br>
<br>
I do agree though that starting with scrolling for one&apos;s first project, especially with not much experience prior, would not be wise. I&apos;m just standing by my feeling that single-scrolling isn&apos;t a huge step up in complexity from single-screen. It&apos;s definitely a step up, but its just not...huge. haha.&#xA0; Taking the step up to 8 way scrolling though would be project suicide for someone starting out. It took me several months to get Owlia&apos;s 8 way scrolling engine working correctly (compare that to...about an afternoon for Nomolos&apos;s scrolling engine..*edit* that&apos;s just scrolling though, that does not include all the problems I later had to solve as a result....). The hardest problem to solve there is updating the attribute table, and then updating both a row and column inside vblank without going past the end of vblank and mucking up the ppu with garbage. (*edit* I forgot also hiding update glitches....there are quite a few details here to cover)<br>
<br>
I forgot about status bars---but that&apos;s because I don&apos;t like them and never use them <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
				</div><div class="mdl-card--border"></div>