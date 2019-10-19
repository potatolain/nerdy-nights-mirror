<div class="mdl-card__title"><strong>Bruce TomlinBruce Tomlin</strong> posted on June 15, 2005</div><div class="mdl-card__supporting-text">
<p>...but you better not be tight for cycles!</p>
<p>&#xA0;</p>
<p>That adds 6 cycles after the STA WSYNC, and 10 before it.</p>
<p>&#xA0;</p>
<p>In Red Box/Blue Box there were only a few places that I could JSR to a copy of my DoSound macro, and it saved a LOT of bytes when I did. There were only a few places because I only had 15 cycles to spare on each scan line after the DoSound macro. It would have only been 11 except that I saved 4 cycles from using LAX.</p>
</div><div class="mdl-card--border"></div>