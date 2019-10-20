<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Sep 9, 2015 at 12:52:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m pretty sure the only directives I ever use are:<br>
<br>
&#xA0; .db (I use this for a series of 8-bit bytes).<br>
<br>
For example:<br>
<br>
Sample:<br>
&#xA0; LDX<br>
.Loop:<br>
&#xA0; LDA Stuff,x<br>
&#xA0; INX<br>
&#xA0; CPX #$04<br>
&#xA0; BNE .Loop<br>
&#xA0; RTS<br>
<br>
Stuff:<br>
&#xA0; .db $80,$30,$24,$38<br>
<br>
But .db is only for 8-bit values. For 16-bit values you need to use either .dw or .word.<br>
<br>
&#xA0; .dw/.word (16-bit values, pointer tables, etc... .dw and .word are interchangeable)<br>
<br>
For example:<br>
<br>
GetBackground:<br>
&#xA0; LDA BG_ptr<br>
&#xA0; ASL A<br>
&#xA0; TAY<br>
&#xA0; LDA Background_Pointer_Table,y<br>
&#xA0; STA AddrLow<br>
&#xA0; LDA Background_Pointer_Table+1,y<br>
&#xA0; STA AddrHigh<br>
;;etc<br>
&#xA0; RTS<br>
<br>
Background_Pointer_Table:<br>
&#xA0; .dw Title, Gameplay, GameOver<br>
<br>
Other than that I will use<br>
<br>
.include whatever.asm (include any non-binary file)<br>
.incbin whatever.bin (include any binary file)<br>
.org (I think the official definition of this is to set the location counter. I look at it as setting a load address)<br>
<br>
And then another useful directive to use is .ifdef/.else/.endif which basically allows you to set parameters of if/then/else. I use this when setting the mapper number or if I create a demo version of my game.<br>
<br>
For example:<br>
<br>
GTROM .EQU 1<br>
<br>
&#xA0; .ifdef GTROM (if GTROM isn&apos;t commented out, do this)<br>
&#xA0; .inesmap 2 ; mapper 2 = UNROM<br>
&#xA0; .else (if GTROM is commented out, skip to this)<br>
&#xA0; .inesmap 30 ; mapper 30 = UNROM512<br>
&#xA0; .endif (end of this .ifdef)
				</div><div class="mdl-card--border"></div>