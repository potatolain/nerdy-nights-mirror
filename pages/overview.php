<div class="mdl-layout__tab-panel is-active" id="overview">
    <section class="section--center mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col">
            <h4>Overview</h4>
            <p>
                Nerdy Nights is a tutorial series to help people write games for the NES. It introduces the concepts in a user-friendly way, and for years
                has been the go-to solution for many people to learn NES programming. It was originally written by Brian Parker
                (aka <a href="http://nintendoage.com/users/?bunnyboy">BunnyBoy</a>), with some additional audio tutorals written by 
                <a href="http://nintendoage.com/users/?MetalSlime">MetalSlime</a>.
            </p>

            <p>The original tutorial series is available <a href="http://nintendoage.com/pub/faq/NA/index.html?load=nerdy_nights_out.html">here</a>.

            <p>
                Recently, the links to the audio series fell off the internet due to a domain expiring. Luckily, members of the community kept these links
                alive. However, this exposed the fragility of having these tutorials on a bunch of forum posts, which could one day also disappear.
                MetalSlime's site also went offline, though there is a mirror of that available 
                <a href="http://web.archive.org/web/20150729002634/http://www.tummaigames.com:80/blog/">thanks to archive.org</a>.
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
                <a href="https://bitbucket.org/ddribin/nerdy-nights/src/default/">his BitBucket repo</a>. A backup zip is 
                also available <a href="downloads/nerdy-nights-ca65.zip">here</a>, in case you ever need it.
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


            <p>
                This site is maintained by <a href="https://twitter.com/cppchriscpp">cppchriscpp</a>, and is linked to 
                <a href="http://cpprograms.net">his site</a>. Another version is available <a href="http://cpprograms.net/devnull/nerdy-nights/index.php">there</a>. 
                Thanks for reading!
            </p>
            <!--
            <ul class="toc">
                <h4>Contents</h4>
                <a href="#lorem1">Lorem ipsum</a>
                <a href="#lorem2">Lorem ipsum</a>
                <a href="#lorem3">Lorem ipsum</a>
                <a href="#lorem4">Lorem ipsum</a>
                <a href="#lorem5">Lorem ipsum</a>
            </ul>
            <h5 id="lorem1">Lorem ipsum dolor sit amet</h5>
            Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
            <ul>
                <li>Nisi qui nisi duis commodo duis reprehenderit consequat velit aliquip.</li>
                <li>Dolor consectetur incididunt in ipsum laborum non et irure pariatur excepteur anim occaecat officia sint.</li>
                <li>Lorem labore proident officia excepteur do.</li>
            </ul>
            <p>
                Sit qui est voluptate proident minim cillum in aliquip cupidatat labore pariatur id tempor id. Proident occaecat occaecat sint mollit tempor duis dolor cillum anim. Dolore sunt ea mollit fugiat in aliqua consequat nostrud aliqua ut irure in dolore. Proident aliqua culpa sint sint exercitation. Non proident occaecat reprehenderit veniam et proident dolor id culpa ea tempor do dolor. Nulla adipisicing qui fugiat id dolor. Nostrud magna voluptate irure veniam veniam labore ipsum deserunt adipisicing laboris amet eu irure. Sunt dolore nisi velit sit id. Nostrud voluptate labore proident cupidatat enim amet Lorem officia magna excepteur occaecat eu qui. Exercitation culpa deserunt non et tempor et non.
            </p>
            <p>
                Do dolor eiusmod eu mollit dolore nostrud deserunt cillum irure esse sint irure fugiat exercitation. Magna sit voluptate id in tempor elit veniam enim cupidatat ea labore elit. Aliqua pariatur eu nulla labore magna dolore mollit occaecat sint commodo culpa. Eu non minim duis pariatur Lorem quis exercitation. Sunt qui ex incididunt sit anim incididunt sit elit ad officia id.
            </p>
            <p id="lorem2">
                Tempor voluptate ex consequat fugiat aliqua. Do sit et reprehenderit culpa deserunt culpa. Excepteur quis minim mollit irure nulla excepteur enim quis in laborum. Aliqua elit voluptate ad deserunt nulla reprehenderit adipisicing sint. Est in eiusmod exercitation esse commodo. Ea reprehenderit exercitation veniam adipisicing minim nostrud. Veniam dolore ex ea occaecat non enim minim id ut aliqua adipisicing ad. Occaecat excepteur aliqua tempor cupidatat aute dolore deserunt ipsum qui incididunt aliqua occaecat sit quis. Culpa sint aliqua aliqua reprehenderit veniam irure fugiat ea ad.
            </p>
            <p>
                Eu minim fugiat laborum irure veniam Lorem aliqua enim. Aliqua veniam incididunt consequat irure consequat tempor do nisi deserunt. Elit dolore ad quis consectetur sint laborum anim magna do nostrud amet. Ea nulla sit consequat quis qui irure dolor. Sint deserunt excepteur consectetur magna irure. Dolor tempor exercitation dolore pariatur incididunt ut laboris fugiat ipsum sunt veniam aute sunt labore. Non dolore sit nostrud eu ad excepteur cillum eu ex Lorem duis.
            </p>
            <p>
                Id occaecat velit non ipsum occaecat aliqua quis ut. Eiusmod est magna non esse est ex incididunt aute ullamco. Cillum excepteur sint ipsum qui quis velit incididunt amet. Qui deserunt anim enim laborum cillum reprehenderit duis mollit amet ad officia enim. Minim sint et quis aliqua aliqua do minim officia dolor deserunt ipsum laboris. Nulla nisi voluptate consectetur est voluptate et amet. Occaecat ut quis adipisicing ad enim. Magna est magna sit duis proident veniam reprehenderit fugiat reprehenderit enim velit ex. Ullamco laboris culpa irure aliquip ad Lorem consequat veniam ad ipsum eu. Ipsum culpa dolore sunt officia laborum quis.
            </p>
            <h5 id="lorem3">Lorem ipsum dolor sit amet</h5>
            <p id="lorem4">
                Eiusmod nulla aliquip ipsum reprehenderit nostrud non excepteur mollit amet esse est est dolor. Dolore quis pariatur sit consectetur veniam esse ullamco duis Lorem qui enim ut veniam. Officia deserunt minim duis laborum dolor in velit pariatur commodo ullamco eu. Aute adipisicing ad duis labore laboris do mollit dolor cillum sunt aliqua ullamco. Esse tempor quis cillum consequat reprehenderit. Adipisicing proident anim eu sint elit aliqua anim dolore cupidatat fugiat aliquip qui.
            </p>
            <p id="lorem5">
                Nisi eiusmod esse cupidatat excepteur exercitation ipsum reprehenderit nostrud deserunt aliqua ullamco. Anim est irure commodo eiusmod pariatur officia. Est dolor ipsum excepteur magna aliqua ad veniam irure qui occaecat eiusmod aute fugiat commodo. Quis mollit incididunt amet sit minim velit eu fugiat voluptate excepteur. Sit minim id pariatur ex cupidatat cupidatat nostrud nostrud ipsum.
            </p>
            <p>
                Enim ea officia excepteur ad veniam id reprehenderit eiusmod esse mollit consequat. Esse non aute ullamco Lorem aliqua qui dolore irure eiusmod aute aliqua proident labore aliqua. Ipsum voluptate voluptate exercitation laborum deserunt nulla elit aliquip et minim ex veniam. Duis cupidatat aute sunt officia mollit dolor ad elit ad aute labore nostrud duis pariatur. In est sint voluptate consectetur velit ea non labore. Ut duis ea aliqua consequat nulla laboris fugiat aute id culpa proident. Minim eiusmod laboris enim Lorem nisi excepteur mollit voluptate enim labore reprehenderit officia mollit.
            </p>
            <p>
                Cupidatat labore nisi ut sunt voluptate quis sunt qui ad Lorem esse nisi. Ex esse velit ullamco incididunt occaecat dolore veniam tempor minim adipisicing amet. Consequat in exercitation est elit anim consequat cillum sint labore cillum. Aliquip mollit laboris ad labore anim.
            </p>
            -->
        </div>
    </section>
</div>
