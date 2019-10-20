<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 22 at 7:13:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
Sorry that I wasn&apos;t more clear.<br>
<br>
1.) The .rs 1 variables are simply declaring them as variables in zero page. The default value is zero I guess, since your clearmem routine is zeroing out everything upon bootup initalization. .rs 1 is simply reserving a byte of RAM for a variable called whatever we do a .rs 1 for. Your assessment is correct. Setting it to ShipDirection = #$01 would make that variable be 1 the entire game (a constant). Reserving a byte of memory allows us to change the value to anything we want at any time.<br>
<br>
2.) When we&apos;re looking at the table I typed out (ShipLookupTable), we can see there are 16 values (two per direction. One for sprite, and one for attribute byte). If, for example, the ship is facing up, ShipDirection would be $00 since it&apos;s at the first value of the table. If we&apos;re still turning left, it would decrement that value twice. If we decrement $00 twice, it would be $FE, which has wrapped off the bottom of the table, so we want to instead set it to the highest first-byte value of our table, which is $0E (the sprite of up/left). The same thing applies in the opposite direction. If the ship is facing up/left and we continue to press the Right direction, it will increment ShipDirection twice, which would put the value at $10, which is higher (more values) than our table goes. We want to wrap it back to the lowest first-byte of the table, which is $00.<br>
<br>
ShipLookupTable: (the following numbers are just POSITIONS. Not values. The red text doesn&apos;t really exist in the table, but the increment/decrement code will get there when you&apos;re inc/dec past where there are values, hence the need to reset back onto the table)<br>
<span style="color:#FF0000;">$FE,$FF; if you&apos;ve decremented down to this point, you&apos;ve wrapped off table. reset back to $0E</span><br>
$00,$01<br>
$02,$03<br>
$04,$05<br>
$06,$07<br>
$08,$09<br>
$0A,$0B<br>
$0C,$0D<br>
$0E,$0F<br>
<span style="color:#FF0000;">$10,$11; if you&apos;ve incremented up to this point, you&apos;ve wrapped off table. reset back to $00</span><br>
<br>
3.) All of the .rs values go at the top before bank zero. This is called zero page. The MoveShip subroutine (which includes a .Reset local subroutine) can go anywhere in any bank. The ShipLocation table can also go anywhere, assuming you are using a mapper that doesn&apos;t bankswitch.<br>
<br>
4.) As mentioned in my post, Buttons gets populated through a subroutine detailed in Nerdy Nights week 7, labeled &quot;Better Controller Reading.&quot; You don&apos;t have to use it. I was just using it to more simply illustrate the button presses (but I would recommend learning to use it, as it&apos;s how I still read controllers to this day).</div>
<br>
No worries about the clarity, hopefully my questions are coming off as I hope, very geniune.<br>
I&apos;m happy to get any help I can, and even if you never responded, I&apos;d still be VERY grateful for what nudges you&apos;ve given me so far&#xA0;<span class="sprites_emoticons absmiddle" id="emo_happy">&#xA0;</span><br>
<br>
Question 1<br>
&quot;<span style="font-size: 11px;">since your clearmem routine is zeroing out everything upon bootup initalization&quot;&#xA0;</span><br>
This sentence made the first part click, for whatever reason I never realized that..&#xA0;<span class="sprites_emoticons absmiddle" id="emo_blush">&#xA0;</span><br>
<br>
Question 2<br>
The table you drew out makes lots of sense, I have to see it, and that made it click... the paragraph before it I&apos;m still on my 4th read trying to gather it in, lol.. I&apos;m a visual learner so takes me a while to get it, but thankyou!!&#xA0;<br>
<br>
Question 3<br>
So yeah, I&apos;m using nrom / mapper 0, because I don&apos;t know how to bankswitch yet. I&apos;m baby stepping, single screen game (like asteroids). So no scrolling, no bank switching, etc. just getting the basics in this asteroids demo. Crawl, walk, run kinda plan.&#xA0; It is interesting that you said the subroutine could go anywhere. I thought controller manipulation had to be in the NMI section, preferrably before you draw / update sprites.<br>
<br>
The ShipLocation table going anywhere also blew me away. <span class="sprites_emoticons absmiddle" id="emo_confused">&#xA0;</span>&#xA0;I&apos;m still learning banks and where stuff goes. I know based on my header for inesprg I have 1 16K bank for my code, ineschr I have 1 single 8KB for my bin / chr file. NN week 2 was where I based most of that information from. But for example, its not explained the purpose of $0800-$2000, which is another 6KB. So the purpose and addresses of each banks and overall total size (for mapper 0) I&apos;m still a little fuzzy on.&#xA0;<br>
<br>
Question 4&#xA0;&#xA0;<br>
Gotcha. Yeah, I saw your code and it wasn&apos;t until earlier this morning it kinda clicked that it was code, but a bit psuedo code and I needed to use this with the week 7 subroutines. I was gonna delete my question but then I was like...oh well.&#xA0;<br>
<br>
Anyway, thanks again, I&apos;ll be working on this for the next few evenings I&apos;m sure, and running into more issues I&apos;m sure. But thats my joy in doing this, learning while creating something, so cool!<br>
<br>
<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>