<div class="mdl-card__title"><strong>JC-Dragon</strong> posted on 
		
			
				
				Sep 2, 2012 at 12:56:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					if you said that then I believe it&apos;s safe to assume that you haven&apos;t taken any computer courses. BB&apos;s tuts have a basic belief that you have some understanding of the computer just not the ASM code structure so he only did a quick recap to refresh our brains. Let me give you a quick lesson in Binary (this may not actually be that quick FYI) 
<br>
<br>first I need to re-teach you how to count. Humans count in a system called Base 10, it consists of the numbers 0-9. why? it is believed that counting originated from the number of fingers on our hands and that&apos;s how many fingers most humans have. So we start at 0 (nothing) and add 1
<br>0+1=1 then we continue this process
<br>1+1=2
<br>... until we reach 9 then we add 1 more and OH NO we don&apos;t have any more numbers!! what do we do? Well we shift, recycle, and repeat
<br>09+1=10. This process goes on for infinity. Now lets talk computer numbers and counting. Computers instead count in a system known as Base 2, also called Binary. This means they only have 2 numbers, 0 and 1. This is because the computer uses electric pulses to count and the only way to do this is if wither the electric current is on or off (1 and 0 respectively) So the computer starts at 0 then adds 1 0+1=1 then if it wishes to count higher it adds 1 again 1+1=? OH NO we ran out of numbers in computer counting! so we shift, recycle and repeat just like how we count 01+1=10 (to the normal person going from 1 to 10 looks bizarre, but this is how the computer works, in reality that 10 if converted to our counting scheme is 2) So we keep doing this 10+1=11 (11 in binary = 3) Each individual 0 or 1 is known as a bit.
<br>
<br>I hope so far you are understanding this
<br>Now, way back in the beginning of electronic computing they needed a way to fixate these individual 1&apos;s and 0&apos;s and group them together and use them. So it was decided that they would take 8 of them and use those 8 to translate it into numbers, letters and special characters (now they use 32 because of the inclusion of foreign languages but that&apos;s another lesson) these 8 bits grouped together is called a byte (it&apos;s literally a joke, the word bit could be like I bit someone, so the byte is like I bite into something. but because bite could be accidentally mistyped as bit they changed the spelling to byte) 
<br>
<br>now lets do a binary map with a binary number underneath 
<br>128 64 32 16 8 4 2 1
<br>..1..0..0..1.1.1.1.0  or 10011110 
<br>if you notice, on the right side the chart starts with 1, each instance after that is double the previous number, why? because it&apos;s base 2, our base 10 systems works in a similar way, but because it&apos;s base 10 the number is multiplied by 10. (see the correlation? base 2 multiplied by 2, base 10 multiplied by 10  1&apos;s 10&apos;s 100&apos;s etc...)
<br>
<br>Now with this simple chart we can translate what the binary number, or Byte, equal in our own system by adding the correlating numbers above the 1&apos;s from the binary number to the chart. 128+16+8+4+2=158  
<br>now I want you to add up all those numbers on the chart, what does it equal? the maximum number is 255. This next thing is rather important, that is the highest countable value of a byte but in computing WE ALWAYS start with 0, so there are 256 possibilities, but the highest number is 255. (being able to do this math is useful for many things in computing but for now that&apos;s all you need to know about binary)
<br>
<br>now we get into higher numbers, what is a kilo? kilo is the metric term meaning 1,000. but the metric system is in base 10 and computers are in base 2. this means we can&apos;t have what we consider an even 1,000 when we have a kilo of a computer measurement. because of this we take the base 2 and use the kilo to multiply it to the 10th power ( 2^10, or 2*2*2*2*2*2*2*2*2*2) and that gives us a number of 1024 bits. so 1kilobit = 1024 bits. now if we want to figure out how many Bytes there are in a kilobit we know that every 8 bits = 1 Byte, so 1024/8= 128. so there are 128B in 1kb. now lets get into even higher numbers. a kiloByte is like saying 1,000 bytes, but as noted earlier we can&apos;t use that number exactly. A kiloByte is 2^10 Bytes. or 1024 Bytes each byte is 8 bits so if we wanted to break that down into individual bits we multiply it by 8 so 1024*8=8192 bits in a kiloByte. (I know, this math is really weird to get the hang of)
<br>
<br>now just like how you can take 8 bits and make a byte, the same thing is true for the kilo version, 8kilobits = 1kiloByte. 
<br>Now we get to the point I was trying to make, it takes 8 small units to make 1 big unit. the math just so happens to come out that if you take 8 and divide by 8 you get 1 so when you have all of those small units, if you divide by 8 it will show you how many of the big units you have. let&apos;s say you have 72kilobits let&apos;s divide that by 8, 72/8=9. so 72 kilobits is = to 9kiloBytes. 
<br>
<br>does the tutorial have a typo? No, it doesn&apos;t. It&apos;s just that people aren&apos;t wired to inertly understand binary conversions.
<br>back to my penny description it takes 100 pennies to make a dollar, 100/100 equals 1 but instead of saying it equals 1 penny i&apos;m saying that 100 pieces out of 100 pieces equals 1 whole or a dollar
<br>
<br> I know this was a ramble and at least I hope it taught you something or at least peeked your curiosity to learn more about computers.
<br>
				</div><div class="mdl-card--border"></div>