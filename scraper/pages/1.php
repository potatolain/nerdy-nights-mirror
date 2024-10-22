
					<font size="+1">Number Systems</font><br>
<b>Decimal</b><br>
The decimal system is base 10. Every digit can be 0-9. Each digit place is a power of 10. Each digit place to the left is 10 times more than the previous digit place. If you take the number 10 and put a 0 to the right, it becomes 100 which is 10 times more. Remove the 0 from the right, it becomes 1 which is 10 times less.<br>
&#xA0;
<pre>100&apos;s place    10&apos;s place    1&apos;s place
    0              0            1         = 001
    0              1            0         = 010
    1              0            0         = 100</pre>
<br>
To get the value of a number, you multiply each digit by it&apos;s place value and add them all together.<br>
&#xA0;
<pre>100&apos;s place    10&apos;s place    1&apos;s place
    3              8            0         = 3*100 + 8*10 + 0*1 = 380
    0              4            1         = 0*100 + 4*10 + 1*1 = 41</pre>
<br>
<b>Binary</b><br>
Everything in computers is done in base 2, binary. This is because the lowest level of computing is a switch; on/off, 1/0.<br>
<br>
Base 2 binary works the same way, except each digit can be 0-1 and the place values are powers of 2 instead of 10. Insert a 0 to the right of a number and it becomes 2 times bigger. Remove a 0 and it becomes 2 times smaller.<br>
&#xA0;
<pre>8&apos;s place    4&apos;s place    2&apos;s place   1&apos;s place
   0            1            0           0       = 0*8 + 1*4 + 0*2 + 0*1 = 4
   1            1            1           1       = 1*8 + 1*4 + 1*2 + 1*1 = 15</pre>
<br>
The NES is an 8 bit system, which means the binary number it works with are 8 binary digits long. 8 bits is one byte. Some examples are:<br>
&#xA0;
<pre> Binary    Decimal
00000000 =  0
00001111 =  15
00010000 =  16
10101010 =  170
11111111 =  255</pre>
<br>
Eventually you become fast at reading binary numbers, or at least recognizing patterns. You can see that one byte can only range from 0-255. For numbers bigger than that you must use 2 or more bytes. There are also no negative numbers. More on that later.<br>
<br>
<br>
<b>Hexadecimal</b><br>
Hexadecimal or Hex is base 16, so each digit is 0-15 and each digit place is a power of 16. The problem is anything 10 and above needs 2 digits. To fix this letters are used instead of numbers starting with A:<br>
&#xA0;
<pre>Decimal   Hex
    0   =  0
    1   =  1
    9   =  9
   10   =  A
   11   =  B
   12   =  C
   13   =  D
   14   =  E
   15   =  F</pre>
<br>
As with decimal and hex the digit places are each a power of 16:<br>
&#xA0;
<pre> 16&apos;s place   1&apos;s place
     6           A       = 6*16 + A(10)*1 = 106
     1           0       = 1*16 +     0*1 = 16</pre>
<br>
Hex is largely used because it is much faster to write than binary. An 8 digit binary number turns into a 2 digit hex number:<br>
&#xA0;
<pre>Binary     01101010
split        |  |
in half     /    \
         0110   1010
into       |     |
 hex       6     A
           |     |
 put       \    /
 back        6A
 <br><br> 01101010 = 6A</pre>
<br>
<br>
And more examples:
<pre>Binary     Hex   Decimal 
00000000 = 00  = 0
00001111 = 0F  = 15
00010000 = 10  = 16
10101010 = AA  = 170
11111111 = FF  = 255</pre>
<br>
For easy converting open up the built in Windows calculator and switch it to scientific mode. Choose the base (Hex, Dec, or Bin), type the number, then switch to another base.<br>
<br>
When the numbers are written an extra character is added so you can tell which base is being used. Binary is typically prefixed with a %, like %00001111. Hex is prefixed with a $ like $2A. Some other conventions are postfixing binary with a b like 00001111b and postfixing hex with an h like 2Ah.<br>
<br>
The NES has a 16 bit address bus (more on that later), so it can access 2^16 bytes of memory. 16 binary digits turns into 4 hex digits, so typical NES addresses look like $8000, $FFFF, and $4017.<br>
<br>
<br>
<font size="+1">Core Programming Concepts</font><br>
All programming languages have three basic concepts. They are instructions, variables, and control flow. If any of those three are missing it is no longer a true programming language. For example HTML has no control flow so it is not a programming language.<br>
<br>
<b>Instructions</b><br>
An instruction is the smallest command that the processor runs. Instructions are run one at a time, one after another. In the NES processor there are only 56 instructions. Typically around 10 of those will be used constantly, and at least 10 will be completely ignored. Some examples of these would be addition, loading a number, or comparing a variable to zero.<br>
<br>
<b>Variables</b><br>
A variable is a place that stores data that can be modified. An example of this would be the vertical position of Mario on the screen. It can be changed any time during the game. Variables in source code all have names you set, so it would be something like MarioHorizPosition.<br>
<br>
<b>Control Flow</b><br>
Normally your instructions run in sequential order. Sometimes you will want to run a different section of code depending on a variable. This would be a control flow statement which changes the normal flow of your program. An example would be if Mario is falling, jump to the code that checks if he hit the ground yet.<br>
<br>
<br>
<br>
<b>NEXT WEEK: basic NES architecture</b>
				