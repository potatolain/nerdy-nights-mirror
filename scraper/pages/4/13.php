<div class="mdl-card__title"><strong>steamx</strong> posted on 
		
			
				
				Aug 27, 2010 at 10:05:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					edit: This is based on this tutorial number 4. You can try it with the next one (that is 5) too, but be sure to understand what i did. It will help you to understand ASM. It is very simple though.)<br>If someone wants multiple sprites (max 8) but has problems you can try this code:<br>
<pre>  LDA #$80<br>  STA $0200        ; put sprite 0 in center ($80) of screen vert<br>  STA $0203        ; put sprite 0 in center ($80) of screen horiz<br>  LDA #$00<br>  STA $0201        ; tile number = 0<br>  STA $0202        ; color = 0, no flipping<br><br>  LDA #$80<br>  STA $0204<br>  LDA #$88<br>  STA $0207<br>  LDA #$01<br>  STA $0205<br>  LDA #$00<br>  STA $0206<br><br>  LDA #$88<br>  STA $0208<br>  LDA #$80<br>  STA $020B<br>  LDA #$02<br>  STA $0209<br>  LDA #$00<br>  STA $020A<br><br>  LDA #$88<br>  STA $020C<br>  LDA #$88<br>  STA $020F<br>  LDA #$03<br>  STA $020D<br>  LDA #$00<br>  STA $020E<br><br>  LDA #$90<br>  STA $0210<br>  LDA #$80<br>  STA $0213<br>  LDA #$04<br>  STA $0211<br>  LDA #$00<br>  STA $0212<br><br>  LDA #$90<br>  STA $0214<br>  LDA #$88<br>  STA $0217<br>  LDA #$05<br>  STA $0215<br>  LDA #$00<br>  STA $0216<br><br>  LDA #$98<br>  STA $0218<br>  LDA #$80<br>  STA $021B<br>  LDA #$06<br>  STA $0219<br>  LDA #$00<br>  STA $021A<br><br>  LDA #$98<br>  STA $021C<br>  LDA #$88<br>  STA $021F<br>  LDA #$07<br>  STA $021D<br>  LDA #$00<br>  STA $021E<br><br>  LDA #%10000000   ; enable NMI, sprites from Pattern Table 0<br>  STA $2000<br><br>  LDA #%00010000   ; enable sprites<br>  STA $2001<br></pre><br> Replace it with the original code and you&apos;ll get a full Mario who is prepared to jump <img src="/media/_images/expressions/face-icon-small-wink.gif" border="0" style="display: none;"><br>Oh by the way a question. How did they include the enemies and other sprites? With a mapper or did they use tiles?<br><br>P.S.: Replace the first 4 numbers of your sprite palette with $0F,$16,$27,$18 and you&apos;ll get a Mario that is as close as possible to the original (they do have a small color difference. Maybe because of PAL and NTSC. I don&apos;t know)<br>
				</div><div class="mdl-card--border"></div>