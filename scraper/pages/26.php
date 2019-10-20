
<p>As I was growing up, I kept a notebook full of cool code snippets and ideas. My notebook had been misplaced but I ran across it recently and here is one of the pages which is from a 1987 Dr. Dobbs article by Mark S. Ackerman. &quot;6502 Killer Hacks&quot;.<br><br><span style="color:#FF0000;">Post your own 6502 Killer Hacks and share them with the rest of us!</span><br><br>I also checked into Mark S. Ackerman with our trusty tool Google and found his <a href="downloads/missing/vita.pdf" rel="external nofollow" original-href="https://www.eecs.umich.edu/~ackerm/vita.pdf">&apos;vita&apos;</a> -<br><br>Pretty sure it&apos;s the same guy as he worked at GCC from 1982 - 1984 and was the lead on Ms. PacMan, Galaxian and Moon Patrol - time to update AtariAge database as these games are empty when it comes to staff<br><br>He has a patent on the Galaxian kernel.<br><br>Well here is the killer hack. This one is to scrimp on RAM.<br><br>Incrementing only the lower 4 bits of a byte (with wrap)<br><br></p>
<pre class="ipsCode prettyprint">...
   lda word      ; original byte
   and #$0f      ; retrieve lower nybble
   tay            ; index
   lda word
   clc            ; might not be needed
   adc nextinc,y  ; could be ora or sbc
   sta word
...

nextinc .byte 1,2,3,4,5,6,7,8
        .byte 9,10,11,12,13,14,15,0</pre>
<br>Well, funny thing is - maybe I didn&apos;t transcribe it properly back in &apos;87 - because it doesn&apos;t seem like it would work.<br><br>Seems like it needs an AND #$F0 after the second LDA word<br><br><br>So I thought I&apos;d take a shot at a working version...<br><br><pre class="ipsCode prettyprint">...
   lda word      ; original byte
   and #$0f      ; retrieve lower nybble
   tay            ; index
   lda word
   clc
   adc nextinc,y
   sta word
...

nextinc .byte 1,1,1,1,1,1,1,1
        .byte 1,1,1,1,1,1,1,-15</pre>
<br>who knows if that one works either. :-)<br><br>If someone has the original article from Feb 1987 Dr. Dobbs Journal, I&apos;d be curious to see the code.<br><br><span style="color:#FF0000;">Also, post your own 6502 Killer Hacks and share them with the rest of us!</span><br><br>- David<br><br>Updated 2017: Just came across the original PDF of the article by Mark S. Ackerman and confirmed that I did transcribe it incorrectly but my fixed version is the same as the published version.<br><br><a href="scraper/files/6502_hacks.pdf" rel="external nofollow" original-href="http://archive.6502.org/publications/dr_dobbs_journal_selected_articles/6502_hacks.pdf">http://archive.6502.org/publications/dr_dobbs_journal_selected_articles/6502_hacks.pdf</a>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2017-04-01T19:21:52Z" title="04/01/2017 07:21  PM" data-short="2 yr">April 1, 2017</time> by djmips</strong>
</span>
