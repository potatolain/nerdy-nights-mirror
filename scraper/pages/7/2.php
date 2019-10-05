<div class="mdl-card__title"><strong>Rachel</strong> posted on 
		
			
				
				Jun 9, 2008 at 6:36:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have a question about this portion of the tut. I wonder if someone wouldn&apos;t mind answering it.<br><br>
<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i><br><br><a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8172" target="_blank"></a><div><p style="margin: 0px 0px 12px; font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">Notice that the vblankwait is done twice, so it is a good choice to turn into a subroutine.  First the vblankwait code is moved outside the normal linear flow:</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">vblankwait:      ; wait for vblank</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  BIT $2002</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  BPL vblankwait</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal; min-height: 14px;"><span style="letter-spacing: 0px;"></span><br></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">RESET:</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  SEI          ; disable IRQs</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  CLD          ; disable decimal mode</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal; min-height: 14px;"><span style="letter-spacing: 0px;"></span><br></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">clrmem:</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  LDA #$FE</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  STA $0200, x</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  INX</span></p>
<p style="margin: 0px; font-family: Monaco; font-style: normal; font-variant: normal; font-weight: normal; font-size: 10px; line-height: normal; font-size-adjust: none; font-stretch: normal;"><span style="letter-spacing: 0px;">  BNE clrmem</span></p>
</div></div><br>I&apos;m wondering why the vblankwait, or, in general, a subroutine, has to be moved outside the &quot;normal linear flow.&quot; Why can&apos;t you put the code in the first place you want the vblank wait to run and then JSR to it every time after? Also, how would you know when something is sufficiently out of the &quot;normal linear flow?&quot; <br>Thanks!<br>R<br><br>
				</div><div class="mdl-card--border"></div>