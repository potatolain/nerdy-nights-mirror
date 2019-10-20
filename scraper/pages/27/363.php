<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Jul 8, 2014 at 8:32:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	Interesting... Could you tell me more about PHA and PLA? Seems like these could help me in my games...</div>
<br>
Pretty much was Rizz said! They can be used for other things too, like speedy writes to the background. You can do something like push multiple bytes from a table onto the stack and then in NMI pull them all and store them in $2007 so that you can get more done during NMI if you need a lot of background tiles changed. If I remember correctly, Battletoads makes heavy use of this technique. Something like:<br>
<br>
; in ROM<br>
table:<br>
.byte $00,$0a,$34,$99 ; etc etc<br>
<br>
; in the main loop<br>
ldx #$00<br>
@looper:<br>
lda table, x<br>
pha<br>
inx<br>
cpx #$04 ; whatever the amount of bytes in the table are<br>
bne @looper<br>
<br>
; in nmi<br>
<br>
lda #$20 &#xA0; &#xA0; ; whatever the proper bg address you need to write to is<br>
sta $2006<br>
lda #$00<br>
sta $2006<br>
pla<br>
sta $2007<br>
pla<br>
sta $2007<br>
pla<br>
sta $2007<br>
pla<br>
sta $2007<br>
; etc etc<br>
<br>
I haven&apos;t personally used this, but I have used zeropage to do the same thing. It&apos;s also used at the beginning and end of NMI, which I think you may have already seen before:<br>
<br>
pha<br>
txa<br>
pha<br>
tya<br>
pha<br>
<br>
; all nmi code<br>
<br>
pla<br>
tay<br>
pla<br>
tax<br>
pla<br>
rti<br>
<br>
That just saves all the registers in case your loop happens to take too long. But still, my main use of it is exactly what Rizz said in the first place : )<br>
				</div><div class="mdl-card--border"></div>