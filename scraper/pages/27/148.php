<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Feb 8, 2014 at 8:53:25 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>3GenGames</b></i><br>
	<br>
	1. ORA sets certain bits, I wrote it in binary so you can see which bits are set with it, it&apos;s the 3rd bit over from the left. 2^2.<br>
	<br>
	2. The NESDev wiki pake. Most people use PPU(Name)4 letters after. Its pretty easy to understand. <a href="http://wiki.nesdev.com/w/index.php/PPU_registers" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/PPU_registers">http://wiki.nesdev.com/w/index.php/PPU_registers</a><br>
	<br>
	PPUCtrl=$2000<br>
	PPUMask=$2001<br>
	PPUStatus=$2002<br>
	PPUOAMAddr=$2003<br>
	PPUOAM(Data)=$2004<br>
	PPUScroll=$2005<br>
	PPUAddr=$2006<br>
	PPUData=$2007<br>
	<br>
	4. The () just show I dont really know what to put there. Most games keep a copy of $2000 and $2001 in RAM, instead of using magic values, or hard-coded stuff, this is the way you&apos;d use it with a game engine already around it. Or your code will eventually develop into this style, it&apos;s just much easier.</div>
<br>
Thanks <span class="sprites_emoticons absmiddle" id="emo_happy"></span> That article from NESdev is going to be an interesting read <span class="sprites_emoticons absmiddle" id="emo_smile"></span> However, I still don&apos;t quite understand question 4 :/<br>
<br>
				</div><div class="mdl-card--border"></div>