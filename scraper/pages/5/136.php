<div class="mdl-card__title"><strong>MadnessVX</strong> posted on 
		
			
				
				Jan 10, 2015 at 4:25:27 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					After the latch, you want your controller reading code to do something when it sees that a button is pushed. Each time you read $4016, it will be for a different button as User stated above. So if you want to read that up or down was pressed, you must have a total of 8 reads. (Technically 5 or 6, but its best to read the whole controller! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>) You cannot simply have two reads from $4016, and call them up and down.<br>
<br>
Some pseudoish-code:<br>
<br>
Latch_Controller:&#xA0; ;Controller gets latched here<br>
&#xA0; lda #$01<br>
&#xA0; sta $4016<br>
&#xA0; lda #$00<br>
&#xA0; sta $4016<br>
<br>
Read_Control:&#xA0; ;Here is where we actually read the controller<br>
<br>
&#xA0; lda $4016&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;First read from 4016. This is the A button.<br>
&#xA0; and #%00000001<br>
&#xA0; cmp $%01&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;compare the value you just loaded into the accumulator with #%00000001. (Same as #$01)<br>
&#xA0; bne .not a&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;if they are not equal, skip the code for A<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &lt;---------------&#xA0; ;Code for the A button will go here<br>
.not a:<br>
&#xA0; Read the controller again to see if B was pressed<br>
&#xA0; More code<br>
<br>
.not b:<br>
&#xA0; More code<br>
&#xA0; etc...<br>
<br>
You keep making reads until you have read them all. (8 times) You want to put your increments or decrements where the up or down reads are.<br>
<br>
&#xA0;I hope this makes sense. For you veterans if I have said anything wrong, please publicly humiliate me! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>