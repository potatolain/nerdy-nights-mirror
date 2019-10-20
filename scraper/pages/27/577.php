<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jun 3, 2015 at 6:27:59 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>glutock</b></i><br>
	<br>
	Hey ! Merci de ta r&#xE9;ponse.<br>
	<br>
	J&apos;ai bien compris le fonctionnement de ta routine, par contre j&apos;ai du mal &#xE0; saisir l&apos;utilisation de la variable fadeswitch ?<br>
	Peux tu d&#xE9;velopper un peu &#xE7;a ? A quel moment l&apos;initialise tu ? Quelle est l&apos;utilit&#xE9; du ROR A dans ce cas pr&#xE9;cis ?<br>
	C&apos;est certainement simple, mais un truc m&apos;&#xE9;chappe &#xE0; cette heure l&#xE0;</div>
<br>
En fait, d&#xE8;s qu&apos;on met une valeur autre que z&#xE9;ro dans la variable fadeswitch, la subroutine s&apos;actionne au d&#xE9;but de la vblank, ce qui rend son utilisation possible n&apos;importe o&#xF9; simplement en modifiant cette variable. En r&#xE9;sum&#xE9;, d&#xE8;s que fadeswitch =/= 0, l&apos;&#xE9;cran se noircit. Le ROR A sert &#xE0; ce que l&apos;&#xE9;cran ne se noircisse que chaques deux frames, afin que le noircissement puisse se voir &#xE0; l&apos;oeil nu (le noircissement serait bien trop rapide en 60fps)<br>
<br>
				</div><div class="mdl-card--border"></div>