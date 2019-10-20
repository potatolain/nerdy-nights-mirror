<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Jan 15, 2017 at 4:45:00 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
Are you asking for programming purposes, or for hacking an existing game?&#xA0;</div>
<br>
programming purposes! I keep on and off working on this text engine but I&apos;ve run into the big obstacle of having the box and and off, no matter where you are. It&apos;s the storing in ram part I&apos;m having trouble understanding, I think, since I tried that once (I think) and it didn&apos;t work. Like:<br>
<br>
;;assuming some background like<br>
;;<br>
;;emptyBG:<br>
;; &#xA0; .incbin &quot;emptybg.bin&quot;<br>
;;<br>
;;where each tile is $00<br>
;;<br>
<br>
LDA #HIGH(emptyBG)<br>
STA pointer+1<br>
LDA #LOW(emptyBG)<br>
STA pointer<br>
<br>
LDY #$00<br>
LDA #$50<br>
STA [pointer], Y<br>
<br>
LDA #$20<br>
LDX #$65<br>
JSR setPPU<br>
<br>
LDA [pointer], Y<br>
STA $2007<br>
<br>
<br>
this doesn&apos;t change anything. do you mean RAM as in the first $07FF pages? or is there some sort of indexing thing I&apos;m missing?<br>
&#xA0;
				</div><div class="mdl-card--border"></div>