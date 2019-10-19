<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Mar 1, 2012 at 12:30:23 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	The trouble comes from the fact that we have two different arbitrarily-sized things (the drawing buffer and the stack) using the same page of RAM. &#xA0;There is a potential for conflict if they cross.</div>
<div>
	&#xA0;</div>
<div>
	The 6502 uses the $0100-$01FF range of RAM for the stack. &#xA0;The bottom of the stack is $01FF and when values are &quot;pushed&quot; onto the stack, they are placed in memory in descending memory addresses. &#xA0;So for example, say we have an empty stack and we push some values to it like this:</div>
<div>
	&#xA0;</div>
<div>
	lda #$01</div>
<div>
	pha</div>
<div>
	lda #$02</div>
<div>
	pha</div>
<div>
	lda #$03</div>
<div>
	pha</div>
<div>
	&#xA0;</div>
<div>
	After this code is executed the stack in memory would look like this:</div>
<div>
	$01FD: #03</div>
<div>
	$01FE: #02</div>
<div>
	$01FF: #01</div>
<div>
	&#xA0;</div>
<div>
	The first value is pushed into $01FF, then the next value into $01FE, and so on in reverse order. &#xA0;That&apos;s what I meant by &quot;counting backwards&quot;.</div>
<div>
	&#xA0;</div>
<div>
	You can push values onto the stack manually with PHA, but the 6502 also pushes things onto the stack automatically behind the scenes. &#xA0;For example, every time you call a subroutine with JSR, the 6502 will push a 2-byte return address onto the stack. &#xA0;This allows the program to know where to return to when it encounters an RTS command.</div>
<div>
	&#xA0;</div>
<div>
	So there is a danger anytime you choose to use the $0100 page of RAM to store game-related variables. &#xA0;If you accidentally overwrite a memory location that is currently in use by the stack, things can go terribly wrong. &#xA0;Look at the following code, assuming an empty stack:</div>
<div>
	&#xA0;</div>
<div>
	jsr my_subroutine</div>
<div>
	&#xA0;</div>
<div>
	; blah blah blah</div>
<div>
	&#xA0;</div>
<div>
	my_subroutine:</div>
<div>
	&#xA0; &#xA0;lda #$00</div>
<div>
	&#xA0; &#xA0;sta $01FF</div>
<div>
	&#xA0; &#xA0;rts</div>
<div>
	&#xA0;</div>
<div>
	Here we call a subroutine with JSR, which pushes a 2-byte address onto the stack at $01FF and $01FE. &#xA0;Then in the subroutine we change the value of $01FF. &#xA0;When the program hits the RTS, it will pop the 2-byte return address off of the stack, but that address will be the wrong address (because we foolishly changed it!).</div>
<div>
	&#xA0;</div>
<div>
	In practice, the stack usually doesn&apos;t grow very deep. &#xA0;Anything pushed onto the stack is usually popped off soon after. &#xA0;I&apos;ve never seen the stack come even close to using all 256 bytes of the $0100 page. &#xA0;Since memory is tight on the NES, it&apos;s quite common for programmers to use the &quot;front&quot; half of the $0100 page for game variables (like a drawing buffer) rather than seeing that RAM go to waste.</div>
<div>
	&#xA0;</div>
<div>
	Hope that clears it up. &#xA0;Let me know if you have any questions or need more clarification.s</div>
				</div><div class="mdl-card--border"></div>