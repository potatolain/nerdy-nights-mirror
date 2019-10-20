<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Mar 8, 2018 at 10:49:18 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Sumez</b></i><br>
&#xA0; Shift your bits right until you get the correct index. Say you have the scroll index based on 8px blocks, shift your bits right once (which is the same as dividing by 2), you&apos;ll discard the least significant bit (which you don&apos;t need since two 8px blocks fit into one 16px block) and get a 16px index.<br>
Usually your scroll offset will be defined to the pixel though, since that&apos;s how the PPU uses it, so in that case you&apos;d shift that number right four times (1-&gt;2-&gt;4-&gt;8-&gt;16) to get a 16px index. This kind of operation is very common in 8bit assembly programming.<br>
Sorry if I misunderstood your question.</div><br><br><div>Thank you for your responses!&#xA0; What I meant is that since I am using 16px meta tiles and the screen scrolls by 8, if we scroll 1 line then we have 1/2 of one meta tile on the left and 1/2 of one on the right, essentially needing to have 17 meta tile columns that we are needing to look at.&#xA0; So the indexes, it seems to me, would be thrown off.</div>
				</div><div class="mdl-card--border"></div>