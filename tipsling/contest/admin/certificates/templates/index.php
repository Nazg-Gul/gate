<?php

/**
 * Gate - Wiki engine and web-interface for WebTester Server
 *
 * Copyright (c) 2008-2009 Sergey I. Sharybin <g.ulairi@gmail.com>
 *
 * This program can be distributed under the terms of the GNU GPL.
 * See the file COPYING.
 */
include '../../../../../globals.php';
include $DOCUMENT_ROOT . '/inc/include.php';

global $action;

if ($action=='view')
    include 'view.php';
else
    Main(dirname($PHP_SELF), false);
?>
