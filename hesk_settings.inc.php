<?php
// Settings file for HESK 3.2.5

// ==> GENERAL

// --> General settings
$hesk_settings['site_title'] = 'Компания &quot;Телематика&quot;';
$hesk_settings['site_url'] = 'https://tlm.su';
$hesk_settings['hesk_title'] = 'Поддержка &quot;ТЛМ&quot;';
$hesk_settings['hesk_url'] = 'https://help.tlm.su';
$hesk_settings['webmaster_mail'] = 'help@tlm.su';
$hesk_settings['noreply_mail'] = 'help@tlm.su';
$hesk_settings['noreply_name'] = 'Поддержка &quot;Телематика&quot;';
$hesk_settings['site_theme'] = 'tlm_2022';
$hesk_settings['admin_css'] = 1;
$hesk_settings['admin_css_url'] = 'https://help.tlm.su/custom.css';

// --> Language settings
$hesk_settings['can_sel_lang'] = 0;
$hesk_settings['language'] = 'Pусский';
$hesk_settings['languages'] = array(
    'English' => array('folder' => 'en', 'hr' => '------ Reply above this line ------'),
    'Pусский' => array('folder' => 'ru', 'hr' => '------ Ответ пишите выше этой строки! ------'),
);

// --> Database settings
$hesk_settings['db_host'] = 'localhost';
$hesk_settings['db_name'] = 'cdev_hesk';
$hesk_settings['db_user'] = 'cdev_hesk';
$hesk_settings['db_pass'] = 'Aa123456';
$hesk_settings['db_pfix'] = 'hesk_';


// ==> HELP DESK

// --> Help desk settings
$hesk_settings['admin_dir'] = 'admin';
$hesk_settings['attach_dir'] = 'attachments';
$hesk_settings['cache_dir'] = 'cache';
$hesk_settings['max_listings'] = 20;
$hesk_settings['print_font_size'] = 12;
$hesk_settings['autoclose'] = 0;
$hesk_settings['max_open'] = 0;
$hesk_settings['due_soon'] = 7;
$hesk_settings['new_top'] = 0;
$hesk_settings['reply_top'] = 0;
$hesk_settings['hide_replies'] = 0;
$hesk_settings['limit_width'] = 800;

// --> Features
$hesk_settings['autologin'] = 1;
$hesk_settings['autoassign'] = 1;
$hesk_settings['require_email'] = 1;
$hesk_settings['require_owner'] = 0;
$hesk_settings['require_subject'] = -1;
$hesk_settings['require_message'] = 1;
$hesk_settings['custclose'] = 0;
$hesk_settings['custopen'] = 1;
$hesk_settings['rating'] = 1;
$hesk_settings['cust_urgency'] = 0;
$hesk_settings['sequential'] = 1;
$hesk_settings['time_worked'] = 0;
$hesk_settings['spam_notice'] = 1;
$hesk_settings['list_users'] = 0;
$hesk_settings['debug_mode'] = 0;
$hesk_settings['short_link'] = 0;
$hesk_settings['select_cat'] = 0;
$hesk_settings['select_pri'] = 0;
$hesk_settings['cat_show_select'] = 15;
$hesk_settings['staff_ticket_formatting'] = 2;

// --> SPAM Prevention
$hesk_settings['secimg_use'] = 1;
$hesk_settings['secimg_sum'] = 'E853E74W9N';
$hesk_settings['recaptcha_use'] = 0;
$hesk_settings['recaptcha_public_key'] = '';
$hesk_settings['recaptcha_private_key'] = '';
$hesk_settings['question_use'] = 1;
$hesk_settings['question_ask'] = 'Название компании в которую вы обращаетесь (Телематика). Внимание писать требуется все буквы заглавными, большими через Shift или нажатой Caps Lock';
$hesk_settings['question_ans'] = 'ТЕЛЕМАТИКА';

// --> Security
$hesk_settings['attempt_limit'] = 6;
$hesk_settings['attempt_banmin'] = 60;
$hesk_settings['flood'] = 3;
$hesk_settings['reset_pass'] = 1;
$hesk_settings['email_view_ticket'] = 1;
$hesk_settings['x_frame_opt'] = 0;
$hesk_settings['samesite'] = 'Lax';
$hesk_settings['force_ssl'] = 1;
$hesk_settings['url_key'] = 'wxRkaurwUu9d3KXX1w-.XSNt';

// --> Attachments
$hesk_settings['attachments'] = array(
    'use' => 1,
    'max_number' => 6,
    'max_size' => 103809024,
    'allowed_types' => array('.gif', '.jpg', '.jpeg', '.png', '.zip', '.rar', '.csv', '.doc', '.docx', '.xls', '.xlsx', '.txt', '.pdf')
);


// ==> KNOWLEDGEBASE

// --> Knowledgebase settings
$hesk_settings['kb_enable'] = 1;
$hesk_settings['kb_wysiwyg'] = 1;
$hesk_settings['kb_search'] = 2;
$hesk_settings['kb_search_limit'] = 10;
$hesk_settings['kb_views'] = 0;
$hesk_settings['kb_date'] = 1;
$hesk_settings['kb_recommendanswers'] = 1;
$hesk_settings['kb_rating'] = 1;
$hesk_settings['kb_substrart'] = 40;
$hesk_settings['kb_cols'] = 2;
$hesk_settings['kb_numshow'] = 3;
$hesk_settings['kb_popart'] = 6;
$hesk_settings['kb_latest'] = 6;
$hesk_settings['kb_index_popart'] = 6;
$hesk_settings['kb_index_latest'] = 5;
$hesk_settings['kb_related'] = 5;


// ==> EMAIL

