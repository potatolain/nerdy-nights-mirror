<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 22 at 5:52:27 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Sorry that I wasn&apos;t more clear.<br>
<br>
1.) The .rs 1 variables are simply declaring them as variables in zero page. The default value is zero I guess, since your clearmem routine is zeroing out everything upon bootup initalization. .rs 1 is simply reserving a byte of RAM for a variable called whatever we do a .rs 1 for. Your assessment is correct. Setting it to ShipDirection = #$01 would make that variable be 1 the entire game (a constant). Reserving a byte of memory allows us to change the value to anything we want at any time.<br>
<br>
2.) When we&apos;re looking at the table I typed out (ShipLookupTable), we can see there are 16 values (two per direction. One for sprite, and one for attribute byte). If, for example, the ship is facing up, ShipDirection would be $00 since it&apos;s at the first value of the table. If we&apos;re still turning left, it would decrement that value twice. If we decrement $00 twice, it would be $FE, which has wrapped off the bottom of the table, so we want to instead set it to the highest first-byte value of our table, which is $0E (the sprite of up/left). The same thing applies in the opposite direction. If the ship is facing up/left and we continue to press the Right direction, it will increment ShipDirection twice, which would put the value at $10, which is higher (more values) than our table goes. We want to wrap it back to the lowest first-byte of the table, which is $00.<br>
<br>
ShipLookupTable: (the following numbers are just POSITIONS. Not values. The red text doesn&apos;t really exist in the table, but the increment/decrement code will get there when you&apos;re inc/dec past where there are values, hence the need to reset back onto the table)<br>
<span style="color:#FF0000;">$FE,$FF; if you&apos;ve decremented down to this point, you&apos;ve wrapped off table. reset back to $0E</span><br>
$00,$01<br>
$02,$03<br>
$04,$05<br>
$06,$07<br>
$08,$09<br>
$0A,$0B<br>
$0C,$0D<br>
$0E,$0F<br>
<span style="color:#FF0000;">$10,$11; if you&apos;ve incremented up to this point, you&apos;ve wrapped off table. reset back to $00</span><br>
<br>
3.) All of the .rs values go at the top before bank zero. This is called zero page. The MoveShip subroutine (which includes a .Reset local subroutine) can go anywhere in any bank. The ShipLocation table can also go anywhere, assuming you are using a mapper that doesn&apos;t bankswitch.<br>
<br>
4.) As mentioned in my post, Buttons gets populated through a subroutine detailed in Nerdy Nights week 7, labeled &quot;Better Controller Reading.&quot; You don&apos;t have to use it. I was just using it to more simply illustrate the button presses (but I would recommend learning to use it, as it&apos;s how I still read controllers to this day).
				</div><div class="mdl-card--border"></div>