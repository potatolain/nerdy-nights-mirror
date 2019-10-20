<div class="mdl-card__title"><strong>Broke Studio</strong> posted on 
		
			
				
				Jun 30, 2016 at 11:57:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Why not use two tables ? one for LSBs and one for MSBs.<br>
&#xA0;
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">CutSceneDialogLo:<br>
;cutscene 1<br>
.byte&#xA0;<span style="line-height: 20.8px; background-color: rgb(238, 238, 238);">&lt;dialog00,&lt;dialog01,&lt;dialog02,&lt;dialog03,&lt;dialog04,&lt;dialog05,&lt;dialog06,&lt;dialog07,&lt;dialog08,&lt;dialog09</span><dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09<br><br>
CutSceneDialogHi:<br>
;cutscene 1<br>
.byte &gt;dialog00,&gt;dialog01,&gt;dialog02,&gt;dialog03,&gt;dialog04,&gt;dialog05,&gt;dialog06,&gt;dialog07,&gt;dialog08,&gt;dialog09<br>
<br>
LDX CutSceneCounter ;Load X with $80<br>
LDA CutSceneDialogLo,x ;Load the CutSceneDialogLo,$80<br>
STA CutScenePointer+0 ;Store in Pointer Low<br>
LDA CutSceneDialogHi,x ;Load the CutSceneDialog+1,$80<br>
STA CutScenePointer+1 ;Store in Pointer High<br>
;Rest of code until RTS</dialog00,<dialog01,<dialog02,<dialog03,<dialog04,<dialog05,<dialog06,<dialog07,<dialog08,<dialog09<br></div>
<br>
edit : formatting
				</div><div class="mdl-card--border"></div>