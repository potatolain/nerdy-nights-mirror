<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 22 at 2:43:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
You&apos;re only storing a variable that keeps track of where on the table you currently are.<br>
<br>
I&apos;m not sure how you&apos;re doing controller reads, but I&apos;ll post code here like is described in one of the later nerdy nights tutorials, week 7, as &quot;Better Controller Reading.&quot;<br>
<br>
Buttons: .rs 1 ;current button presses<br>
MovementTimer: .rs 1 ;timer that needs to be reached in order for movement to begin<br>
ShipDirection: .rs 1 ;current position on our lookup table for the ship direction<br>
<br>
MoveShip:<br>
&#xA0; LDA Buttons ;load buttons variable<br>
&#xA0; AND #%00100000 ;only keep Left bit<br>
&#xA0; BEQ .TryRight ;if Left isn&apos;t held, branch to try Right<br>
;;left is held<br>
&#xA0; INC MovementTimer ;increment movement timer<br>
&#xA0; LDA MovementTimer ;load increment timer<br>
&#xA0; CMP #$xx ;compare to whatever value you want<br>
&#xA0; BCC .End ;if it&apos;s less than this, go to end<br>
&#xA0; DEC ShipDirection ;decrement ship direction x2<br>
&#xA0; DEC ShipDirection<br>
&#xA0; LDA ShipDirection ;check to see if ShipDirection has wrapped around the table<br>
&#xA0; CMP #$FE<br>
&#xA0; BNE .Rotate ;if it hasn&apos;t jump to Rotate<br>
&#xA0; LDA #$0E<br>
&#xA0; STA ShipDirection ;reset ShipDirection to the highest starting value (you&apos;ll change this number when you add more directions to your table)<br>
&#xA0; JMP .Rotate ;jump to Rotate<br>
.TryRight:<br>
&#xA0; LDA Buttons ;load buttons variable<br>
&#xA0; AND #%00010000 ;only keep Right bit<br>
&#xA0; BEQ .Reset ;if Right isn&apos;t held, branch to Reset to reset the MovementTimer variable since button isn&apos;t pressed<br>
;;right is held<br>
&#xA0; INC MovementTimer ;increment movement timer<br>
&#xA0; LDA MovementTimer ;load increment timer<br>
&#xA0; CMP #$xx ;compare to whatever value you want<br>
&#xA0; BCC .End ;if it&apos;s less than this, go to end<br>
&#xA0; INC ShipDirection ;increment ship direction x2<br>
&#xA0; INC ShipDirection<br>
&#xA0; LDA ShipDirection ;check to see if ShipDirection has wrapped around the table<br>
&#xA0; CMP #$10<br>
&#xA0; BNE .Rotate ;if it hasn&apos;t, jump to Rotate<br>
&#xA0; LDA #$00<br>
&#xA0; STA ShipDirection ;reset ShipDirection to the lowest starting value<br>
.Rotate:<br>
&#xA0; LDY ShipDirection ;load ShipDirection in the Y register<br>
&#xA0; LDA ShipLookupTable,y ;look at the sprite for the current direction using the Y register as the offset<br>
&#xA0; STA $0201 ;store<br>
&#xA0; LDA ShipLookupTable+1,y ;look at the attribute data for this direction<br>
&#xA0; STA $0202 ;store<br>
&#xA0; JMP .Reset ;reset MovementTimer<br>
.End:<br>
&#xA0; RTS<br>
.Reset:<br>
&#xA0; LDA #$00 ;reset the timer if Left or Right isn&apos;t pressed<br>
&#xA0; STA MovementTimer<br>
&#xA0; RTS<br>
<br>
ShipLookupTable:<br>
&#xA0; .db $00,$00 ;up<br>
&#xA0; .db $02,%01000000 ;up/right<br>
&#xA0; .db $01,%01000000 ;right<br>
&#xA0; .db $02,%11000000 ;down/right<br>
&#xA0; .db $00,%10000000 ;down<br>
&#xA0; .db $02;%01000000 ;down/left<br>
&#xA0; .db $01,$00 ;left<br>
&#xA0; .db $02,$00 ;up/left<br>
<br>
A better solution would probably be to move the Rotate part of the subroutine to its own subroutine that&apos;s constantly called so that when you implement de-accelaration (making the ship slowly stop spinning when you release the button) it isn&apos;t requiring a button press to set the current direction.<br>
<br>
This should get you started though. Let me know if anything doesn&apos;t make sense.</div>
<br>
Wow KHAN, thank you for your response!! You really can crank out this code quickly... I can&apos;t wait till I can do that, haha. Its a lot to take in, and its nothing like what I have so far, so I&apos;m trying to understand it.&#xA0;<br>
<br>
Little things are throwing me off though, maybe I missed them in the NN weekly tutorials (I&apos;ve been reading lots of different stuff). So for example:<br>
<br>
1.) ShipDirection. So I see you initialized &quot;ShipDirection: .rs 1 &quot;, but what is its default value... 0? From the documenation says that rs is assigning the value to a symbol, but the value is taken from the internal counter. But why not use<br>
<br>
ShipDirection: .rs 1&#xA0;<br>
vs<br>
ShipDirection = #$01<br>
<br>
I guess I&apos;m not fully understanding the documenations description of the use of .rsset and .rs vice just making variables... wait instead of deleting all that, it may have clicked now that I had to type it out. Does the purpose of the .rs symbols allow you to change the value (such as INC / DEC) while the direct assignment to the value of 1 (#$01) would not work because it can only stay that one value?&#xA0;<br>
&#xA0;<br>
2.) I really had a hard time understanding a use case for this section, additionally why you chose $#0E (14 decimal?) as well:<br>
...<br>
&#xA0;&#xA0;BNE .Rotate ;if it hasn&apos;t jump to Rotate<br>
&#xA0; LDA #$0E<br>
&#xA0; STA ShipDirection ;reset ShipDirection to the highest starting value (you&apos;ll change this number when you add more directions to your table)<br>
&#xA0; JMP .Rotate ;jump to Rotate<br>
...<br>
<br>
3.) General locations of things. I&apos;m assuming that:&#xA0;<br>
- The Buttons and other variables go at the top before bank 0 and after iNES header<br>
- The MoveShip to Reset labels can all go inside the NMI<br>
- The ShipLocation data bytes go somewhere in bank 1, but I don&apos;t know why other than all my other db declarations are there (backgrounds, palettes, attributes, sprites, etc.). The why helps so that later on when I create more advanced demo / games I can understand how to place things more efficiently.&#xA0;&#xA0;<br>
<br>
Edited:<br>
4.) Forgot one more. How does Buttons get populated? I thought after you latched the controllers, you had to read the value from $4016 into the accumulator (LDA $4016). So how does reading Buttons get a value from $4016?<br>
<br>
Buttons: .rs 1 ;current button presses<br>
...<br>
MoveShip:<br>
&#xA0; LDA Buttons ;load buttons variable<br>
...
				</div><div class="mdl-card--border"></div>