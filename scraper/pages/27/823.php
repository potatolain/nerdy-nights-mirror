<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jun 30, 2016 at 1:03:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>glutock</b></i><br>
<br>
Why not use two tables ? one for LSBs and one for MSBs.<br>
&#xA0;
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">CutSceneDialogLo:<br>
;cutscene 1<br>
.byte&#xA0;<span style="line-height: 20.8px; background-color: rgb(238, 238, 238);"><dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09< span><dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09<br><br>
CutSceneDialogHi:<br>
;cutscene 1<br>
.byte &gt;dialog00,&gt;dialog01,&gt;dialog02,&gt;dialog03,&gt;dialog04,&gt;dialog05,&gt;dialog06,&gt;dialog07,&gt;dialog08,&gt;dialog09<br>
<br>
LDX CutSceneCounter ;Load X with $80<br>
LDA CutSceneDialogLo,x ;Load the CutSceneDialogLo,$80<br>
STA CutScenePointer+0 ;Store in Pointer Low<br>
LDA CutSceneDialogHi,x ;Load the CutSceneDialog+1,$80<br>
STA CutScenePointer+1 ;Store in Pointer High<br>
;Rest of code until RTS</dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09<br></dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09<></span></div>
<br>
edit : formatting</div>
<br>
Can you explain this a bit more. Will the &lt; &gt; signs work in NESASM or is there something else I have to do? Can&apos;t say I have ever used those before. That&apos;s going to be a good chunk of rom with 2 tables.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>