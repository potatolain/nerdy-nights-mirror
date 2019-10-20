<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 23 at 9:18:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<span style="font-size: 11px;">ShipLookupTable: ;values</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $00,$00 ;up</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $02,%01000000 ;up/right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $01,%01000000 ;right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $02,%11000000 ;down/right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $00,%10000000 ;down</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $02;%01000000 ;down/left</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $01,$00 ;left</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $02,$00 ;up/left<br>
<br>
ShipLookupTable: ;positions (not actually in the game code. just writing for clarity&apos;s sake)</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $00,$01 ;up</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $02,$03 ;up/right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $04,$05 ;right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $06,$07 ;down/right</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $08,$09 ;down</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $0A,$0B ;down/left</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $0C,$0D ;left</span><br style="box-sizing: border-box; font-size: 11px;">
<span style="font-size: 11px;">&#xA0; .db $0E,$0F ;up/left<br>
<br>
If we load ShipLookupTable, it will be looking at the first value under ShipLookupTable. Position 0. The value just happens to also be $00. Bad example.<br>
<br>
The way I&apos;m looking up ShipLookupTable in the code I sent a few posts ago, I&apos;m offsetting that by Y.<br>
<br>
LDA ShipLookupTable,y<br>
<br>
What this means is look up ShipLookupTable+y.<br>
<br>
In this code, we are setting ShipDirection to Y and using that to tell us where in the table we want to use the values from.<br>
<br>
So let&apos;s say ShipDirection is $06 and we load that into Y and then we LDA ShipLookupTable,y. That would be looking at the 6th position in the table. If we look at our positions table (which I&apos;ve just written for clarity&apos;s sake and wouldn&apos;t actually be in the game code) we can see that is the first value of down/right, which is actually $02 if we look in the actual ShipDirection table. LDA ShipLookupTable,y would be $02.<br>
<br>
LDA ShipLookupTable+1,y will load the value AFTER ShipLookupTable,y, because Y doesn&apos;t change. That would be looking at position 7, which is the palette attribute byte of down/right, which is %11000000.<br>
<br>
So everything is basically automatic in the code I wrote. You&apos;re pressing a direction, it&apos;s running a delay timer so that it is facing a single direction for more than a single frame, then it&apos;s incrementing or decrementing ShipDirection by 2 to get to the next row of values in the table and using those values to 1) store the sprite tile and 2) store the sprite attribute byte.<br>
<br>
No idea if you already understood this stuff, but it sounded like you might need more explanation on it so I tried to break it down more. If there&apos;s anything specific you&apos;re struggling with please let me know.</span>
				</div><div class="mdl-card--border"></div>