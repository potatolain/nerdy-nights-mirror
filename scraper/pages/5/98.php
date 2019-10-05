<div class="mdl-card__title"><strong>The Adventurer</strong> posted on 
		
			
				
				Sep 27, 2012 at 4:34:00 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	I&apos;ve been going through the tutorial (amazing resource btw) and have managed to suss out how to rebind all four sprites to move with the directional buttons. Figuring out that everything as a specific registry port in a specific order was a bit of a learning experience. But I&apos;m starting to get it.</div>
<div>
	&#xA0;</div>
<div>
	My question is... I know this works...</div>
<div>
	&#xA0;</div>
<div>
	ReadR:</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - Right</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadRDone &#xA0; ; branch to ReadBDone if button is NOT pressed (0)</div>
<div>
	&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; add instructions here to do something when button IS pressed (1)</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $0203 &#xA0; &#xA0; &#xA0; ; load sprite0 X position</div>
<div>
	&#xA0; CLC &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; make sure carry flag is set</div>
<div>
	&#xA0; ADC #$01 &#xA0; &#xA0; &#xA0; &#xA0;; A = A + 1</div>
<div>
	&#xA0; STA $0203 &#xA0; &#xA0; &#xA0; ; save sprite0 X position</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $0207 &#xA0; &#xA0; &#xA0; ; load sprite1 X position</div>
<div>
	&#xA0; CLC</div>
<div>
	&#xA0; ADC #$01</div>
<div>
	&#xA0; STA $0207</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $020B &#xA0; &#xA0; &#xA0; ; load sprite2 X position</div>
<div>
	&#xA0; CLC</div>
<div>
	&#xA0; ADC #$01</div>
<div>
	&#xA0; STA $020B</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $020F &#xA0; &#xA0; &#xA0; ; load sprite3 X position</div>
<div>
	&#xA0; CLC</div>
<div>
	&#xA0; ADC #$01</div>
<div>
	&#xA0; STA $020F</div>
<div>
	&#xA0;&#xA0;</div>
<div>
	ReadRDone: &#xA0; &#xA0; &#xA0; &#xA0;; handling this button is done</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	But... why doesn&apos;t this work?</div>
<div>
	&#xA0;</div>
<div>
	ReadRight:</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - Right</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadRightDone &#xA0; ; branch to ReadBDone if button is NOT pressed (0)</div>
<div>
	&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; add instructions here to do something when button IS pressed (1)</div>
<div>
	&#xA0; LDA $0203</div>
<div>
	&#xA0; LDA $0207</div>
<div>
	&#xA0; LDA $020B</div>
<div>
	&#xA0; LDA $020F</div>
<div>
	&#xA0; CLC</div>
<div>
	&#xA0; ADC #$01</div>
<div>
	&#xA0; STA $0203</div>
<div>
	&#xA0; STA $0207</div>
<div>
	&#xA0; STA $020B</div>
<div>
	&#xA0; STA $020F &#xA0;</div>
<div>
	&#xA0;&#xA0;</div>
<div>
	ReadRightDone: &#xA0; &#xA0; &#xA0; &#xA0;; handling this button is done</div>
<div>
	&#xA0;</div>
<div>
	I mean... it sort of works. It will move the entire sprite around the screen. BUT. It garbles the sprites themselves (it kinda reverses them front to back on the first button press) Is there anything at a glance that would cause this strangeness? Because it sure cuts down on a few lines of code, and makes it look neater.</div>
<div>
	&#xA0;</div>
				</div><div class="mdl-card--border"></div>