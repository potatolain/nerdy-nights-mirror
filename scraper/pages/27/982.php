<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Dec 12, 2017 at 7:02:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So I am trying to condense my enemy parameters. Right now I have set aside space to have 4 enemies on screen at a time so I have varaibles for each enemy set aside and I control them by using an enemy_number:
<pre>enemy_number .rs 1
enemy_frame .rs 4
enemy_animation .rs 4
enemy_hp .rs 4
enemy_speed .rs 4
</pre>
I <s>need to set some of</s>&#xA0;would like to hold these according to enemy type and would like some structure to hold values that would initialize by type. In one of MRN tutorials I saw him use .word to make a sort of data table for the background meta sprites. Can this be used for enemy types like:<br><br><pre>enemyTypes:
    .word demon,flying_eye<br><br>demon:
    .db $02,$05,$06...<br><br>flying_eye:
    .db $04,$02,$05...
</pre>
Where each value for the type is something I need. I think this would work but then how do I get these values? I am thinking I would have to have another variable like:<br><br><pre>enemyType .rs 4
enemyType_ptr .rs 2
</pre>
but how would you set this? If each .word is an address (IE demon = $0010 or something) would I have to do:<br><br><pre>;set enemy type to flying_eye
LDX enemy_number
LDA $01
STA enemyType,x
;get to the enemy type values
LDA enemyType,x
TAX
LDA enemyTypes,x
STA enemyType_ptr
LDA enemyTypes+1,x
STA enemyType_ptr+1
</pre>
It would seems that this routine would get me the address of the correct starting values (maybe) but now I am lost on how to get what I need. I am not sure if I am even doing this correct. Any advise would be greatly appreciated.<br>
<br>
EDIT - reworded&#xA0;
				</div><div class="mdl-card--border"></div>