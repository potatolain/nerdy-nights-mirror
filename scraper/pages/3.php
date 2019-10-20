
					<a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=4291" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=4291">Previous Week</a> - NES architecture overview<br><br>
<b>This Week:</b> starts getting into more details about the 6502 and
intro to assembly language. The lessons for asm usage and NES specifics
will be done in sections together. There are many other 6502 <a href="http://www.obelisk.demon.co.uk/6502/" target="_blank" original-href="http://www.obelisk.demon.co.uk/6502/">websites</a> and good books which may help you learn better.<br><br><br><br><font size="+2">6502 Assembly</font><br>
<i>Bit - The smallest unit in computers.  It is either a 1 (on) or a 0 (off), like a light switch. <br><br>
Byte - 8 bits together form one byte, a number from 0 to 255. Two bytes
put together is 16 bits, forming a number from 0 to 65535. Bits in the
byte are numbered starting from the right at 0.<br><br>
Instruction - one command a processor executes. Instructions are run sequentially.</i>
<br><br>
<font size="+1">Code Layout</font><br>
In assembly language there are 5 main parts. Some parts must be in a
specific horizontal position for the assembler to use them correctly.<br><br>
<b>Directives</b><br>
Directives are commands you send to the assembler to do things like
locating code in memory. They start with a . and are indented. Some
people use tabs, or 4 spaces, and I use 2 spaces. This sample directive
tells the assembler to put the code starting at memory location $8000,
which is inside the game ROM area:<br>
<pre>  .org $8000</pre>
<br>
<b>Labels</b><br>
The label is aligned to the far left and has a : at the end. The label
is just something you use to organize your code and make it easier to
read. The assembler translates the label into an address. Sample label:<br>
<pre>  .org $8000<br>MyFunction:<br></pre>
When the assembler runs, it will do a find/replace to set MyFunction to
$8000. The if you have any code that uses MyFunction like:<br>
<pre>  STA MyFunction<br></pre>
It will find/replace to:<br>
<pre>  STA $8000<br></pre><br>
<b>Opcodes</b><br>
The opcode is the instruction that the processor will run, and is
indented like the directives. In this sample, JMP is the opcode that
tells the processor to jump to the MyFunction label:<br>
<pre>  .org $8000<br>MyFunction:<br>  JMP MyFunction<br></pre><br>
<b>Operands</b><br>
The operands are additional information for the opcode. Opcodes have
between one and three operands. In this example the #$FF is the operand:<br>
<pre>  .org $8000<br>MyFunction:<br>  LDA #$FF<br>  JMP MyFunction<br></pre><br>
<b>Comments</b><br>
Comments are to help you understand in English what the code is doing.
When you write code and come back later, the comments will save you.
You do not need a comment on every line, but should have enough to
explain what is happening. Comments start with a ; and are completely
ignored by the assembler. They can be put anywhere horizontally, but
are usually spaced beyond the long lines.<br>
<pre>  .org $8000<br>MyFunction:        ; loads FF into accumulator<br>  LDA #$FF<br>  JMP MyFunction<br></pre>
This code would just continually run the loop, loading the hex value $FF into the accumulator each time.<br>
<br><br><br><font size="+1">6502 Processor Overview</font><br>
The 6502 is an 8 bit processor with a 16 bit address bus. It can access
64KB of memory without bank switching. In the NES this memory space is
split up into RAM, PPU/Audio/Controller access, and game ROM.<br>
<pre>$0000-0800 - Internal RAM, 2KB chip in the NES<br>$2000-2007 - PPU access ports<br>$4000-4017 - Audio and controller access ports<br>$6000-7FFF - Optional WRAM inside the game cart<br>$8000-FFFF - Game cart ROM<br></pre>
Any of the game cart sections can be bank switched to get access to
more memory, but memory mappers will not be included in this tutorial.<br><br><br><br>
<font size="+1">6502 Assembly Overview</font><br>
The assembly language for 6502 starts with a 3 character code for the
instruction &quot;opcode&quot;. There are 56 instructions, 10 of which you will
use frequently. Many instructions will have a value after the opcode,
which you can write in decimal or hex. If that value starts with a #
then it means use the actual number. If the value doesn&apos;t have then #
then it means use the value at that address. So LDA #$05 means load the
value 5, LDA $0005 means load the value that is stored at address $0005.<br><br><br><br><font size="+1">6502 Registers</font><br>
A register is a place inside the processor that holds a value. The 6502
has three 8 bit registers and a status register that you will be using.
All your data processing uses these registers. There are additional
registers that are not covered in this tutorial.<br><br>
<b>Accumulator</b><br>
The Accumulator (A) is the main 8 bit register for loading, storing,
comparing, and doing math on data. Some of the most frequent operations
are:<br>
<pre>LDA #$FF  ;load the hex value $FF (decimal 256) into A<br>STA $0000 ;store the accumulator into memory location $0000, internal RAM<br></pre><br>
<b>Index Register X</b><br>
The Index Register X (X) is another 8 bit register, usually used for
counting or memory access. In loops you will use this register to keep
track of how many times the loop has gone, while using A to process
data. Some frequent operations are:<br>
<pre>LDX $0000 ;load the value at memory location $0000 into X<br>INX       ;increment X   X = X + 1<br></pre><br>
<b>Index Register Y</b><br>
The Index Register Y (Y) works almost the same as X. Some instructions
(not covered here) only work with X and not Y. Some operations are:
<pre>STY $00BA ;store Y into memory location $00BA<br>TYA       ;transfer Y into Accumulator<br></pre><br>
<b>Status Register</b><br>The Status Register holds flags with
information about the last instruction. For example when doing a
subtract you can check if the result was a zero. <br><br><br><br><font size="+1">6502 Instruction Set</font><br>
These are just the most common and basic instructions. Most have a few
different options which will be used later. There are also a few more
complicated instructions to be covered later.<br><br>
<b>Common Load/Store opcodes</b><br>
<pre>LDA #$0A   ; LoaD the value 0A into the accumulator A<br>           ; the number part of the opcode can be a value or an address<br>           ; if the value is zero, the zero flag will be set.<br><br>LDX $0000  ; LoaD the value at address $0000 into the index register X<br>           ; if the value is zero, the zero flag will be set.<br><br>LDY #$FF   ; LoaD the value $FF into the index register Y<br>           ; if the value is zero, the zero flag will be set.<br><br>STA $2000  ; STore the value from accumulator A into the address $2000<br>           ; the number part must be an address<br><br>STX $4016  ; STore value in X into $4016<br>           ; the number part must be an address<br><br>STY $0101  ; STore Y into $0101<br>           ; the number part must be an address<br><br>TAX        ; Transfer the value from A into X<br>           ; if the value is zero, the zero flag will be set<br><br>TAY        ; Transfer A into Y<br>           ; if the value is zero, the zero flag will be set<br><br>TXA        ; Transfer X into A<br>           ; if the value is zero, the zero flag will be set<br><br>TYA        ; Transfer Y into A<br>           ; if the value is zero, the zero flag will be set<br><br></pre><br>
<b>Common Math opcodes</b><br>
<pre>ADC #$01   ; ADd with Carry<br>           ; A = A + $01 + carry<br>           ; if the result is zero, the zero flag will be set<br><br>SBC #$80   ; SuBtract with Carry<br>           ; A = A - $80 - (1 - carry)<br>           ; if the result is zero, the zero flag will be set<br><br>CLC        ; CLear Carry flag in status register<br>           ; usually this should be done before ADC<br><br>SEC        ; SEt Carry flag in status register<br>           ; usually this should be done before SBC<br><br>INC $0100  ; INCrement value at address $0100<br>           ; if the result is zero, the zero flag will be set<br><br>DEC $0001  ; DECrement $0001<br>           ; if the result is zero, the zero flag will be set<br><br>INY        ; INcrement Y register<br>           ; if the result is zero, the zero flag will be set<br><br>INX        ; INcrement X register<br>           ; if the result is zero, the zero flag will be set<br><br>DEY        ; DEcrement Y<br>           ; if the result is zero, the zero flag will be set<br><br>DEX        ; DEcrement X<br>           ; if the result is zero, the zero flag will be set<br><br>ASL A      ; Arithmetic Shift Left<br>           ; shift all bits one position to the left<br>           ; this is a multiply by 2<br>           ; if the result is zero, the zero flag will be set<br><br>LSR $6000  ; Logical Shift Right<br>           ; shift all bits one position to the right<br>           ; this is a divide by 2<br>           ; if the result is zero, the zero flag will be set<br></pre><br>
<b>Common Comparison opcodes</b><br>
<pre>CMP #$01   ; CoMPare A to the value $01<br>           ; this actually does a subtract, but does not keep the result<br>           ; instead you check the status register to check for equal, <br>           ; less than, or greater than<br><br>CPX $0050  ; ComPare X to the value at address $0050<br><br>CPY #$FF   ; ComPare Y to the value $FF<br></pre><br>
<b>Common Control Flow opcodes</b><br>
<pre>JMP $8000  ; JuMP to $8000, continue running code there<br><br>BEQ $FF00  ; Branch if EQual, contnue running code there<br>           ; first you would do a CMP, which clears or sets the zero flag<br>           ; then the BEQ will check the zero flag<br>           ; if zero is set (values were equal) the code jumps to $FF00 and runs there<br>           ; if zero is clear (values not equal) there is no jump, runs next instruction<br><br>BNE $FF00  ; Branch if Not Equal - opposite above, jump is made when zero flag is clear<br></pre><br><br>
<font size="+2">NES Code Structure</font><br>
<b>Getting Started</b><br>
This section has a lot of information because it will get everything
set up to run your first NES program. Much of the code can be
copy/pasted then ignored for now. The main goal is to just get NESASM
to output something useful.<br><br>
<b>iNES Header</b><br>
The 16 byte iNES header gives the emulator all the information about
the game including mapper, graphics mirroring, and PRG/CHR sizes. You
can include all this inside your asm file at the very beginning.<br>
<pre>  .inesprg 1   ; 1x 16KB bank of PRG code<br>  .ineschr 1   ; 1x 8KB bank of CHR data<br>  .inesmap 0   ; mapper 0 = NROM, no bank swapping<br>  .inesmir 1   ; background mirroring (ignore for now)<br></pre><br>
<b>Banking</b><br>
NESASM arranges everything in 8KB code and 8KB graphics banks. To fill
the 16KB PRG space 2 banks are needed. Like most things in computing,
the numbering starts at 0. For each bank you have to tell the assembler
where in memory it will start.<br>
<pre>  .bank 0<br>  .org $C000<br>;some code here<br><br>  .bank 1<br>  .org $E000<br>; more code here<br><br>  .bank 2<br>  .org $0000<br>; graphics here<br></pre><br>
<b>Adding Binary Files</b>
Additional data files are frequently used for graphics data or level
data. The incbin directive can be used to include that data in your
.NES file. This data will not be used yet, but is needed to make the
.NES file size match the iNES header.<br>
<pre>  .bank 2<br>  .org $0000<br>  .incbin &quot;mario.chr&quot;   ;includes 8KB graphics file from SMB1<br></pre><br><br>
<b>Vectors</b><br>
There are three times when the NES processor will interrupt your code
and jump to a new location. These vectors, held in PRG ROM tell the
processor where to go when that happens. Only the first two will be
used in this tutorial.<br><br>
<b>NMI Vector</b> - this happens once per video frame, when enabled.
The PPU tells the processor it is starting the VBlank time and is
available for graphics updates.<br>
<b>RESET Vector</b> - this happens every time the NES starts up, or the reset button is pressed.<br>
<b>IRQ Vector</b> - this is triggered from some mapper chips or audio interrupts and will not be covered.<br><br>
These three must always appear in your assembly file the right order.
The .dw directive is used to define a Data Word (1 word = 2 bytes):<br>
<pre>  .bank 1<br>  .org $FFFA     ;first of the three vectors starts here<br>  .dw NMI        ;when an NMI happens (once per frame if enabled) the <br>                   ;processor will jump to the label NMI:<br>  .dw RESET      ;when the processor first turns on or is reset, it will jump<br>                   ;to the label RESET:<br>  .dw 0          ;external interrupt IRQ is not used in this tutorial<br><br></pre><br>
<b>Reset Code</b><br>
The reset vector was set to the label RESET, so when the processor
starts up it will start from RESET: Using the .org directive that code
is set to a space in game ROM. A couple modes are set right at the
beginning. We are not using IRQs, so they are turned off. The NES 6502
processor does not have a decimal mode, so that is also turned off.
This section does NOT include everything needed to run code on the real
NES, but will work with the FCEUXD SP emulator. More reset code will be
added later.<br>
<pre>  .bank 0<br>  .org $C000<br>RESET:<br>  SEI        ; disable IRQs<br>  CLD        ; disable decimal mode<br></pre><br>
<b>Completing The Program</b><br>
Your first program will be very exciting, displaying an entire screen
of one color! To do this the first PPU settings need to be written.
This is done to memory address $2001. The 76543210 is the bit number,
from 7 to 0. Those 8 bits form the byte you will write to $2001.<br>
<pre>PPUMASK ($2001)<br><br>76543210<br>||||||||<br>|||||||+- Grayscale (0: normal color; 1: AND all palette entries<br>|||||||   with 0x30, effectively producing a monochrome display;<br>|||||||   note that colour emphasis STILL works when this is on!)<br>||||||+-- Disable background clipping in leftmost 8 pixels of screen<br>|||||+--- Disable sprite clipping in leftmost 8 pixels of screen<br>||||+---- Enable background rendering<br>|||+----- Enable sprite rendering<br>||+------ Intensify reds (and darken other colors)<br>|+------- Intensify greens (and darken other colors)<br>+-------- Intensify blues (and darken other colors)<br></pre><br>
So if you want to enable the sprites, you set bit 3 to 1.  For this program bits 7, 6, 5 will be used to set the screen color:<br>
<pre>  LDA %10000000   ;intensify blues<br>  STA $2001<br>Forever:<br>  JMP Forever     ;infinite loop<br></pre><br>
<b>Putting It All Together</b><br>
Download and unzip the <a href="scraper/files/background.zip" target="_blank" original-href="http://www.nespowerpak.com/nesasm/background.zip">background.zip</a>
sample files. All the code above is in the background.asm file. Make
sure that file, mario.chr, and background.bat is in the same folder as <a href="scraper/files/NESASM3.zip" target="_blank" original-href="http://www.nespowerpak.com/nesasm/NESASM3.zip">NESASM3</a>, then double click on background.bat.  That will run NESASM3 and should produce background.nes.  Run that NES file in <a href="http://www.the-interweb.com/serendipity/exit.php?url_id=627_id=90" target="_blank" original-href="http://www.the-interweb.com/serendipity/exit.php?url_id=627_id=90">FCEUXD SP</a> to see your background color!  Edit background.asm to change the intensity bits 7-5 to make the background red or green.<br><br>
You can start the Debug... from the Tools menu in <a href="http://www.the-interweb.com/serendipity/exit.php?url_id=627&amp;entry_id=90" target="_blank" original-href="http://www.the-interweb.com/serendipity/exit.php?url_id=627&amp;entry_id=90">FCEUXD SP</a>
to watch your code run. Hit the Step Into button, choose Reset from the
NES menu, then keep hitting Step Into to run one instruction at a time.
On the left is the memory address, next is the hex opcode that the 6502
is actually running. This will be between one and three bytes. After
that is the code you wrote, with the comments taken out and labels
translated to addresses. The top line is the instruction that is going
to run next. So far there isn&apos;t much code, but the debugger will be
very helpful later.
<br><br><br>
<b>NEXT WEEK:</b> more PPU details, start of graphics
				