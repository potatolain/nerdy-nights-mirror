<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 4, 2015 at 12:10:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Baka94</b></i><br>
	<br>
	I guess it&apos;s time to see if I understand how the controller reading works. Each time you read a controller the NES cycles through the buttons (since it only uses bit 0 for this) and I need to store each button state to separate memory slot where the game itself reads the buttons. Is this correct?<br>
	<br>
	BTW, do I need to write the 0 and 1 to the $4017 if I want to use controller 2 too, or does writing to $4016 set up both controllers?</div>
<br>
If only one input each NMI is needed, and the priority order is: A, B, Se, St, DPad, then:<br>
<pre>ldx #$09
LOOP:
  dex
  beq DONE
  lda $4016
  and #$01
  beq LOOP
DONE:
  ...           ; if x ==... 8=A 7=B 6=Se 5=St 4=U 3=D 2=L 1=R 0=None</pre>
would (likely be faster and) work too I guess! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
Just an alternative idea, I don&apos;t mean to teach anything.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
<strong>Edit</strong>: changed 00000001 to #$01, it is the same thing, but probably better understandable this way.
				</div><div class="mdl-card--border"></div>