<div class="mdl-card__title"><strong>Broke Studio</strong> posted on 
		
			
				
				Aug 24, 2015 at 6:36:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi everyone,<br>
<br>
(sorry for the long post but I wasn&apos;t able to upload files, I get an error message)<br>
I&apos;ve got a status bar which is working fine (with sprite 0 hit) here&apos;s the code in NMI routine :<br>
<br>
&#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; STA $2006<br>
<br>
&#xA0; &#xA0; STA $2005<br>
&#xA0; &#xA0; STA $2005<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch CHR bank<br>
&#xA0; &#xA0; LDA #$03<br>
&#xA0; &#xA0; TAX<br>
&#xA0; &#xA0; STA bankTable,X<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch nametable to $2400<br>
&#xA0; &#xA0; LDA ctrl_var<br>
&#xA0; &#xA0; EOR #%00000001<br>
&#xA0; &#xA0; STA $2000<br>
<br>
@WaitNotSprite0:<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA $2002<br>
&#xA0; &#xA0; &#xA0; &#xA0; AND #%01000000<br>
&#xA0; &#xA0; &#xA0; &#xA0; BNE @WaitNotSprite0 &#xA0; ; wait until sprite 0 not hit<br>
<br>
@WaitSprite0:<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA $2002<br>
&#xA0; &#xA0; &#xA0; &#xA0; AND #%01000000<br>
&#xA0; &#xA0; &#xA0; &#xA0; BEQ @WaitSprite0 &#xA0; &#xA0; &#xA0;; wait until sprite 0 is hit<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDX #$10<br>
@WaitScanline:<br>
&#xA0; &#xA0; &#xA0; &#xA0; DEX<br>
&#xA0; &#xA0; &#xA0; &#xA0; BNE @WaitScanline<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch CHR bank<br>
&#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; TAX<br>
&#xA0; &#xA0; STA bankTable,X<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch nametable back $2000<br>
&#xA0; &#xA0; LDA ctrl_var<br>
&#xA0; &#xA0; STA $2000<br>
<br>
Everything&apos;s fine for now.<br>
<br>
What I&apos;d like to do is to swap some colors in the palette for the status bar, and put the original colors back for the rest of the screen.<br>
<br>
I manage to do this BUT instead of having the $2000 nametable starting &quot;below&quot; the status bar, it begins &quot;under&quot; the status bar. Am I clear ? (not sure ...)<br>
<br>
Here&apos;s the code I used :<br>
<br>
&#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; STA $2006<br>
<br>
&#xA0; &#xA0; STA $2005<br>
&#xA0; &#xA0; STA $2005<br>
; PALETTE SWAP<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA #$3f<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA #$01<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA #$30<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA $2007<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA $2006<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch CHR bank<br>
&#xA0; &#xA0; LDA #$03<br>
&#xA0; &#xA0; TAX<br>
&#xA0; &#xA0; STA bankTable,X<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch nametable to $2400<br>
&#xA0; &#xA0; LDA ctrl_var<br>
&#xA0; &#xA0; EOR #%00000001<br>
&#xA0; &#xA0; STA $2000<br>
<br>
@WaitNotSprite0:<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA $2002<br>
&#xA0; &#xA0; &#xA0; &#xA0; AND #%01000000<br>
&#xA0; &#xA0; &#xA0; &#xA0; BNE @WaitNotSprite0 &#xA0; ; wait until sprite 0 not hit<br>
<br>
@WaitSprite0:<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA $2002<br>
&#xA0; &#xA0; &#xA0; &#xA0; AND #%01000000<br>
&#xA0; &#xA0; &#xA0; &#xA0; BEQ @WaitSprite0 &#xA0; &#xA0; &#xA0;; wait until sprite 0 is hit<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDX #$10<br>
@WaitScanline:<br>
&#xA0; &#xA0; &#xA0; &#xA0; DEX<br>
&#xA0; &#xA0; &#xA0; &#xA0; BNE @WaitScanline<br>
<br>
&#xA0; &#xA0; LDA #%00000001 &#xA0;; rendering disabled + grayscale<br>
&#xA0; &#xA0; STA $2001<br>
<br>
; PALETTE SWAP<br>
&#xA0; &#xA0; LDA #$3F<br>
&#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; LDA #$01<br>
&#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; LDA #$1A<br>
&#xA0; &#xA0; STA $2007<br>
<br>
&#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; STA $2006<br>
&#xA0; &#xA0; STA $2006<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch CHR bank<br>
&#xA0; &#xA0; LDA #$00<br>
&#xA0; &#xA0; TAX<br>
&#xA0; &#xA0; STA bankTable,X<br>
<br>
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; switch nametable back $2000<br>
&#xA0; &#xA0; LDA ctrl_var<br>
&#xA0; &#xA0; STA $2000<br>
<br>
I guess I&apos;m doing something wrong, writing to a wrong register, or forgetting to write to a register ...<br>
&#xA0;
				</div><div class="mdl-card--border"></div>