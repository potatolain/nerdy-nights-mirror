<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 13, 2017 at 3:47:13 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	I&apos;m a filthy liar <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>. I looked back at my textbox code and I DO store everything in RAM. 258 bytes worth of data no less! I&apos;m going to have to change that, but look how smooth they are (even if the reloading data needs to be done in reverse in order to look better)!<br>
	<br>
	The logic was (I think, unless I changed it and did not note it):
	<div>
		&#xA0;</div>
	<div>
		Routines in this file:</div>
	<div>
		-TextBoxTable: The tiles that make up the Text Box<br>
		&#xA0;</div>
	<div>
		-SaveCurrentBGData: Saves the current BG data</div>
	<div>
		-SaveCurrentAttrData: Saves the Current Attr data for those BG tiles</div>
	<div>
		<div>
			-FindAttrValues: This is run AFTER SaveCurrentBGData/SaveCurrentAttrData, and it ORAs the results to find each set of two lines</div>
		<div>
			<span class="Apple-tab-span" white-space:>&#xA0;</span>&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; (as opposed to four). These are saved in two separate variables.</div>
		<div>
			&#xA0;</div>
		-BuildTextBox: Build TB based off the of the tiles in the table</div>
	<div>
		-LoadTBAttrData: Writes new attributes to the TB area (two lines at a time)</div>
	<div>
		<br>
		-RestoreBackground: Restores the BG tiles</div>
	<div>
		-RestoreTBAttrData: Restores the correct Attributes (two lines at a time)<br>
		<br>
		The sprite moving code is missing from that, but it runs at the appropriate places. The only issue is that movement must be grid-based or you end up with sprites half in, half out. Crystalis and Final Fantasy were really bad with this, whereas games like Mother prevented the player from accessing anything textbox related until NPC movement was finished.</div>
</div>
<div>
	&#xA0;</div>
<div>
	<img align alt border="0" hspace="4" src="scraper/images/FFA98FB0-E58C-6573-938FD5361A199E4A.png" vspace="4" original-src="http://nintendoagemedia.com/users/16129/photobucket/FFA98FB0-E58C-6573-938FD5361A199E4A.png"><br>
	<br>
	And here is what I am talking about with Uforia&apos;s being lazy. The backgrounds, attributes, and sprites all get updated separately. That initial shift is how the game is aligning the tiles. I think that Derek did that with the first screen in Owlia too, but it has been a while.<br>
	<br>
	<img align alt border="0" hspace="4" src="scraper/images/FFB416DE-99B8-1B1D-824C7DFF95F4830E.png" vspace="4" original-src="http://nintendoagemedia.com/users/16129/photobucket/FFB416DE-99B8-1B1D-824C7DFF95F4830E.png"><br>
	<br>
	&#xA0;</div>
				</div><div class="mdl-card--border"></div>