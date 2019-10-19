<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				May 4, 2014 at 11:27:25 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					A few months later, I finally came back to this thread with a new, updated scoring routine that puts the old one to shame. It does the same thing as the old one, except it is much more compact and the score loops at 999990. This time, you have to do .rs 5 when declaring the &quot;score&quot; and &quot;hiscore&quot; variables. All other variables are &quot;normal&quot; .rs 1 variables<br>
<br>
CheckScores:<br>
&#xA0; LDX #$04&#xA0; ;Lowest digit in score RAM is score+4<br>
CheckScoresX:<br>
&#xA0; CPX #$FF&#xA0; ;If all 5 digits have been done (If the game has 6 digits, the 6th is in the BG)<br>
&#xA0; BEQ ScoreCheckDone ;Go to the end of the subroutine<br>
&#xA0; LDA score,x&#xA0; ;Loads a score digit in the accumulator<br>
&#xA0; CMP #$0B&#xA0; ;Compares it to 0B (A in CHR)<br>
&#xA0; BCC ScoreOK&#xA0; ;And goes to ScoreOK if it&apos;s smaller than 0A<br>
&#xA0; SEC&#xA0;&#xA0; ;If not, substract 10 to the score<br>
&#xA0; SBC #$0A<br>
&#xA0; STA score,x<br>
&#xA0; DEX<br>
&#xA0; INC score,x&#xA0; ;And increments the next digit<br>
&#xA0; JMP CheckScoresX<br>
ScoreOK:<br>
&#xA0; DEX<br>
&#xA0; JMP CheckScoresX<br>
ScoreCheckDone:<br>
&#xA0; LDX #$00&#xA0; ;This time, we start at the highest digit<br>
HiScoreCheck:<br>
&#xA0; LDA score,x&#xA0; ;Load the score and compare it to the HiScore (first 10K, then 1K, etc.)<br>
&#xA0; CMP hiscore,x<br>
&#xA0; BEQ NextHiDigit ;If it&apos;s equal, check the next digit<br>
&#xA0; BCS WriteHi&#xA0; ;If it&apos;s higher, it&apos;s higher than our hiscore! Write it then <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
&#xA0; JMP HiScoreCheckDone ;If not, check the next digit<br>
NextHiDigit:<br>
&#xA0; INX<br>
&#xA0; JMP HiScoreCheck<br>
WriteHi:<br>
&#xA0; LDX #$00<br>
WriteHiX:<br>
&#xA0; LDA score,x&#xA0; ;Takes the score variable<br>
&#xA0; STA hiscore,x&#xA0; ;And rams them in the HiScore variables<br>
&#xA0; INX<br>
&#xA0; CPX #$05<br>
&#xA0; BNE WriteHiX<br>
HiScoreCheckDone:<br>
&#xA0; RTS
				</div><div class="mdl-card--border"></div>