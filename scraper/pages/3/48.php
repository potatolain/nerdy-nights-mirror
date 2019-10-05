<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jul 9, 2011 at 11:26:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>CMR</b></i><br><br>Thanks for the reply.  Is 16KB the maximum the prg rom can be?  I was under the impression it could be a maximum of 32KB with 4 8K banks.  Also why are things arranged in 8K banks?  Is this just how NESASM likes to do it, or does the hardware need it that way for some reason.  
<br>
<br>Sorry for all the questions, but I would like to get this down before I move on.  Thanks again.</div><br>Yes, 32KB is the maximum without mappers. Then the data will appear at $8000-FFFF, unmirrored, so you should use .org $8000 and put it in 4 NESASM banks.<div><br></div><div>The 8K bank system of NESASM is completely arbitrary, no hardware requirements behind it. AFAIK the reason is that NESASM is based on a PC Engine assembler, and PC Engine used 8K banking internally.<br><br>
</div>
				</div><div class="mdl-card--border"></div>