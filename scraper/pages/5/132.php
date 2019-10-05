<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 9, 2015 at 10:22:56 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	I am at a loss; how do I get the sprite to move up and down I tried adding ReadUp:<br>
	LDA $4016<br>
	AND #%00000001<br>
	BEQ ReadUpDone<br>
	<br>
	LDA $0200<br>
	SEC<br>
	SBC #$01<br>
	STA $0200<br>
	ReadUpDone:<br>
	<br>
	<br>
	ReadDown:<br>
	LDA $4016<br>
	AND #%00000001<br>
	BEQ ReadDownDone<br>
	<br>
	LDA $0200<br>
	CLC<br>
	ADC #$01<br>
	STA $0200<br>
	ReadDownDone:<br>
	, but that does not work is there another directive I need to add or change. Could someone point me in the right direction or tell me ?</div>
<br>
1. Did you put this before?<br>
<pre><span>  LDA #$01</span>
<span>  STA $4016</span>
<span>  LDA #$00</span>
<span>  STA $4016     ; tell both the controllers to latch buttons</span><br><br>2. Try pushing A and B buttons. <span class="sprites_emoticons absmiddle" id="emo_wink"></span>
</pre>
<p>
	I hope this helps. <span class="sprites_emoticons absmiddle" id="emo_smile"></span></p>
<br>
				</div><div class="mdl-card--border"></div>