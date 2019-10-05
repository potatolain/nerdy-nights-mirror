<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Apr 23, 2015 at 11:39:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The nice thing about NES Screen Tool is that it actually supports RLE compression out of the box. Create the nametable as you normally would, but when saving it select &quot;RLE packed&quot; from the file type list. This will produce a .RLE file, which you can .incbin in to your project, and use the routine from rle.asm (also included with NES Screen Tool) to decompress the data. RLE compression gets rid of most of the redundancy in a nametable.
<br>
<br>The .RLE files can also be opened in NES Screen Tool as nametables just like normal uncompressed nametables.
<br>
<br>user: You have to weigh whether making a custom compression/decompression routine for each scenario is beneficial. It may make your data smaller than e.g. RLE could, but by how much, and is it worth the extra time it takes to develop the data format and the algorithm (and possibly to layout the compressed data by hand)?
				</div><div class="mdl-card--border"></div>