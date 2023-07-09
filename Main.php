<?php

    namespace IdnoPlugins\Video {

        class Main extends \Idno\Common\Plugin {

            function registerPages() {
                \Idno\Core\Idno::site()->routes()->addRoute('/video/edit/?', '\IdnoPlugins\Video\Pages\Edit');
                \Idno\Core\Idno::site()->routes()->addRoute('/video/edit/:id/?', '\IdnoPlugins\Video\Pages\Edit');
                \Idno\Core\Idno::site()->routes()->addRoute('/video/delete/:id/?', '\IdnoPlugins\Video\Pages\Delete');
            }
        }

    }
