<?php

/**
 * Gate - Wiki engine and web-interface for WebTester Server
 *
 * Copyright (c) 2008-2009 Sergey I. Sharybin <g.ulairi@gmail.com>
 *
 * This program can be distributed under the terms of the GNU GPL.
 * See the file COPYING.
 */
if ($PHP_SELF != '') {
  print ('HACKERS?');
  die;
}

$info_menu = new CVCMenu ();
$info_menu->Init('andevMenu', 'type=hor;colorized=true;sublevel=1;border=thin;');
$info_menu->AppendItem('Основные сведения', config_get('document-root') . '/login/profile/info/main/', 'main');
if (is_responsible(user_id())) {
  $info_menu->AppendItem('Учебное заведение', config_get('document-root') . '/login/profile/info/school/', 'school');
  $info_menu->AppendItem('Дополнительная информация', config_get('document-root') . '/login/profile/info/additional/', 'additional');
}
?>