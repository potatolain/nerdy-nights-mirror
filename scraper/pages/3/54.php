<div class="mdl-card__title"><strong>jarrodparkes</strong> posted on 
		
			
				
				Oct 16, 2012 at 8:47:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have been doing my best to understand banking; however, I am still a little unclear about why explicitly specifying it is necessary. Here is my understanding and questions, let me know where I am messing up...
<br>
<br>1. A bank is portion of memory that is set aside as a holding place for some kind of data (like CHR or PRG)
<br>2. For the NESASM, banks occupy a space of 8KB
<br>3. The .bank directive does what exactly? Couldn&apos;t you just get by using a .org directive to navigate to the portions of memory where CHR/PRG data is intended to be stored? Why do you have to specify the .bank?
<br>4. How are you supposed to know if your PRG memory exceeds a 8KB bank? What would happen if it does?
<br>5. Are all directives handled pre-assembling? Almost like C++ pre-processor directives?
<br>
<br>Thanks,
<br>Jarrod
				</div><div class="mdl-card--border"></div>