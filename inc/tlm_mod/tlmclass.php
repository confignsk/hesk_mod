<?php

namespace tlm;

class TlmClass
{
    static $tlmDebug = array();
    static $arUrlCss = array();
    static $arUrlJs = array();
    static $arUrlJsCo = "0";
    const MOD_PATH = HESK_PATH . "inc/tlm_mod/";
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

    public static function AddHeadCss($urlcss)
    {

        self::$arUrlCss[] = $urlcss;
        return self::$arUrlCss;
    }

    public static function AddCustomJs($urljs, $bottom = "N", $area = "N")
    {
        self::$arUrlJsCo++;
        self::$arUrlJs[self::$arUrlJsCo]["URL"] = $urljs;
        self::$arUrlJs[self::$arUrlJsCo]["BOTTOM"] = $bottom;
        self::$arUrlJs[self::$arUrlJsCo]["AREA"] = $area;
        return self::$arUrlJs;
    }
    public static function GetHead()
    {
        foreach (self::$arUrlCss as $valueCss) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $valueCss . "\">";
        }

        foreach (self::$arUrlJs as $valueJs) {


            if ($valueJs["AREA"] != Y && $valueJs["BOTTOM"] != Y) {
                echo "<script src=\"" . $valueJs["URL"] . "\"></script>";
            }

            if ($valueJs["AREA"] == Y && $valueJs["BOTTOM"] != Y) {
                echo "<script>" . $valueJs["URL"] . "</script>";
            }
        }
    }
    public static function GetFooter()
    {

        foreach (self::$arUrlJs as $valueJs) {

            if ($valueJs["AREA"] != Y && $valueJs["BOTTOM"] == Y) {
                echo "<script src=\"" . $valueJs["URL"] . "\"></script>";
            }

            if ($valueJs["AREA"] == Y && $valueJs["BOTTOM"] == Y) {
                echo "<script>" . $valueJs["URL"] . "</script>";
            }
        }
    }

    /* Галерея вложений 

Вставить метод в файл /admin/admin_ticket.php

Tlm\TlmClass::GetAttachGallery($attachments='', $reply=0, $white=1); в строку 810

Tlm\TlmClass::GetAttachGallery($reply['attachments'], $reply['id'], $i); в строку 1651

Tlm\TlmClass::GetAttachGallery($reply['attachments'],$reply['id'],$i); в 1695

Tlm\TlmClass::GetAttachGallery($reply['attachments'], $reply['id'], $i); в строку 1754

*/


    /* Функция определения расширения файла по имени */

    static function GetExtension($v)
    {

        $v = explode(".", $v);
        return end($v);
    }

    public static function GetAttachGallery($attachments = '', $reply = 0, $white = 1)
    {


        global $hesk_settings, $hesklang, $trackingID, $can_edit, $can_delete;

        /* Attachments disabled or not available */
        if (!$hesk_settings['attachments']['use'] || !strlen($attachments)) {
            return false;
        }

        /* List attachments */
        $att = explode(',', substr($attachments, 0, -1));
        //	var_dump($att);
        echo '<div class="cd-attach-gallery border border-5 mt-3 rounded-3 p-2 bg-light "><div class="d-flex justify-content-between">';
        foreach ($att as $myatt) {
            list($att_id, $att_name) = explode('#', $myatt);

            /* Can edit and delete tickets? */
            /*if ($can_edit && $can_delete)
        {
        	echo '<a title="'.$hesklang['dela'].'" href="admin_ticket.php?delatt='.$att_id.'&amp;reply='.$reply.'&amp;track='.$trackingID.'&amp;Refresh='.mt_rand(10000,99999).'&amp;token='.hesk_token_echo(0).'" onclick="return hesk_confirmExecute(\''.hesk_makeJsString($hesklang['pda']).'\');">
        	    <svg class="icon icon-delete">
                    <use xlink:href="'. HESK_PATH .'img/sprite.svg#icon-delete"></use>
                </svg>
            </a>&nbsp;&nbsp;';
        }*/
            // echo $att_id;
            // echo $trackingID;


            // Ticket attachments

            // Attachmend ID and ticket tracking ID
            $att_id = $att_id;
            $tic_id = $trackingID;

            // Connect to database
            hesk_dbConnect();

            // Get attachment info
            $res = hesk_dbQuery("SELECT * FROM `" . hesk_dbEscape($hesk_settings['db_pfix']) . "attachments` WHERE `att_id`='{$att_id}' LIMIT 1");
            if (hesk_dbNumRows($res) != 1) {
                hesk_error($hesklang['id_not_valid'] . ' (att_id)');
            }
            $file = hesk_dbFetchAssoc($res);

            // Is ticket ID valid for this attachment?
            if ($file['ticket_id'] != $tic_id) {
                hesk_error($hesklang['trackID_not_found']);
            }

            // Verify email address match if needed
            if (empty($_SESSION['id'])) {
                hesk_verifyEmailMatch($tic_id);

                // Only staff may download attachments to notes
                if ($file['type']) {
                    hesk_error($hesklang['perm_deny']);
                }
            }


            // Path of the file on the server
            $realpath = $hesk_settings['attach_dir'] . '/' . $file['saved_name'];
            $fpath = $realpath;

            $fpath = Self::GetExtension($fpath);

            $noimg = array('zip', 'rar', 'doc', 'docx', 'gz');

            if (!in_array($fpath, $noimg)) :
                echo '<div class="p-1"><a data-fancybox="gallery" href="/' . $realpath . '"><img class="img-thumbnail img-fluid"  src="/' . $realpath . '"></a></div>';
            endif;


            // Perhaps the file has been deleted?
            if (!file_exists($realpath)) {
                //hesk_error($hesklang['attdel']);
            }
        }

        echo '</div></div>';


        return true;
    }
}
