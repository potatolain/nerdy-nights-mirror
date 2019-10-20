<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 13, 2014 at 1:59:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	4 screen scrolling is as difficult as any greater number of screens (unless you use 4-screen mirroring with extra nametable RAM, used in like two games ever). 2 screen scrolling is just a bit more difficult than no scrolling.<br>
	<br>
	I&apos;d recommend to start with a simple demo with one axis scrolling (SMB-like), both directions. Then you&apos;ll get idea how to turn it into 8-way scrolling, and realize that it is not so easy.<br>
	<br>
	General idea of all scrolling routines is that you update one column and/or row slighly before the screen edge by direction of the scrolling. So you need to store map somehow (unpacked, or packed with metatiles or RLE), prepare row/column buffer to update during normal frame time, and send it to the VRAM during VBlank.</div>
Thanks. I will follow your advice.<br>
I also remember a page on nesdev wiki about SMB scrolling with an animated demo, which explained the basics, I have to find it again.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>