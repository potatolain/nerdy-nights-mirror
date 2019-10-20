<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jun 30, 2016 at 11:15:30 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So, I&apos;ve done the research, I know the issue, I have fixed the problem but I would like to know if there is a better way. Basically, I&apos;m running into wrap-around when accessing pointer tables when the loading variable reaches $80. When I &apos;ASL A&apos; the value, it wraps-around to $00 and starts my dialog back over from the beginning of the game. Here is the problem code when CutSceneCounter = $80<br>
<br>
&#xA0;&#xA0;&#xA0; LDA CutSceneCounter &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;Load A with $80<br>
&#xA0;&#xA0; &#xA0;ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;multiply $80 by two = $00<br>
&#xA0;&#xA0; &#xA0;TAX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;write $00 to X<br>
&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA CutSceneDialog,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog,$00<br>
&#xA0;&#xA0; &#xA0;STA CutScenePointer&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer Low<br>
&#xA0;&#xA0; &#xA0;LDA CutSceneDialog+1,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog+1,$00<br>
&#xA0;&#xA0; &#xA0;STA CutScenePointer+1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer High<br>
&#xA0;&#xA0; ;Rest of code until RTS<br>
<br>
<br>
CutSceneDialog:<br>
&#xA0;&#xA0; &#xA0;;cutscene 1<br>
&#xA0;&#xA0; &#xA0;.word dialog00,dialog01,dialog02,dialog03,dialog04,dialog05,dialog06,dialog07,dialog08,dialog09<br>
&#xA0;&#xA0; &#xA0;;cutscene 2<br>
&#xA0;&#xA0; &#xA0;.word dialog0A,dialog0B,dialog0C,dialog0D,dialog0E,dialog0F,dialog10,dialog11<br>
&#xA0;&#xA0; &#xA0;;cutscene 3<br>
&#xA0;&#xA0; &#xA0;.word dialog12,dialog13,dialog14,dialog15,dialog16,dialog17,dialog18,dialog19<br>
&#xA0;&#xA0; &#xA0;;cutscene 4<br>
&#xA0;&#xA0; &#xA0;.word dialog1A,dialog1B,dialog1C,dialog1D,dialog1E,dialog1F,dialog20,dialog21,dialog22,dialog23&#xA0;&#xA0; &#xA0;<br>
&#xA0;&#xA0; &#xA0;;cutscene 5<br>
&#xA0;&#xA0; &#xA0;.word dialog24,dialog25,dialog26,dialog27,dialog28,dialog29,dialog2A,dialog2B,dialog2C,dialog2D,dialog2E,dialog2F<br>
&#xA0;&#xA0; &#xA0;;cutscene 6<br>
&#xA0;&#xA0; &#xA0;.word dialog30,dialog31,dialog32,dialog33,dialog34,dialog35,dialog36,dialog37,dialog38,dialog39,dialog3A,dialog3B,dialog3C,dialog3D,dialog3E,dialog3F<br>
&#xA0;&#xA0; &#xA0;.word dialog40,dialog41,dialog42,dialog43,dialog44,dialog45,dialog46,dialog47<br>
&#xA0;&#xA0; &#xA0;;cutscene 7<br>
&#xA0;&#xA0; &#xA0;.word dialog48,dialog49,dialog4A,dialog4B,dialog4C,dialog4D,dialog4E,dialog4F,dialog50,dialog51<br>
&#xA0;&#xA0; &#xA0;;cutscene 8<br>
&#xA0;&#xA0; &#xA0;.word dialog52,dialog53,dialog54,dialog55,dialog56,dialog57,dialog58,dialog59,dialog5A,dialog5B,dialog5C,dialog5D,dialog5E,dialog5F<br>
&#xA0;&#xA0; &#xA0;.word dialog60,dialog61,dialog62,dialog63,dialog64,dialog65,dialog66,dialog67,dialog68,dialog69,dialog6A,dialog6B,dialog6C,dialog6D,dialog6E,dialog6F<br>
&#xA0;&#xA0; &#xA0;.word dialog70,dialog71,dialog72,dialog73,dialog74,dialog75,dialog76,dialog77<br>
&#xA0;&#xA0; &#xA0;;cutscene end<br>
&#xA0;&#xA0; &#xA0;.word dialog78,dialog79,dialog7A,dialog7B,dialog7C,dialog7D,dialog7E,dialog7F<br>
&#xA0;&#xA0;&#xA0; ;Start of Issue<br>
&#xA0;&#xA0; &#xA0;.word dialog80,dialog81,dialog82,dialog83,dialog84,dialog85,dialog86,dialog87,dialog88,dialog89<br>
<br>
As you can see, this results in the pointer looking at dialog00 in the table instead of dialog80.<br>
******<br>
This was my quick and easy solution:<br>
&#xA0;&#xA0;&#xA0; LDA CutSceneCounter &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;Load A with $80<br>
&#xA0;&#xA0; &#xA0;ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;multiply $80 by two = $00<br>
&#xA0;&#xA0; &#xA0;TAX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;write $00 to X<br>
&#xA0;&#xA0;&#xA0; BCS&#xA0;&#xA0; .table2&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;If carry flag was set, branch to table 2 (Carry flag is set when CutSceneCounter is $80-$FF)<br>
&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA CutSceneDialog,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog,$00<br>
&#xA0;&#xA0; &#xA0;STA CutScenePointer&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer Low<br>
&#xA0;&#xA0; &#xA0;LDA CutSceneDialog+1,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog+1,$00<br>
&#xA0;&#xA0; &#xA0;STA CutScenePointer+1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer High<br>
&#xA0; &#xA0; JMP .tabledone&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;skip over loading from table2<br>
<br>
&#xA0;&#xA0;&#xA0; .table2:<br>
&#xA0;&#xA0; &#xA0; &#xA0;&#xA0; LDA CutSceneDialog2,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog2,$00<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA CutScenePointer&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer Low<br>
&#xA0; &#xA0; &#xA0; &#xA0; LDA CutSceneDialog2+1,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the CutSceneDialog2+1,$00<br>
&#xA0; &#xA0; &#xA0; &#xA0; STA CutScenePointer+1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Store in Pointer High&apos;<br>
&#xA0;&#xA0;&#xA0; .tabledone:<br>
&#xA0;&#xA0; ;Rest of code until RTS<br>
<br>
CutSceneDialog:<br>
&#xA0;&#xA0; .word dialog00-dialog7F ;(like in the table in the first coding example, just shortened to avoid Wall O&apos; Text)<br>
CutSceneDialog2:<br>
&#xA0;&#xA0; .word dialog80,dialog81,dialog82,dialog83,dialog84,dialog85,dialog86,dialog87,dialog88,dialog89<br>
<br>
Now I am looking at the 0 spot of CutSceneDialog2 table when the carry flag is set. Is this the best way to handle this or did I pretty much do all that I can do. I read a lot about Absolutes, but couldn&apos;t figure out how to apply that to this situation.<br>
<br>
Side Question, how can I put my code in those fancy code copy\paste friendly boxes in a post like bunnyboy does in Nerdy Nights? Thanks!
				</div><div class="mdl-card--border"></div>