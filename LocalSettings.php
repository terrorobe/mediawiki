<?php
# This file was automatically generated by the MediaWiki 1.28.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
require_once( "/var/www/html/PrivateSettings.php" );
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;
$wgSitename = "Test Wiki";
$wgMetaNamespace = "Test_Wiki";
## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";
## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://testwiki.wiki";
## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;
## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/images/c/c9/Logo.png";
$wgFavicon = "$wgResourceBasePath/images/favicon.ico";
$wgAppleTouchIcon = "$wgResourceBasePath/images/favicon.ico";
## UPO means: this is also a user preference option
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
$wgEmergencyContact = "noreply@testwiki.wiki";
$wgPasswordSender = "noreply@testwiki.wiki";
$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;
# MySQL specific settings
$wgDBprefix = "mw_";
# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;
## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgSessionCacheType = CACHE_DB;
$wgMemCachedServers = [];
## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgUploadDirectory = "$IP/images";
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;
# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;
## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";
## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/cache";
$wgUseFileCache = true;
# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";
# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";
## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";
## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "timeless";
# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkins( array( 
	'CologneBlue',
	'Modern',
	'MonoBook',
	'Vector' ,
	'Refreshed',
	'Timeless',
) );
# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtensions( array(
	'AbuseFilter',
	'CheckUser',
	'CodeEditor',
	'ConfirmEdit',
	'DismissableSiteNotice',
	'Echo',
	'Gadgets',
	'Interwiki',
	'InputBox',
	'MaintenanceShell',
	'MassMessage',
	'MatomoAnalytics',
	'Nuke',
	'OAuth',
	'OATHAuth',
	'ParserFunctions',
	'PdfHandler',
	'RenameUser',
	'SpamBlacklist',
	'StaffPowers',
	'Thanks',
	'TitleBlacklist',
	'UniversalLanguageSelector',
	'VisualEditor',
	'WikiEditor',
	'WikiLove',
) );
$wgMWOAuthSecureTokenTransfer = true;
require_once("$IP/extensions/FlaggedRevs/FlaggedRevs.php");
require_once "$IP/extensions/JavascriptSlideshow/JavascriptSlideshow.php";
require_once "$IP/extensions/Scribunto/Scribunto.php";
$wgScribuntoDefaultEngine = 'luasandbox';
require_once "$IP/extensions/Translate/Translate.php";
# End of automatically generated settings.
# Add more configuration options below.
// Captcha
wfLoadExtension('ConfirmEdit/ReCaptchaNoCaptcha' );
// SocialProfile
require_once("$IP/extensions/SocialProfile/SocialProfile.php");
require_once("$IP/extensions/SocialProfile/UserStats/EditCount.php"); // Necessary edit counter
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Recruit' => 0,
	'Apprentice' => 1200,
	'Private' => 1750,
	'Corporal' => 2500,
	'Sergeant' => 5000,
	'Gunnery Sergeant' =>10000,
	'Lieutenant' => 20000,
	'Captain' => 35000,
	'Major' => 50000,
	'Lieutenant Commander' => 75000,
	'Commander' => 100000,
	'Colonel' => 150000,
	'Brigadier' => 250000,
	'Brigadier General' => 350000,
	'Major General' => 500000,
	'Lieutenant General' => 650000,
	'General' => 800000,
	'General of the Army' => 1000000,
);
$wgUserStatsPointValues['edit'] = 100; // Points awarded on a mainspace edit
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 200; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 0; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 300; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 400; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 1000; // Points awarded for adding your first avatar
$wgNamespacesForEditPoints = array( 0 ); // Array of namespaces that can earn you points. Use numerical keys. Default is 0 -- only main namespace edits can earn a user points.
// Chat
wfLoadExtension( 'MediaWikiChat' );
	$wgChatKicks = true;
	$wgChatMeCommand = true;
	$wgChatLinkUsernames = true;
