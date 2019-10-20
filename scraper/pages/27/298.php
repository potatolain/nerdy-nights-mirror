<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				May 23, 2014 at 11:14:36 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	The great thing about code is there is more than 1 right answer. Some strive for the smallest and quickest solution. Some strive for the cleanest looking code so its easy to follow. Others just make it work.<br>
	<br>
	Personally, I would go the route of MRN on how to hide sprites just because for me, its the simplest to follow. I&apos;m not too worried about CPU and space at this time because my programs are not very big or labor intensive.</div>
<br>
Just to post the difference between our code:<br>
<br>
LDY YPosition,X ;Get the Y position<br>
INY<br>
BEQ .NothingToBeMoved<br>
-Move object-<br>
-if out of range true for this, move it to FF and run line below-<br>
INC OutOfRangeObjects ;We have 1 more bullet out of range, not being moved.<br>
.NothingToBeMoved:<br>
<br>
Later on in the code:<br>
<br>
LDA OutOfRangeObjects ;Did we delete all our objects yet?1<br>
CMP #NumberOfObjects ;Test if we did.<br>
BNE .NothingToBeDoneHere ;;Nope, skip resetting them for now.<br>
-Reset them here- ;Reset them.<br>
.NothingToBeReset: ;DOne.<br>
<br>
SUPER simple, easy to read. It makes sense what the state of the variable is and if needed, what sets it, somewhere else. The best way to write code is to make it simple, and keep parts of the engine, like sprite positions which are 100% tied to hardware, out of the code. Otherwise, it is hard to read, and hard to modify if you&apos;re someone else. Write code like this, and you will get help 10x more often. Comment it too, and make sure it&apos;s not direct copy/paste, because the most simple and small and straightforward code you say you use, is NOT in the nerdy nights. I can post my start up code and show you the differences if you want to see what I mean, but nerdy nights isn&apos;t the best code for that.<br>
<br>
The code he describes, the first part would be the same, but somewhere randomly in the engine would be this:<br>
<br>
LDX YPosition<br>
INX<br>
BNE .NoReset<br>
LDX YPosition+4<br>
INX<br>
BNE .NoReset<br>
LDX YPosition+8<br>
INX<br>
BNE .NoReset<br>
LDX YPosition+12<br>
INX<br>
BNE .NoReset<br>
-Reset them here-<br>
.NoReset:<br>
<br>
It&apos;s 1. Bulky. 2. Inefficient. 3. COnfusing to anyoine trying to read your code to help you. I&apos;m sorry you guys don&apos;t like it, but honestly we need to work on better code examples and rework nerdy nights so it&apos;s less copying, and more real thinking. Because honestly, I don&apos;t ever help with NN because the code usually is horrid, especially when people extend on to it, because they use the same stuff, like &quot;DB walls&quot; as I call them, or just engine design that is weird. I know, shut up and do it yourself, one day, but for now man just....we as a community need to work together to make something better, even if it is just an &quot;alternative&quot; to it in some sections, or a &quot;What to avoid from the nerdy nights&quot; articles, I can do that. Or, just list off example of where nerdy nights code isn&apos;t good, and could be imporved on, that could work. I dunno, we&apos;re teaching these people assembly wrong, it&apos;s a good base for people who have programmed, and even people learning too, but it just could a lot better.
				</div><div class="mdl-card--border"></div>