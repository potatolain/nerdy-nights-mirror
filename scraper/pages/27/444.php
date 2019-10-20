<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Dec 13, 2014 at 6:19:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	I have read that document 4 or 5 times now, I still don&apos;t seem to grasp the later stuff. I&apos;d show you my code, if it were not a cluster fuck. I&apos;ll go through it again and see if I can get it to work, or at least clean it up a bit.<br>
	<br>
	I knew about the clamping BTW, I just have trouble doing it. Not for the positive numbers, but the negative. Obviously it&apos;s something that I don&apos;t grasp yet, but I&apos;m starting to feel like a retard over here.<br>
	<br>
	<pre>  LDA NUM1L ; NUM1-NUM2
  CMP NUM2L
  LDA NUM1H
  SBC NUM2H
  BVC LABEL ; N eor V
  EOR #$80
LABEL</pre>
	What is the use of CMP here? Wouldn&apos;t the zero flag get mangled by LDA NUM1H?</div>
Zero flag yeah, but CMP also sets the carry flag, which gets used by SBC. In any case, you don&apos;t really need to understand how the code works to use it.<br>
<br>
Here&apos;s a macro (ca65) for signed 16-bit clamping that I&apos;ve used a couple of times:<br>
<pre>; NOTE: min and max have to be immediates, but without #
.macro signed_clamp16 addr, min, max, offs1
    .local HIBYTE_OFFSET_1, is_greater_than_min, is_less_than_or_equ_to_max, out
    .ifblank offs1
        HIBYTE_OFFSET_1 = 1
    .else
        HIBYTE_OFFSET_1 = offs1
    .endif
    ; this is a signed 16bit compare which leaves the result in N flag
    ; so BMI will branch if param1 &lt;= param2
    ; and BPL will branch if param1 &gt; param2
    
    ; First check if &quot;addr&quot; is bigger than &quot;min&quot;.
    lda addr
    cmp #&lt;(min)
    lda HIBYTE_OFFSET_1+addr
    sbc #&gt;(min)
    bvc :+
    eor #$80
:
    bpl is_greater_than_min
    ; Less than minimum, clamp.
    lda #&lt;(min)
    sta addr
    lda #&gt;(min)
    sta HIBYTE_OFFSET_1+addr
    jmp out
    
is_greater_than_min:
    ; Now check if &quot;addr&quot; is smaller than &quot;max&quot;.
    lda addr
    cmp #&lt;(max)
    lda HIBYTE_OFFSET_1+addr
    sbc #&gt;(max)
    bvc :+
    eor #$80
:
    bmi is_less_than_or_equ_to_max
    ; Bigger than maximum, clamp.
    lda #&lt;(max)
    sta addr
    lda #&gt;(max)
    sta HIBYTE_OFFSET_1+addr
    
is_less_than_or_equ_to_max:
    ; If we branched here, min &lt; addr &lt; max
    
out:
.endmacro<br><br>; Usage example:
signed_clamp16 variable, -123, 123
</pre>
There&apos;s a lot that can go wrong when messing with numbers, no shame in that. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
				</div><div class="mdl-card--border"></div>