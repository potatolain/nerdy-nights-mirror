<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 4, 2015 at 9:11:49 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					At that point, you might consider what some call an object or entity system. In other words, you&apos;ll have chunks of RAM devoted to tracking where a certain object currently is, and other information about that object&apos;s state. In addition to that you might have a special routine for specific types of objects that are dedicated to updating the state for that object. From there, it would be a matter of coming up with a state machine appropriate to that object. Let me see if I can whip up a pseudo-asm example. Note I did not compile any of this, and I&apos;m terribly lazy so don&apos;t try to import it directly in your code. Instead try to understand the concepts, then write it yourself. Also, I left out any drawing code. See if you can extend the below ideas to have another look up table for pointing to sprites or meta sprites for each type of entity. And please use actual labels for your zp variables, don&apos;t hard code them like I did for this fast and loose example.<br>
<br>
<div>
	&#xA0;</div>
<div>
	;this example assumes zp location $00 is used for entity type</div>
<div>
	;and assumes locations $01 and $02 are a 16 bit address for calling an</div>
<div>
	;entity update.</div>
<div>
	&#xA0;</div>
<div>
	;RAM</div>
<div>
	MAX_ENTITIES = 16</div>
<div>
	&#xA0;</div>
<div>
	entity_type: .res MAX_ENTITIES</div>
<div>
	entity_state: .res MAX_ENTITIES</div>
<div>
	entity_alive: .res MAX_ENTITIES</div>
<div>
	entity_x: .res MAX_ENTITIES</div>
<div>
	entity_y: .res MAX_ENTITIES</div>
<div>
	entity_local0: .res MAX_ENTITIES</div>
<div>
	entity_local1: .res MAX_ENTITIES</div>
<div>
	;add as many extra arrays as you think your entities may need to use</div>
<div>
	<br>
	kill_all_entities:<br>
	<br>
	&#xA0; ;TODO: Write code to set all entity_alive values to 0 before you create any entities.<br>
	<br>
	&#xA0; rts<br>
	&#xA0;</div>
<div>
	;routine for creating an entity</div>
<div>
	;assumes zp location $00 contains type of entity to create.</div>
<div>
	;please in your own code, don&apos;t hard code $00, use a zp label</div>
<div>
	create_entity:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; ;find a dead entity</div>
<div>
	&#xA0; ldy #(MAX_ENTITIES-1)</div>
<div>
	next_entity:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; lda entity_alive</div>
<div>
	&#xA0; beq found_dead_entity</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; dey</div>
<div>
	&#xA0; bpl next_entity<br>
	<div>
		&#xA0; ;if y is negative, all entity slots are in use so we can&apos;t spawn this one</div>
	<div>
		&#xA0; bmi cannot_spawn_entity</div>
</div>
<div>
	found_dead_entity:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; ;here, y points to an entity slot that is dead so we can make a new one</div>
<div>
	&#xA0; lda #1</div>
<div>
	&#xA0; sta entity_alive,y<br>
	&#xA0; ;this routine assumes that we stored the desired entity type in $00. This would be from the equates below such as ENTITY_TYPE_SLIME for example. This value will be used later to know which &quot;brain&quot; routine to call for this entity.</div>
<div>
	&#xA0; lda $00</div>
<div>
	&#xA0; sta entity_type,y</div>
<div>
	&#xA0; ;we assume all entities have an init state assigned to slot 0</div>
<div>
	&#xA0; lda #0</div>
<div>
	&#xA0; sta entity_state,y</div>
<div>
	&#xA0;</div>
<div>
	cannot_spawn_entity:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; rts</div>
<div>
	&#xA0;</div>
<div>
	;routines for updating all the entities every frame (outside of nmi, not during. in nmi, hopefully all you would be doing is updating sprite OAM..I left out all drawing concerns in this example, however)</div>
<div>
	update_entities:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; ldy #(MAX_ENTITIES-1)</div>
<div>
	next_entity1:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; lda entity_alive,y</div>
<div>
	&#xA0; beq entity_not_alive1</div>
<div>
	&#xA0; lda entity_type,y</div>
<div>
	&#xA0; tax</div>
<div>
	&#xA0; lda entity_brain_lo,x</div>
<div>
	&#xA0; sta $01</div>
<div>
	&#xA0; lda entity_brain_hi,x</div>
<div>
	&#xA0; sta $02</div>
