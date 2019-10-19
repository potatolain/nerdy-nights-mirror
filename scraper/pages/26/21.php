<div class="mdl-card__title"><strong>cd-wcd-w</strong> posted on June 19, 2005</div><div class="mdl-card__supporting-text">
<p>This is a fairly obvious hack, but here goes ...</p>
<p>&#xA0;</p>
<p>If you want to display more than 2 sprites, you can use the missile and ball graphics to construct pseudo-sprites. Obviously you can only display a limited number of shapes, but if you are clever, you can obtain the appearance of extra flicker-free sprites. The following code fragment illustrates how to draw a man sprite using only missile 0:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">Kernel
       sta WSYNC
       sta HMOVE               ; [0] + 3
               
       ; Draw Sprite (SwitchDraw Variant)
       cpy PSWITCH             ; [3] + 3 
       bpl PSwitch             ; [6] + 2/3
       lda (PPTR),Y            ; [8] + 5
       sta ENAM0               ; [13] + 3
       sta HMM0                ; [16] + 3
       asl                     ; [19] + 2
       asl                     ; [21] + 2
       sta NUSIZ0              ; [23] + 3
PContinue
       dey
       bpl Kernel

       ; SwitchDraw Routines
PSwitch
       bne PWait               ; [9] + 2/3
       lda PEND                ; [11] + 3      
       sta PSWITCH             ; [14] + 3
       SLEEP 6                 ; [17] + 6
       bcs PContinue           ; [23] + 3
PWait
       sta HMCLR               ; [12] + 3
       SLEEP 8                 ; [15] + 8
       bpl PContinue           ; [23] + 3      

; Player Data
; Bit 7-4 = HMove 
; Bit 3-2 = Missile Width (1, 2, 4, or 8 pixels)
; Bit 1-0 = Missile Enable
Player1
       DC.B    %00000000
       DC.B    %00000110
       DC.B    %00000010               
       DC.B    %00000110
       DC.B    %11111010
       DC.B    %00001010
       DC.B    %00001010
       DC.B    %00001010       
       DC.B    %00001010       
       DC.B    %00010010
       DC.B    %00000110
       DC.B    %00000010
       DC.B    %00000110
       DC.B    %11111010
       DC.B    %00001010               
       DC.B    %00010110             
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>I have attached the full code to this message which allows you to move the sprite around the screen.</p>
<p>&#xA0;</p>
<p>Chris</p>
<p><a href="https://atariage.com/forums/applications/core/interface/file/attachment.php?id=35903" data-fileid="35903" data-fileext="zip" rel>msprite.zip</a></p>
</div><div class="mdl-card--border"></div>