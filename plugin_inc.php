<?php /* -*- Mode: php; tab-width: 4; indent-tabs-mode: t; c-basic-offset: 4; -*- */
/* vim: :set fdm=marker : */
/**
 * $Header: $
 *
 * Copyright (c) 2010 Cloudred http://cloudred.com
 *
 * All Rights Reserved. See below for details and a complete list of authors.
 * *
 * $Id: $
 * @package accounts
 * @subpackage class
 */

/*
   -==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
   Portions of this file are modifiable

   Anything between the CUSTOM BEGIN: and CUSTOM END:
   comments will be preserved on regeneration of this
   file.
   -==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
*/


global $gBitSystem, $gBitUser, $gLibertySystem;

// If package is active and the user has view auth then register the package menu
if( $gBitSystem->isPackageActive( 'accounts' ) && $gBitUser->hasPermission( 'p_accounts_view' ) ) {
/* =-=- CUSTOM BEGIN: setup_plugin -=-= */
	// feature is dependent on dns plugin running first
	if( !defined( 'LIBERTY_SERVICE_DNS' ) ){
		require_once( CONFIG_PKG_PATH.'accounts/plugins/dns/plugin_inc.php' );
	}

	if( !empty( $gAccount ) ){
		$gBitSysmtem->mConfig['site_title'] = $gAccount->getTitle();
	}
/* =-=- CUSTOM END: setup_plugin -=-= */
}

