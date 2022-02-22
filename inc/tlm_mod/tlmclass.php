<?php

namespace tlm;

class TlmClass
{
    static $tlmDebug = array();
    function __construct()
    {
    }

    public static function Server($serverProp)
    {
        $server = $_SERVER[$serverProp];
        return $server;
    }

    public static function ViewMenu($arMenu, $style = "default")
    {
        $menuStyle = " " . $style;
        $menuStart = "<div class=\"menu " . $menuStyle . "\"><ul>";
        $menuEnd = "</ul></div>";
        $item = "";
        foreach ($arMenu as $items) {
            $startTag = "<li>";
            $endTag = "</li>";
            $item .= $startTag . "<a href=\"" . $items[1] . "\">" . $items[0] . "</a>" . $endTag;
        }
        $menu = $menuStart . $item . $menuEnd;
        return $menu;
    }

    public static function Debug($debug, $varname = "VARDEBUG")
    {
        //$arr[$varname] = $debug;
        self::$tlmDebug[$varname] = $debug;
        return self::$tlmDebug;
    }

    public static function DebugView()
    {
        if (self::$tlmDebug) :
            echo "<!--DEBUG VIEW --><script type=\"text/javascript\" src=\"" . HESK_PATH . "/js/prism.js\"></script>";
            echo "<link rel=\"stylesheet\" href=\"" . HESK_PATH . "css/prism.css\">";
            echo "<div style=\"padding: 1rem;\"><pre><code class=\"language-php\">";
            print_r(self::$tlmDebug);
            echo "</code></pre></div><!-- /DEBUG VIEW -->";
        endif;
        return;
    }
}