<div>
	&#xA0; jsr indirect_jsr_01</div>
<div>
	entity_not_alive1:</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; dey</div>
<div>
	&#xA0; bpl next_entity1</div>
<div>
	&#xA0;</div>
<div>
	indirect_jsr_01:</div>
<div>
	&#xA0; jmp ($01)</div>
<div>
	&#xA0;</div>
<div>
	;entity types</div>
<div>
	ENTITY_TYPE_SLIME = 0</div>
<div>
	ENTITY_TYPE_BULLET = 1</div>
<div>
	ENTITY_TYPE_WOLF = 2</div>
<div>
	&#xA0;</div>
<div>
	;look up table for entity brains</div>
<div>
	entity_brain_lo:</div>
<div>
	&#xA0; .byte ;for some reason the damn forum keeps erasing my lobyte (html tag??) symbols. This is the same as below only with less than signs instead of greater than signs as in the below look up table.<slime_update, div>
	<div>
		&#xA0;</div>
	<div>
		entity_brain_hi:</div>
	<div>
		&#xA0; .byte &gt;slime_update, &gt;bullet_update, &gt;wolf_update</div>
	<div>
		<br>
		;these equates represent the various states an entity can transition between.<br>
		;in this example, we have designed it so all entities are expected to have an &quot;init&quot;<br>
		;state in slot 0. This init branch should be used to set up the entity&apos;s variables when first created.<br>
		;the init state will typically then transition to another state that does something interesting like moving<br>
		<div>
			SLIME_STATE_INIT = 0</div>
		<div>
			SLIME_STATE_MOVE_RIGHT = 1</div>
		<div>
			SLIME_STATE_STOP = 2</div>
		<div>
			&#xA0;</div>
	</div>
	<div>
		;actual entity brain routines</div>
	<div>
		<br>
		slime_counter = entity_local0</div>
	<div>
		&#xA0;</div>
	<div>
		slime_update:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;the y register at this point essentially is the &quot;THIS&quot; pointer,</div>
	<div>
		&#xA0; ;when we get here, we KNOW we have a live slime entity at the location</div>
	<div>
		&#xA0; ;in the entity arrays specified by y.</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;simple state switchboard. In actual practice, you may want to move to a</div>
	<div>
		&#xA0; ;look up table like I did above for entity update routines. But for simple</div>
	<div>
		&#xA0; ;experiments this is fine.</div>
	<div>
		&#xA0; lda entity_state,y</div>
	<div>
		&#xA0; cmp #SLIME_STATE_INIT</div>
	<div>
		&#xA0; beq slime_init</div>
	<div>
		&#xA0; cmp #SLIME_STATE_MOVE_RIGHT</div>
	<div>
		&#xA0; beq slime_move_right</div>
	<div>
		&#xA0; cmp #SLIME_STATE_STOP</div>
	<div>
		&#xA0; beq slime_stop</div>
	<div>
		&#xA0;</div>
	<div>
		slime_init:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; lda #0</div>
	<div>
		&#xA0; sta entity_x,y</div>
	<div>
		&#xA0; sta entity_y,y</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;we&apos;re going to move right by 20 pixels</div>
	<div>
		&#xA0; lda #20</div>
	<div>
		&#xA0; sta slime_counter,y</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; lda #SLIME_STATE_MOVE_RIGHT</div>
	<div>
		&#xA0; sta entity_state,y</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; rts</div>
	<div>
		&#xA0;</div>
	<div>
		slime_move_right:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; inc entity_x,y</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; dec slime_counter,y</div>
	<div>
		&#xA0; bne not_yet_zero</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; lda #SLIME_STATE_STOP</div>
	<div>
		&#xA0; sta entity_state,y</div>
	<div>
		&#xA0;</div>
	<div>
		not_yet_zero:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; rts</div>
	<div>
		&#xA0;</div>
	<div>
		slime_stop:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;we do nothing here</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; rts</div>
	<div>
		&#xA0;</div>
	<div>
		bullet_update:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;bullet code here</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; rts</div>
	<div>
		&#xA0;</div>
	<div>
		wolf_update:</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; ;wolf code here</div>
	<div>
		&#xA0;</div>
	<div>
		&#xA0; rts</div>
	<div>
		&#xA0;</div>
	</slime_update,></div>
<br>
				</div><div class="mdl-card--border"></div>