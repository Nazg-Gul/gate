<?php
  /**
   * Gate - Wiki engine and web-interface for WebTester Server
   *
   * Main handlers for services administration
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

  if (!user_authorized () || !user_access_root ()) {
    header ('Location: '.config_get ('document-root').'/admin');
  }

  global $DOCUMENT_ROOT, $action, $id, $pid;
  include $DOCUMENT_ROOT.'/admin/inc/menu.php';
  include '../menu.php';

  $manage_menu->SetActive ('control');
  $datacontrol_menu->SetActive ('team_type');

  if ($action == 'create') {
      teamType_create_received();
  }

  // Printing da page
  $manage_menu->Draw ();
  $datacontrol_menu->Draw ();

  print ('${information}');

  if ($action == 'edit') {
    include 'edit.php';
  } else {
    if ($action == 'save') {
      manage_teamType_update_received ($id);
    } else if ($action=='delete') {
      manage_teamType_delete ($id);
    }

    $list = manage_teamType_get_list ();
    if (count ($list)) {
      include 'list.php';
    }

    // Print the create form
    include 'create_form.php';
  }
?>
