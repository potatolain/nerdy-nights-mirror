<div class="mdl-layout__tab-panel" id="advanced_tutorial">
    <section class="section--center mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col">
            <h4>Advanced Tutorial Series</h4>

            <h5>Chapters</h5>
            <ul class="toc" id="advanced_tutorial-toc">

                <?php foreach ($TUTORIAL_MANIFEST['advanced'] as $idx => $item): ?>
                    <a href="#advanced_tutorial-<?php echo $idx; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </ul>

            <?php foreach($TUTORIAL_MANIFEST['advanced'] as $idx => $item): ?>
                <?php $CURR_PAGE = explode('.', $item['filename'])[0]; ?>

                <div class="tutorialCard mdl-card mdl-shadow--2dp" id="advanced_tutorial-<?php echo $idx; ?>">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><?php echo $item['name']; ?></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <?php include "scraper/pages/" . $item['filename']; ?>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#advanced_tutorial-toc">
                            Back to Table of Contents
                        </a>
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="javascript:doCommentToggle('advanced_tutorial-<?php echo $idx; ?>__comments');">
                            Toggle Comments
                        </a>
                        <div style="float: right;">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="<?php echo $item['originalUrl']; ?>" target="_blank">
                                Original Article
                            </a>
                        </div>

                    </div>
                </div>
                <div class="comments" style="display: none;" id="advanced_tutorial-<?php echo $idx; ?>__comments">
                    <?php foreach (glob('scraper/pages/' . $CURR_PAGE . '/*.php') as $subIndex => $file): ?>

                        <div class="commentCard mdl-card mdl-shadow--2dp" id="advanced_tutorial-<?php echo $idx . '__' . ($subIndex + 1); ?>">
                            <?php /* This is quite a hack... since we know all comments will be numeric and in order... we just use the arary for length, and dummy up the file names. ¯\_(ツ)_/¯ */ ?>
                            <?php include 'scraper/pages/' . $CURR_PAGE . '/' . ($subIndex + 1) . '.php'; ?>
                        </div>
                    <?php endforeach;?>
                </div>

                <div class="spacer"></div>

            <?php endforeach; ?>

        </div>
    </section>
</div>
