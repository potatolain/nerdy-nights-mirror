<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 11, 2016 at 12:23:52 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					It doesn&apos;t really take up space per se. Space implies RAM or ROM. RAM and ROM each can map to certain ranges of the 64k address space...and only space can be &quot;taken up&quot; within that. the address space itself isn&apos;t really taken up, so to speak. In other words, you might have a ROM chip that maps to a range of addresses starting at $8000 and spanning 16kb. If you read anything in that range you get data or code that might be on the ROM. However, you might have hardware that&apos;s mapped to the same locations. Two people pick up the phone. One of those people always talks (gives you the data in ROM), the other one of those people might always perform a hardware function switch as a bankswap. Mappers sometimes allow you to write anywhere in alarge address range, triggering the same function. But because that address range overlaps ROM, nothing happens to your code or data, the write is just picked up by the mapper. I can imagine this getting confusing...<br>
<br>
Basically you imagine this 64k switchboard, or &quot;bus&quot; as it is called, between the CPU and hardware. the CPU can read or write anywhere on that switchboard, from 0 through 65535. Some pieces of hardware pick up only reads, some pick up only writes. Some pieces of hardware are mapped to the same locations as others, but usually this is because one piece of hardware is only picking up reads the other is only picking up writes. Think of people picking up the phone who only listen or only talk, and you might have more than one person on a given telephone line, hahah.<br>
<br>
There are actually a few cases where some pieces of hardware cannot agree on who is reading or writing what. In other words some hardware quirks. Like when you play a DMC sound sample, it can actually mess up controller reads. Or the UnROM mapper, also, will have a conflict with ROM when written to, unless the ROM has the same value at the location to which you wrote. Most of the time it isn&apos;t an issue because most pieces of hardware wired up to this switchboard only listen to a specific location, and then only for writes or reads (or both I suppose in the case of RAM). Not sure if any of that made sense.
				</div><div class="mdl-card--border"></div>