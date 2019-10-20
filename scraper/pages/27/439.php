<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 13, 2014 at 12:33:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					4 screen scrolling is as difficult as any greater number of screens (unless you use 4-screen mirroring with extra nametable RAM, used in like two games ever). 2 screen scrolling is just a bit more difficult than no scrolling.
<br>
<br>I&apos;d recommend to start with a simple demo with one axis scrolling (SMB-like), both directions. Then you&apos;ll get idea how to turn it into 8-way scrolling, and realize that it is not so easy.
<br>
<br>General idea of all scrolling routines is that you update one column and/or row slighly before the screen edge by direction of the scrolling. So you need to store map somehow (unpacked, or packed with metatiles or RLE), prepare row/column buffer to update during normal frame time, and send it to the VRAM during VBlank.
				</div><div class="mdl-card--border"></div>