// Other
$wgULSGeoService = false;
$wgAllowUserCss = true;
$wgAllowUserJs = true;
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;
$wgMassMessageAccountUsername = 'Test Wiki message delivery';
$wgLocaltimezone = "UTC";
date_default_timezone_set( $wgLocaltimezone );
$wgAutoConfirmAge = 86400;
$wgAutoConfirmCount = 1;
$wgDefaultUserOptions['wikilove-enabled'] = 1;
$wgFlaggedRevsStatsAge = false;
$wgFlaggedRevsProtection = true;
$wgFlaggedRevsAutoReview = true;
$wgFlaggedRevsNamespaces = array( NS_MAIN, NS_FILE, NS_TEMPLATE, NS_PROJECT );
$wgScribuntoUseCodeEditor = true;
$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";
$wgVirtualRestConfig['modules']['parsoid'] = array(
	// URL to the Parsoid instance
	// Use port 8142 if you use the Debian package
	'url' => 'http://testwiki.wiki:8142',
	// Parsoid "domain", see below (optional)
	'domain' => 'testwiki.wiki'
);
$wgStaffPowersShoutWikiMessages = false;
$wgTitleBlacklistSources = array(
  array(
    'type' => 'localpage',
    'src'  => 'MediaWiki:Titleblacklist'
  )
);
//MatomoAnalytics
$wgMatomoAnalyticsServerURL = 'https://piwik.testwiki.wiki/';
$wgMatomoAnalyticsSiteID = 3;
// WikiEditor
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 0;
$wgDefaultUserOptions['wikieditor-publish'] = 0;
// User rights
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['*']['oathauth-enable'] = false;
$wgGroupPermissions['*']['patrolmarks'] = true;
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['user']['move-subpages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false; // can move root userpages
$wgGroupPermissions['user']['move-categorypages'] = false;
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['user'] = true;
$wgGroupPermissions['user']['translate'] = true;
$wgGroupPermissions['user']['translate-messagereview'] = true;
$wgGroupPermissions['user']['translate-groupreview'] = true;
$wgGroupPermissions['user']['translate-import'] = true;
$wgGroupPermissions['user']['createtalk'] = false;
$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['user']['read'] = false;
$wgGroupPermissions['user']['writeapi'] = false;
$wgGroupPermissions['bot']['writeapi'] = false;
$wgGroupPermissions['sysop']['oathauth-enable'] = true;
$wgGroupPermissions['sysop']['pagetranslation'] = true;
$wgGroupPermissions['sysop']['translate-manage'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;
$wgGroupPermissions['sysop']['interwiki'] = false;
$wgGroupPermissions['sysop']['editinterface'] = false;
$wgGroupPermissions['sysop']['upload_by_url'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-detail'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = false;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['review'] = true;
$wgGroupPermissions['sysop']['validate'] = true;
$wgGroupPermissions['sysop']['nuke'] = false;
$wgGroupPermissions['sysop']['unblockself'] = false;
$wgGroupPermissions['sysop']['avatarremove'] = false;
$wgGroupPermissions['sysop']['import'] = false;
$wgGroupPermissions['sysop']['importupload'] = false;
$wgGroupPermissions['sysop']['unreviewedpages'] = true;
$wgGroupPermissions['sysop']['pagelang'] = true;
$wgGroupPermissions['sysop']['reupload-shared'] = false;
$wgGroupPermissions['sysop']['reupload'] = false;
$wgGroupPermissions['sysop']['upload'] = false;
$wgGroupPermissions['sysop']['createaccount'] = false;
$wgGroupPermissions['sysop']['chat'] = false;
$wgGroupPermissions['sysop']['edituserjson'] = false;
$wgGroupPermissions['sysop']['editsitejson'] = false;
$wgGroupPermissions['sysop']['viewpmlog'] = true;
$wgGroupPermissions['translateadmin']['translate-manage'] = true;
$wgGroupPermissions['translateadmin']['pagetranslation'] = true;
$wgGroupPermissions['translateadmin']['pagelang'] = true;
$wgGroupPermissions['autoconfirmed']['move'] = true;
$wgGroupPermissions['autoconfirmed']['move-subpages'] = true;
$wgGroupPermissions['autoconfirmed']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['autoconfirmed']['move-categorypages'] = true;
$wgGroupPermissions['autoconfirmed']['movefile'] = true;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['patroller']['patrol'] = true;
$wgGroupPermissions['patroller']['autopatrol'] = true;
$wgGroupPermissions['patroller']['rollback'] = true;
$wgGroupPermissions['patroller']['noratelimit'] = true;
$wgGroupPermissions['patroller']['suppressredirect'] = true;
$wgGroupPermissions['patroller']['upload_by_url'] = true;
$wgGroupPermissions['confirmed']['move'] = true;
$wgGroupPermissions['confirmed']['move-subpages'] = true;
$wgGroupPermissions['confirmed']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['confirmed']['move-categorypages'] = true;
$wgGroupPermissions['confirmed']['movefile'] = true;
$wgGroupPermissions['confirmed']['skipcaptcha'] = true;
$wgGroupPermissions['confirmed']['editsemiprotected'] = true;
$wgGroupPermissions['confirmed']['autoconfirmed'] = true;
$wgGroupPermissions['bureaucrat']['editinterface'] = true;
$wgGroupPermissions['bureaucrat']['deletelogentry'] = true;
$wgGroupPermissions['bureaucrat']['nuke'] = true;
$wgGroupPermissions['bureaucrat']['unblockself'] = true;
$wgGroupPermissions['bureaucrat']['bureaucrat'] = true;
$wgGroupPermissions['bureaucrat']['renameuser'] = false;
$wgGroupPermissions['bureaucrat']['userboard-delete'] = true;
$wgGroupPermissions['bureaucrat']['checkuser-limited'] = true;
$wgGroupPermissions['bureaucrat']['noratelimit'] = false;
$wgGroupPermissions['bureaucrat']['userrights'] = false;
$wgGroupPermissions['bureaucrat']['import'] = true;
$wgGroupPermissions['bureaucrat']['importupload'] = true;
$wgGroupPermissions['bureaucrat']['edituserjson'] = true;
$wgGroupPermissions['bureaucrat']['editsitejson'] = true;
$wgGroupPermissions['steward']['interwiki'] = true;
$wgGroupPermissions['steward']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['steward']['unblockself'] = true;
$wgGroupPermissions['steward']['abusefilter-view-private'] = true;
$wgGroupPermissions['steward']['abusefilter-log-private'] = true;
$wgGroupPermissions['steward']['unblockable'] = true;
$wgGroupPermissions['steward']['override-export-depth'] = true;
$wgGroupPermissions['steward']['mwoauthviewprivate'] = true;
$wgGroupPermissions['steward']['mwoauthviewsuppressed'] = true;
$wgGroupPermissions['steward']['mwoauthsuppress'] = true;
$wgGroupPermissions['steward']['mwoauthmanageconsumer'] = true;
$wgGroupPermissions['steward']['mwoauthupdateownconsumer'] = true;
$wgGroupPermissions['steward']['mwoauthproposeconsumer'] = true;
$wgGroupPermissions['steward']['renameuser'] = true;
$wgGroupPermissions['steward']['steward'] = true;
$wgGroupPermissions['steward']['editothersprofiles'] = true;
$wgGroupPermissions['steward']['avatarremove'] = true;
$wgGroupPermissions['steward']['updatepoints'] = true;
$wgGroupPermissions['steward']['generatetopusersreport'] = true;
$wgGroupPermissions['sysadmin']['siteadmin'] = true;
$wgGroupPermissions['sysadmin']['maintenanceshell'] = true;
$wgGroupPermissions['sysadmin']['unblockable'] = true;
$wgGroupPermissions['sysadmin']['unblockself'] = true;
$wgGroupPermissions['sysadmin']['userrights'] = true;
$wgGroupPermissions['oversight']['suppressrevision'] = true;
$wgGroupPermissions['oversight']['viewsuppressed'] = true;
$wgGroupPermissions['oversight']['suppressionlog'] = true;
$wgGroupPermissions['oversight']['deletelogentry'] = true;
$wgGroupPermissions['oversight']['deleterevision'] = true;
$wgGroupPermissions['oversight']['hideuser'] = true;
$wgGroupPermissions['oversight']['block'] = true;
$wgGroupPermissions['oversight']['blockemail'] = true;
$wgGroupPermissions['oversight']['abusefilter-hide-log'] = true;
$wgGroupPermissions['oversight']['abusefilter-hidden-log'] = true;
$wgGroupPermissions['oversight']['abusefilter-log-detail'] = true;
$wgGroupPermissions['oversight']['abusefilter-view-private'] = true;
$wgGroupPermissions['oversight']['abusefilter-log-private'] = true;
$wgGroupPermissions['oversight']['browsearchive'] = true;
$wgGroupPermissions['oversight']['deletedhistory'] = true;
$wgGroupPermissions['oversight']['deletedtext'] = true;
$wgRevokePermissions['exampleuser']['editmyoptions'] = true;
$wgRevokePermissions['exampleuser']['editmyprivateinfo'] = true;
$wgGroupPermissions['researcher']['browsearchive'] = true;
$wgGroupPermissions['researcher']['deletedhistory'] = true;
$wgGroupPermissions['researcher']['deletedtext'] = true;
$wgGroupPermissions['chatmod']['chat'] = false;
$wgGroupPermissions['chatmod']['viewpmlog'] = true;
$wgGroupPermissions['reviewer']['validate'] = true;
$wgGroupPermissions['reviewer']['review'] = true;
$wgGroupPermissions['reviewer']['autoreview'] = true;
$wgGroupPermissions['reviewer']['autoconfirmed'] = true;
$wgGroupPermissions['reviewer']['editsemiprotected'] = true;
$wgGroupPermissions['reviewer']['unreviewedpages'] = true;
$wgGroupPermissions['editor']['review'] = true;
$wgGroupPermissions['editor']['autoreview'] = true;
$wgGroupPermissions['editor']['autoconfirmed'] = true;
$wgGroupPermissions['editor']['editsemiprotected'] = true;
$wgGroupPermissions['editor']['unreviewedpages'] = true;
$wgGroupPermissions['autopatrol']['autopatrol'] = true;
$wgAddGroups['sysop'] = array( 'editor', 'reviewer', 'autoreview', 'autopatrol', 'patroller', 'translateadmin', 'confirmed', 'researcher', 'chatmod', 'blockedfromchat' );
$wgRemoveGroups['sysop'] = array( 'editor', 'reviewer', 'autoreview', 'autopatrol', 'patroller', 'translateadmin', 'confirmed', 'researcher', 'chatmod', 'blockedfromchat' );
$wgAddGroups['steward'] = array( 'sysop', 'bureaucrat', 'steward', 'checkuser', 'oversight' );
$wgRemoveGroups['steward'] = array( 'sysop', 'bureaucrat', 'steward', 'checkuser', 'oversight' );
$wgAddGroups['bureaucrat'] = array( 'bot', 'sysop', 'bureaucrat' );
$wgRemoveGroups['bureaucrat'] = array( 'bot', 'sysop', 'bureaucrat' );
$wgGroupsRemoveFromSelf['sysop'] = array( 'sysop' );
$wgRestrictionLevels = array( '', 'user', 'bureaucrat', 'sysop', 'autoconfirmed', 'steward' );
$wgRestrictionTypes = array( 'create', 'edit', 'move', 'upload', 'delete', 'protect' );
$wgCascadingRestrictionLevels = array( 'bureaucrat', 'sysop', 'steward' );
$wgSemiprotectedRestrictionLevels = array( 'user', 'autoconfirmed', );
unset( $wgGroupPermissions['staff'] );
$wgGroupPermissions['staff']['unblockable'] = false;
$wgGroupPermissions['staff']['awardsmanage'] = false;
$wgGroupPermissions['staff']['giftadmin'] = false;
$wgImplicitGroups[] = 'staff';
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
