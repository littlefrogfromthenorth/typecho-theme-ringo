<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="sidebar" role="complementary">
	<section class="widget sidebar-foot">
        <ul class="widget-list">
            <li>Proudly powered by <a rel="nofollow" target="_blank" href="http://www.typecho.org">Typecho</a></li>
            <li>Theme <a rel="nofollow" target="_blank" href="https://github.com/memset0/typecho-theme-ringo">Ringo</a> by <a rel="nofollow" target="_blank" href="https://memset0.cn">memset0</a></li>
            <li>
                <?php if ($this->options->EnableBusuanzi == 'able' ): ?>
                <span id="busuanzi_value_site_pv">......</span> visits ·
                <span id="busuanzi_value_site_uv">......</span> visitors ·
                <?php endif; ?>
                <?php if ($this->options->EnableWordsCounter == 'able' ): ?>
                <span id="words_counter"><?php WordsCounter_Plugin::allOfCharacters(); ?></span> words
                <?php endif; ?>
            </li>
        </ul>
    </section>
</div><!--end #sidebar -->

<div id="helpbar">
    <div class="back-to-top">
        <button id="back2top">↑</button>
        <script>
            back2top.onclick = function() {
                var movement = document.body.scrollTop || document.documentElement.scrollTop;
                scrollBy(0, -movement);
            }
        </script>
    </div>
</div><!--end #helpbar -->