// --> Email sending
$hesk_settings['smtp'] = 1;
$hesk_settings['smtp_host_name'] = 'smtp.yandex.ru';
$hesk_settings['smtp_host_port'] = 587;
$hesk_settings['smtp_timeout'] = 20;
$hesk_settings['smtp_ssl'] = 0;
$hesk_settings['smtp_tls'] = 1;
$hesk_settings['smtp_user'] = 'help@tlm.su';
$hesk_settings['smtp_password'] = '2203339Ab';

// --> Email piping
$hesk_settings['email_piping'] = 0;

// --> POP3 Fetching
$hesk_settings['pop3'] = 0;
$hesk_settings['pop3_job_wait'] = 15;
$hesk_settings['pop3_host_name'] = 'mail.example.com';
$hesk_settings['pop3_host_port'] = 110;
$hesk_settings['pop3_tls'] = 0;
$hesk_settings['pop3_keep'] = 0;
$hesk_settings['pop3_user'] = '';
$hesk_settings['pop3_password'] = '';

// --> IMAP Fetching
$hesk_settings['imap'] = 1;
$hesk_settings['imap_job_wait'] = 15;
$hesk_settings['imap_host_name'] = 'imap.yandex.ru';
$hesk_settings['imap_host_port'] = 993;
$hesk_settings['imap_enc'] = 'ssl';
$hesk_settings['imap_noval_cert'] = 0;
$hesk_settings['imap_keep'] = 1;
$hesk_settings['imap_user'] = 'help@tlm.su';
$hesk_settings['imap_password'] = '2203339Ab';

// --> Email loops
$hesk_settings['loop_hits'] = 5;
$hesk_settings['loop_time'] = 300;

// --> Detect email typos
$hesk_settings['detect_typos'] = 1;
$hesk_settings['email_providers'] = array('aim.com', 'aol.co.uk', 'aol.com', 'att.net', 'bellsouth.net', 'blueyonder.co.uk', 'bt.com', 'btinternet.com', 'btopenworld.com', 'charter.net', 'comcast.net', 'cox.net', 'earthlink.net', 'email.com', 'facebook.com', 'fastmail.fm', 'free.fr', 'freeserve.co.uk', 'gmail.com', 'gmx.at', 'gmx.ch', 'gmx.com', 'gmx.de', 'gmx.fr', 'gmx.net', 'gmx.us', 'googlemail.com', 'hotmail.be', 'hotmail.co.uk', 'hotmail.com', 'hotmail.com.ar', 'hotmail.com.mx', 'hotmail.de', 'hotmail.es', 'hotmail.fr', 'hushmail.com', 'icloud.com', 'inbox.com', 'laposte.net', 'lavabit.com', 'list.ru', 'live.be', 'live.co.uk', 'live.com', 'live.com.ar', 'live.com.mx', 'live.de', 'live.fr', 'love.com', 'lycos.com', 'mac.com', 'mail.com', 'mail.ru', 'me.com', 'msn.com', 'nate.com', 'naver.com', 'neuf.fr', 'ntlworld.com', 'o2.co.uk', 'online.de', 'orange.fr', 'orange.net', 'outlook.com', 'pobox.com', 'prodigy.net.mx', 'qq.com', 'rambler.ru', 'rocketmail.com', 'safe-mail.net', 'sbcglobal.net', 't-online.de', 'talktalk.co.uk', 'tiscali.co.uk', 'verizon.net', 'virgin.net', 'virginmedia.com', 'wanadoo.co.uk', 'wanadoo.fr', 'yahoo.co.id', 'yahoo.co.in', 'yahoo.co.jp', 'yahoo.co.kr', 'yahoo.co.uk', 'yahoo.com', 'yahoo.com.ar', 'yahoo.com.mx', 'yahoo.com.ph', 'yahoo.com.sg', 'yahoo.de', 'yahoo.fr', 'yandex.com', 'yandex.ru', 'ymail.com');

// --> Notify customer when
$hesk_settings['notify_new'] = 1;
$hesk_settings['notify_skip_spam'] = 1;
$hesk_settings['notify_spam_tags'] = array('Spam?}', '***SPAM***', '[SPAM]', 'SPAM-LOW:', 'SPAM-MED:');
$hesk_settings['notify_closed'] = 1;

// --> Other
$hesk_settings['strip_quoted'] = 1;
$hesk_settings['eml_req_msg'] = 0;
$hesk_settings['save_embedded'] = 1;
$hesk_settings['multi_eml'] = 0;
$hesk_settings['confirm_email'] = 1;
$hesk_settings['open_only'] = 0;


// ==> TICKET LIST

$hesk_settings['ticket_list'] = array('trackid', 'lastchange', 'name', 'subject', 'status', 'lastreplier');

// --> Other
$hesk_settings['submittedformat'] = 2;
$hesk_settings['updatedformat'] = 2;


// ==> MISC

// --> Date & Time
$hesk_settings['timezone'] = 'Asia/Novosibirsk';
$hesk_settings['timeformat'] = 'Y-m-d H:i:s';
$hesk_settings['time_display'] = '1';

// --> Other
$hesk_settings['ip_whois'] = 'https://whois.domaintools.com/{IP}';
$hesk_settings['maintenance_mode'] = 0;
$hesk_settings['alink'] = 1;
$hesk_settings['submit_notice'] = 0;
$hesk_settings['online'] = 0;
$hesk_settings['online_min'] = 10;
$hesk_settings['check_updates'] = 1;


#############################
#     DO NOT EDIT BELOW     #
#############################
$hesk_settings['hesk_version'] = '3.2.5';
if ($hesk_settings['debug_mode']) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}
if (!defined('IN_SCRIPT')) {
    die('Invalid attempt!');
}
