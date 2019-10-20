<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Apr 22, 2014 at 7:38:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Right on! Now, to show you why this is so helpful, I&apos;ll make a short bit o&apos; code for you to check out. If you already understand what I&apos;m about to post, then cool, maybe it will help someone else hehe Anywho, let&apos;s use palettes as an example. And let&apos;s say for every level in the game, you have a different full 32 byte palette that you want to use. The typical way for a small game is to just do something like this:<br>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	<code>ldx #$00</code></div>
<div>
	<code>:<span class="Apple-tab-span"> </span>lda palette_address, x</code></div>
<div>
	<code>sta $2007</code></div>
<div>
	<code>inx</code></div>
<div>
	<code>cpx #$20</code></div>
<div>
	<code>bne :-</code></div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	Well now (assuming this is while rendering is off), someone could do this:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	<div>
		<code>ldx current_level</code></div>
	<div>
		<code>lda palette_table_lo, x</code></div>
	<div>
		<code>sta palette_addy+0</code></div>
	<div>
		<code>lda palette_table_hi, x</code></div>
	<div>
		<code>sta palette_addy+1</code></div>
	<div>
		<code>&#xA0;</code></div>
	<div>
		<code>lda #$3f</code></div>
	<div>
		<code>sta $2006</code></div>
	<div>
		<code>lda #$00</code></div>
	<div>
		<code>sta $2006</code></div>
	<div>
		<code>ldy #$00</code></div>
	<div>
		<code>:<span class="Apple-tab-span"> </span>lda (palette_addy), y</code></div>
	<div>
		<code>sta $2007</code></div>
	<div>
		<code>iny</code></div>
	<div>
		<code>cpy #$20</code></div>
	<div>
		<code>bne :-</code></div>
</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	And then in ROM, you have two tables set up, and the order in which your palettes go according to the game engine:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	<code>palette_table_lo:</code></div>
<div>
	<code>.byte &lt;<palette_lvl1, div>palette_lvl1, &lt;palette_lvl2, &lt;palette_lvl3, &lt;palette_lvl4
	<div>
		palette_table_hi:</div>
	<div>
		.byte &gt;palette_lvl1, &gt;palette_lvl2, &gt;palette_lvl3, &gt;palette_lvl4</div>
	</palette_lvl1,></code>
	<div>
		&#xA0;</div>
	<div>
		&#xA0;</div>
	<div>
		And those two tables are pointing, with the low and the high addresses, to each 32 byte palette that you have stored:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0;</div>
	<div>
		<code>palette_lvl1:</code></div>
	<div>
		<code>.byte $0f,$07,$04,$0f, $0f,$07,$19,$0f, $0f,$0c,$04,$0f, $0f,$00,$27,$16</code></div>
	<div>
		<code>.byte $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f</code></div>
	<div>
		<code>palette_lvl2:</code></div>
	<div>
		<code>.byte $0f,$00,$10,$30, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f</code></div>
	<div>
		<code>.byte $0f,$00,$10,$30, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f, $0f,$0f,$0f,$0f</code></div>
	<div>
		<code>palette_lvl3:</code></div>
	<div>
		<code>; etc</code></div>
	<div>
		<code>palette_lvl4:</code></div>
	<div>
		<code>; etc</code></div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0;</div>
	<div>
		So then, when a level is finished and you are ready to start loading the next level, you just increment the variable current_level. So the first time X would grab the low and high bytes of palette_lvl1, because the offset of current_level was at zero. &#xA0;Then when loading the next level, palette_lvl2, the low and high bytes of the address, will be loaded by X because current_level is used as the offset, and it is at 1 now. Etc etc.</div>
	<div>
		&#xA0;</div>
	<div>
		Hopefully that wasn&apos;t too much to digest, but I think learning this kind of concept early is REALLY helpful and will help set up programs with more ease than what some might think is possible when learning.</div>
</div>
<br>
EDIT: Put missing bytes from the palette_table_lo table. Seems like NA&apos;s rendering of the code tag isn&apos;t all that haha
				</div><div class="mdl-card--border"></div>