<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Aug 26, 2017 at 10:38:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m one of those people who needs to see something done to really understand it, so I&apos;m going to give you an example of the way I do things. I&apos;m definitely not claiming to be any sort of expert in NES programming, because I do many things the wrong way, but this will at least give you a physical example of a way it can be done.
<br>
<br>Anytime I have a tile to update, I&apos;ll write it to the $0400 page. First I check to see if anything is written to $0400 (if so, that means I&apos;ve already told it to update tile(s) this frame, so I need to skip ahead and go to the first free bytes in that page.)
<br>
<br>In this example, let&apos;s say I want to change four background tiles beginning at $2165. The tiles will be $23, $91, $46, and $90. But earlier in the frame I decided I wanted to change background tile $2310 to tile $12.
<br>
<br>Like the website I gave you to did, I have my buffer set up like this.
<br>
<br>Byte 0 - Number of tiles I&apos;m updating.
<br>Byte.1 - Hi byte of nametable I&apos;m updating.
<br>Byte 2 - Lo byte of nametable I&apos;m updating.
<br>Bytes 3 - ? - The tiles I&apos;m updating to that address.
<br>
<br>Zero page variables:
<br>NumBuffer: .rs 1
<br>HiBuffer: .rs 1
<br>LoBuffer: .rs 1
<br>BufferTiles: .rs xx (however many bytes you want to set aside for buffer updates)
<br>
<br>Current state of $0400 page (from previous routine that wants to update background tile $2310 to tile $12:
<br>
<br>$01,$23,$10,$12
<br>
<br>I have a subroutine somewhere that you will jump to anytime you want to load stuff into the buffer, it will look liks this:
<br>
<br>LoadBuffer:
<br>  LDX #$00
<br>  LDY #$00
<br>.PreLoad:
<br>  LDA $0400,x ;check to see if this is an open spot in the $0400 page
<br>  CMP #$00 ;if it is, go straight to Load.
<br>  BEQ .Load
<br>  TAY ;move the current number of bytes that this bkgd update is doing into Y so we can move ahead that many to check next open spot
<br>.Loop:
<br>  DEY
<br>  INX
<br>  CPY #$00
<br>  BEQ .PreLoad ;we have successfully moved ahead past the current update. check next spot by jumping back to PreLoad
<br>  JMP .Loop
<br>.Load: ;it is now safe to put our updates into this spot of $0400 page
<br>  LDA NumBuffer
<br>  STA $0400,x
<br>  LDA HiBuffer
<br>  STA $0401,x
<br>  LDA LoBuffer
<br>  STA $0402,x
<br>  LDY #$00
<br>.ExitLoop:
<br>  LDA BufferTiles,y
<br>  STA $0403,x
<br>  INX
<br>  INY
<br>  DEC NumBuffer
<br>  LDA NumBuffer
<br>  CMP #$00
<br>  BNE .ExitLoop
<br>  RTS
<br>
<br>Then I have a routine that happens at the beginning of NMI (and we know this is vblank time) that goes something like this. It actually loads your buffer and makes the changes you want:
<br>
<br>RunBuffer:
<br>  LDX #$00
<br>.Loop:
<br>  LDA $0400,x ;see if anything is set to update
<br>  CMP #$00
<br>  BEQ .End ;nothing is set to update, go to end
<br>  LDA $0400,x
<br>  TAY
<br>  LDA $0401,x
<br>  STA $2006
<br>  LDA $0402,x
<br>  STA $2006
<br>.OutroLoop:
<br>  LDA $0403,x
<br>  STA $2007
<br>  INX
<br>  DEY
<br>  CPY #$00
<br>  BNE .OutroLoop
<br>  JMP .Loop
<br>.End:
<br>  RTS
<br>
<br>Now that you have your two routines down, at any point in your code to update the tiles we previously mentioned, you can just do this:
<br>
<br>;;anywhere in game
<br>  LDA #$04 ;we are updating four tiles, like we mentioned
<br>  STA NumBuffer
<br>  LDA #$21 ;hi byte we are updating
<br>  STA HiBuffer
<br>  LDA #$65 ;lo byte we are updating
<br>  STA LoBuffer
<br>  LDA #$23 ;first of four tiles we are updating
<br>  STA BufferTiles
<br>  LDA #$91
<br>  STA BufferTiles+1
<br>  LDA #$46
<br>  STA BufferTiles+2
<br>  LDA #$90
<br>  STA BufferTiles+3
<br>  JSR LoadBuffer ;take these values and load them into our buffer
<br>;;any code
<br>
<br>Then when your updates are done for the frame, you probably need to figure out a way to set $0400 to #$00 so that the game knows not to run the updates the next frame. But I&apos;ll let you figure that out. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>