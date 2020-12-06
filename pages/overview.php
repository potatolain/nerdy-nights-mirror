<div class="mdl-layout__tab-panel is-active" id="overview">
    <section class="section--center mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col">
            <h4>Overview</h4>
            <p>
                Nerdy Nights is a tutorial series to help people write games for the NES. It introduces the concepts in a user-friendly way, and for years
                has been the go-to solution for many people to learn NES programming. It was originally written by Brian Parker
                (aka <a href="http://nintendoage.com/users/?bunnyboy" target="_blank">BunnyBoy</a>), with some additional audio tutorals written by 
                <a href="http://nintendoage.com/users/?MetalSlime" target="_blank">MetalSlime</a>.
            </p>

            <p>The original tutorial series is available <a href="http://archive.nes.science/nintendoage-forums/nintendoage.com/forum/messageviewadfa.html?catid=22&threadid=7155" target="_blank">here</a>.

            <p>A PDF version created by <a href="https://fuzzytek.ml" target="_blank">Fuzzy</a> is also available for on-the-go reading. Grab that <a href="downloads/Nerdy-Nights-NES-Tutorials-v1.pdf" target="_blank">here</a></p>

            <p>
                Recently, the links to the audio series fell off the internet due to a domain expiring. Luckily, members of the community kept these links
                alive. However, this exposed the fragility of having these tutorials on a bunch of forum posts, which could one day also disappear.
                MetalSlime's site also went offline, though there is a mirror of that available 
                <a href="http://web.archive.org/web/20150729002634/http://www.tummaigames.com:80/blog/" target="_blank">thanks to archive.org</a>.
                In addition, the entire NintendoAge site was recently merged with gocollect's forums, breaking most of the links, images, avatars,
                etc.
            </p>

            <p>
                This site aims to be an archive of all of the information included in the tutorial series, and also a singular
                archive that can easily be moved, in case this site some day also goes offline. The links above will take you to 
                adapted versions of the tutorials. Enjoy!
            </p>

            <p>
                Since some of the images from the audio tutorial have fully disappeared from the internet, I tried to add some that
                make sense in context. Please feel free to reach out to me if you have better ones you'd like to substitute in!
            </p>

            <p>
                There is also a port of the main tutorial series to ca65 done by Dave Dribin, (ddbribin) which is good for getting your start with
                that assembler. Not all tutorials are ported, but it's a good start, and a good way to get familiar with that syntax.
                Find it on
                <a href="https://bitbucket.org/ddribin/nerdy-nights/src/default/" target="_blank">his BitBucket repo</a>. A backup zip is 
                also available <a href="downloads/nerdy-nights-ca65.zip">here</a>, in case you ever need it.
            </p>

            <p>
                Finally, there are a few other popular topics and tutorials in the Miscellaneous section, all taken from 
                popular topic on NintendoAge. These are by various authors, who are credited in their individual posts.
            </p>

            <p>
                Want to save this locally in case my site goes down, or the apocalypse hits, or whatever? Sure thing!
                <a href="full_site.zip">Full site download</a>
            </p>

            <h4>Table of Contents</h5>

            <h5>Main Tutorial Series</h5>
            <ul class="toc">

                <?php foreach ($TUTORIAL_MANIFEST['main'] as $idx => $item): ?>
                    <a href="#main_tutorial-<?php echo $idx; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </ul>

            <h5>Advanced Tutorial Series</h5>
            <ul class="toc">

                <?php foreach ($TUTORIAL_MANIFEST['advanced'] as $idx => $item): ?>
                    <a href="#advanced_tutorial-<?php echo $idx; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </ul>

            <h5>Audio Tutorial Series</h5>
            <ul class="toc">

                <?php foreach ($TUTORIAL_MANIFEST['audio'] as $idx => $item): ?>
                    <a href="#audio_tutorial-<?php echo $idx; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </ul>

            <h5>Miscellaneous Articles</h5>

            <ul class="toc">
                <?php foreach ($TUTORIAL_MANIFEST['misc'] as $idx => $item): ?>
                    <a href="#misc-<?php echo $idx; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </ul>


            <p>
                This site is maintained by <a href="https://twitter.com/cppchriscpp">cppchriscpp</a>, and is linked to 
                <a href="http://cpprograms.net">his site</a>. Another version is available <a href="http://cpprograms.net/devnull/nerdy-nights/">there</a>. 
                Thanks for reading!
            </p>
        </div>
    </section>
</div>
