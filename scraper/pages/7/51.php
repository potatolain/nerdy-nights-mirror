<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jan 22, 2012 at 6:28:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Try adding a LDA $2002 to the beginning, as you NEED to read that to tell the PPU that you know a NMI happened. When you do the STA $2000 with the NMI enabled, you are causing another one to occur most likely. You should also look into cleaning up your program flow and take everything out of the NMI and make it it&apos;s own real program. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> Good luck, hope that&apos;s the problem.
				</div><div class="mdl-card--border"></div>