<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 8, 2017 at 1:03:00 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>pk space jam</b></i><br>
<br>
So I could use a little help, I was told that my code was doing most of it&apos;s logic in the NMI which is generally frowned upon, I&apos;m trying to rearrange the code as so that is not so, I managed to get the file to compile, but now lost my ability to move sprites, if anyone would be willing to help me grokk this out I would really appreciate it, Assembly is hard lol <a href="https://hastebin.com/wahulohivi.pl" target="_blank" original-href="https://hastebin.com/wahulohivi.pl">https://hastebin.com/wahulohivi.pl</a></div>
<br>
<br>
Ok, so there are some issues in that code.<br>
<br>
First off, you need your RTI to go right after your NMI is complete. It is how the system know that you are finished with the NMI. Right now you have it after GameEngineDone:. It needs to be after &apos;;;;all graphics updates done by here, run game engine&apos;.<br>
<br>
Second, you really should Push and Pull your registers as ubuntuyou shows above. This preserves any values that are in them before your forever loop runs.<br>
<br>
Third, you have this twice, you only need it once:
<pre class="hljs" id="box" style tabindex="0"><code>  .org $FFFA     ;first of the three vectors starts here
  .dw NMI        ;<span class="hljs-keyword">when</span> an NMI happens (once per frame <span class="hljs-keyword">if</span> enabled) the 
                   ;processor will jump to the label NMI:
  .dw RESET      ;<span class="hljs-keyword">when</span> the processor first turns on <span class="hljs-keyword">or</span> is <span class="hljs-keyword">reset</span>, it will jump
                   ;to the label RESET:
  .dw <span class="hljs-number">0</span>          ;external interrupt IRQ is <span class="hljs-keyword">not</span> used in this tutorial
</code></pre>
It&apos;s best to keep this code in the bank with $E000 (in your case, bank 3).<br>
<br>
Forth, All of your game engine code needs to happen between Forever: and JMP Forever. Here is my exact Forever Loop and NMI. This is the backbone that runs the entire game. All my setup code happens before the Forever loop, such as the RESET:, clrmem, turn on the NMI and PPU, etc.
<pre>;Game Setup Code Goes Here.
;----------------------------------------------------------------------
;-----------------------START MAIN PROGRAM-----------------------------
;---------------------------------------------------------------------- 
Forever:
  INC sleeping                     ;wait for NMI<br><br>.loop
  LDA sleeping
  BNE .loop                        ;wait for NMI to clear out the sleeping flag<br><br>  LDA #$01
  STA updating_background          ;this is for when you are changing rooms or something, not really needed here
                                   ;it will skip the NMI updates so as not to mess with your room loading routines<br><br>  JSR ReadController1  ;;get the current button data
  JSR ReadController2  ;I like to read my controllers right after the NMI so save PPU time.<br><br>  JSR GameStateIndirect     ;THIS IS MY GAME ENGINE. Everything happens here, sprite movement, enemy movement, etc.<br><br>  LDA GameState
  CMP GameStateOld
  BEQ .next
     JSR GameStateUpdate        ;These last 4 lines update my game states. This code is from Mario&apos; Right Nut&apos;s Tutorials.
.next<br><br>  LDA #$00
  STA updating_background<br><br>  JMP Forever     ;jump back to Forever, and go back to sleep<br><br>
;--------------------------------------------------------------
;-----------------------NMI ROUTINE----------------------------
;--------------------------------------------------------------
NMI:
  PHA                              ;protect the registers by moving values to the stack
  TXA
  PHA
  TYA
  PHA<br><br>nmi_start:                          ;write Sprite RAM
  LDA #$00
  STA $2003                        ; set the low byte (00) of the RAM address
  LDA #$02
  STA $4014                            ;Set High byte of sprite RAM<br><br>  LDA updating_background          ;check to be sure that the main program isn&apos;t busy
  BNE skip_graphics_updates<br><br>  JSR GameStateNMIIndirect       ;This runs NMI Specific code based on what game state I am in, Title, Playing, Credits, etc<br><br>  LDA #$00                            ;tell the ppu there is no background scrolling
  STA $2005
  STA $2005<br><br>  LDA #%10010000                    ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
  ORA NameTableFlag                   
  STA $2000<br><br>  LDA EnablePPUFlag
  BEQ .SKIP
    LDA #%00011110                   ;enable sprites, enable background, no clipping on left side
    STA $2001   
    DEC EnablePPUFlag
  .SKIP:<br><br>  LDA MusicBank
  JSR Bankswitch
    jsr FamiToneUpdate                ;*MUSIC
  LDA #$00            ;start in bank 0
  JSR Bankswitch<br><br>  LDA #$00
  STA sleeping                     ;wake up the main program  (start forever loop)<br><br>skip_graphics_updates:<br><br>  PLA                              ;restore the registers
  TAY
  PLA
  TAX
  PLA<br><br>  RTI                              ;return from interrupt</pre><br><br><p><br>
<br>
You have it all there, you just need to reorder some of it. Hopefully, this points you in the right direction. This was a pretty big hurdle for me to clear when I was learning. I still remember the day it all clicked.<br>
&#xA0;</p>
				</div><div class="mdl-card--border"></div>