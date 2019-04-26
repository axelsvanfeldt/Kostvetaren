<?php
class ContentHandler {
    public static function getHeader($config, $page) {
        $content = '
        <div data-role="page" id="' . $page . '-page"> 
            <header data-role="header" data-position="fixed">
                <div class="header-text">' . $config["full_name"] . '</div>
                <nav>
                    <a href="#info-page" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-b ui-btn-icon-notext">Info</a>
                    <a href="#search-page" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-b ui-btn-icon-notext">Sök</a>
                </nav>
            </header>
            <div class="ui-content">';
        echo $content;
    }
    public static function getFooter() {
        $content = '
            </div>
        </div>';
        echo $content;
    }
}
?>