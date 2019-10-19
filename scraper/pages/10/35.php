<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Dec 4, 2015 at 2:48:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>tree of might</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>tree of might</b></i><br>
<br>
Sorry, guys, I just don&apos;t get this. At the end of the bankswitch subroutine the value in X gets stored in the bankvalues area, then what? What part of the code actually causes the bank switching to happen? Sorry if this is a dumb question.</div>
<br>
It&apos;s storing it into the $8000 address, right?<br>
<br>
;;code<br>
<span>STA $8000 ;;new bank to use</span><br>
RTS</div>
<br>
What section of the code does it write to $8000? I can&apos;t seem to find it.<br>
&#xA0;</div>
<strong>THIS IS KEY<br>
&quot;The actual switch is done by writing the desired bank number anywhere in the $8000-FFFF memory range.&quot;</strong><br>
<br>
<strong>Bus Conflicts</strong><br>
&quot;When you start running your code on real hardware there is one catch to worry about. For basic mappers, the PRG ROM does not care if it receives a read or a write command. It will respond to both like a read by putting the data on the data bus. This is a problem for bank switching, where the CPU is also trying to put data on the data bus at the same time. They electrically fit in a &quot;bus conflict&quot;. The CPU could win, giving you the right value. Or the ROM could win, giving you the wrong value. This is solved by having the ROM and CPU put the same value on the data bus, so there is no conflict. First a table of bank numbers is made, and the value from that table is written to do the bank switch.&quot;<br>
<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;;Code is stored starting at $C000<br>
&#xA0; .org $C000<br>
&#xA0;<br>
&#xA0; ... code ...<br>
<br>
&#xA0; LDA #$01 &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;;Load A with $01 (For bank 1)<br>
&#xA0; JSR Bankswitch &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;;jump to bank switching code<br>
<br>
... code ...<br>
<br>
Bankswitch:<br>
&#xA0; TAX&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0; ;;copy $01 into X<br>
&#xA0; STA Bankvalues, X &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;;Write $01 to Bankvalues,$01 (Which is stored somewhere between $C000-$DFFF). This is done to avoid the Bus Conflict in the paragraph above<br>
&#xA0; RTS<br>
<br>
Bankvalues:<br>
&#xA0; .db $00, $01, $02, $03 &#xA0;&#xA0; &#xA0;;;bank numbers<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;&#xA0;<br>
&#xA0;<br>
&#xA0;<br>
Since you write to Bankvalues, that table is stored in $8000-FFFF memory range. You can write to ANY number in that range, so you write the value of X into Bankvalues.<br>
<br>
Hope that helps clarify. This is the way I understand it.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>