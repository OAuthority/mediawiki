<?php
$wgLocaltimezone = "UTC";
$wgPingback = false;
$wgScriptExtension = '.php';
$wgUsePathInfo = true;
$wgResourceBasePath = $wgScriptPath;
$wgPutIPinRC = false;
$wgSpecialVersionShowHooks = false;
$wgMemoryLimit = '500M';
$wgWhitelistRead = [ "Special:RunJobs", "Special:Manage_Two-factor_authentication" ];

$wgUseRCPatrol = true;
$wgUseAjax = true;
$wgAllowUserJs = true;
$wgAllowUserCss = true;
$wgAllowUserCssPrefs = true;
$wgUseSiteJs = true;
$wgUseSiteCss = true;
$wgHtml5 = true; 
$wgIncludeLegacyJavaScript  = false;
$wgBreakFrames = false;

$wgEnableEmail = true;
$wgEmailAuthentication = true;
$wgEmailConfirmToEdit = false;
$wgEnableUserEmail = false;
$wgEnotifRevealEditorAddress = false;
$wgUserEmailUseReplyTo = false;
$wgAllowHTMLEmail = false;
$wgEnableUserEmailBlacklist = false;

$wgInvalidUsernameCharacters = '*@:>=#€$<&?/\+%';
$wgAuthenticationTokenVersion = "1";

$wgEnableEmail = true;
$wgEmailAuthentication = true;
$wgEnotifUserTalk = true;
$wgEnotifWatchlist = true;
$wgEnableUserEmail = false;
$wgDefaultUserOptions['prefershttps'] = 1;
$wgDefaultUserOptions['thumbsize'] = '0';
$wgDefaultUserOptions['disablemail'] = 0;
$wgDefaultUserOptions['email-allow-new-users'] = 0;
$wgDefaultUserOptions['rcenhancedfilters'] = 1;
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['showtoc'] = 1;
$wgDefaultUserOptions['ajaxsearch'] = 1;
$wgDefaultUserOptions['forceeditsummary'] = 0;
$wgDefaultUserOptions['useeditwarning'] = 1;
$wgHiddenPrefs[] = 'enotifrevealaddr';
$wgHiddenPrefs[] = 'gender';
$wgHiddenPrefs[] = 'realname';
$wgHiddenPrefs[] = 'nickname';
$wgHiddenPrefs[] = 'disablemail';

$wgPageCreationLog = true;
$wgActions['mcrundo'] = false;
$wgActions['mcrrestore'] = false;

$actions = array( 'edit', 'watch', 'unwatch', 'delete','revert', 'rollback', 'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'info' );
 
foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/wiki/$1&action=$action";
}
$wgActionPaths['view'] = "/wiki/$1";

$wgRestrictionTypes = [ 'create', 'edit', 'move', 'upload', 'delete', 'protect' ];

$wgMaxArticleSize = 20480;
$wgMaximumMovedPages = 1000;
$wgMaxTemplateDepth = 50;
$wgMaxIncludedTemplates = 50;
$wgHideUserContribLimit = 500;
$wgDeleteRevisionsLimit = 10000;

$wgContentNamespaces[] = [ NS_MAIN ];

# $wgNamespaceProtection[NS_USER_TALK] = array( 'editusertalk' );
$wgNamespaceProtection[NS_PROJECT] = ["policyAccess"];
$wgNamespaceProtection[NS_MEDIAWIKI] = ["editinterface"];
$wgNamespaceProtection[NS_TEMPLATE] = ["templateAccess"];

# $wgNamespaceAliases['MW'] = NS_MEDIAWIKI;
# $wgNamespaceAliases['T'] = NS_TEMPLATE;

$wgNamespaceAliases += [
	'mw' => NS_MEDIAWIKI,
	't' => NS_TEMPLATE,
];

$wgNonincludableNamespaces = [ 0, 1, 4, 5, 6, 7, 8, 9, 14, 15, -1, -2 ];

$wgNamespaceAliases = [
	'U' => NS_USER,
	'UT' => NS_USER_TALK,
	'P' => NS_PROJECT,
	'PT' => NS_PROJECT_TALK,
	'F' => NS_FILE,
	'FT' => NS_FILE_TALK,
	'MW' => NS_MEDIAWIKI,
	'MWT' => NS_MEDIAWIKI_TALK,
	'T' => NS_TEMPLATE,
	'TT' => NS_TEMPLATE_TALK,
	'C' => NS_CATEGORY,
	'CT' => NS_CATEGORY_TALK,
];

$wgNamespacesWithSubpages = [
	"NS_PROJECT" => true,
	"NS_PROJECT_TALK" => true,
	"NS_FILE_TALK" => true,
	"NS_HELP" => true,
	"NS_HELP_TALK" => true,
	"NS_CATEGORY_TALK" => true,
	"NS_MAIN" => true,
	"NS_TALK" => true,
	"NS_USER" => true,
	"NS_USER_TALK" => true,
	"NS_MEDIAWIKI" => true,
	"NS_MEDIAWIKI_TALK" => true,
	"NS_TEMPLATE" => true,
	"NS_TEMPLATE_TALK" => true,
];

$wgNamespaceRobotPolicies = [
	'NS_MAIN' => 'index, follow',
	'NS_MediaWiki' => 'noindex, nofollow',
	'NS_MediaWiki_Talk' => 'noindex, nofollow',
	'NS_TEMPLATE' => 'noindex, nofollow',
	'NS_TEMPLATE_TALK ' => 'noindex, nofollow',
	'NS_FILE' => 'noindex, nofollow',
	'NS_FILE_TALK' => 'noindex, nofollow',
];


# file uploads
$wgEnableUploads = true;
$wgSharedUploadDirectory = "";
$wgSharedUploadDBname = "";
$wgGenerateThumbnailOnParse = true;
$wgThumbLimits  = array(120, 200);
#$wgThumbLimits  = array(80, 100, 120, 150, 200, 250, 300);
$wgUseInstantCommons = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgSVGConverter = "ImageMagick";
ini_set( 'pcre.backtrack_limit', '5M' );
setlocale(LC_NUMERIC, "C");
$wgShellLocale = "C.UTF-8";
$wgMaxShellMemory = 307200;
$wgMaxShellFileSize = 5000000;
$wgMaxImageArea = 3e7;
$wgMaxAnimatedGifArea = 3e7;
$wgAllowImageMoving = true;
$wgAllowExternalImages = false;
$wgGenerateThumbnailOnParse = true;
$wgFileExtensions = [ '.webp', '.png', '.apng', '.gif', '.JPG', '.ico', '.svg', '.ogg', '.pdf',  '.jpeg', '.jpg', '.jpe', '.jps', '.ogx', '.ogg', '.ogm', '.ogv', '.oga', '.spx', '.opus'];
$wgStrictFileExtensions = true;
$wgCheckFileExtensions = true;
$wgAllowJavaUploads = false;
$wgAllowCopyUploads = false;
$wgCopyUploadsFromSpecialUpload = false;
$wgCopyUploadProxy = false;
$wgCopyUploadTimeout = false;
$wgCopyUploadAsyncTimeout = false;
$wgUploadNavigationUrl = false;
$wgUploadMissingFileUrl = false;
$wgFileBlacklist = [
	# HTML may contain cookie-stealing JavaScript and web bugs
	'html', 'text/html', 'htm', 'js', 'jsb', 'mhtml', 'mht', 'xml', 'xhtml', 'xht', 'css',
	# PHP scripts may execute arbitrary code on the server
	'php', 'phtml', 'php3', 'php4', 'php5', 'phps', 'php7',
	# Other types that may be interpreted by some servers
	'shtml', 'jhtml', 'pl', 'py', 'cgi',
	# May contain harmful executables for Windows victims
	'exe', 'scr', 'dll', 'msi', 'vbs', 'bat', 'com', 'pif', 'cmd', 'vxd', 'cpl'
];

$wgMimeTypeBlacklist = [
	# HTML may contain cookie-stealing JavaScript and web bugs
	'text*/javascript', 'text*/x-javascript', 'application*/x-shellscript',
	# PHP scripts may execute arbitrary code on the server
	'application*/x-php', 'text*/x-php',
	# Other types that may be interpreted by some servers
	'text*/x-python', 'text*/x-perl', 'text*/x-bash', 'text*/x-sh', 'text*/x-csh',
	# Client-side hazards on Internet Explorer
	'text*/scriptlet', 'application*/x-msdownload',
	# Windows metafile, client-side vulnerability on some systems
	'application*/x-msmetafile',
];

#Rate limits
$wgRateLimits = [
    'api' => [
        'read' => [
            'ip' => [1, 300], // 1 read per IP every 300 seconds (5 minutes)
        ],
    ],
	// Page edits
	'edit' => [
		'ip' => [ 8, 60 ],
		'newbie' => [ 8, 60 ],
		'user' => [ 20, 60 ],
	],
	// Purging pages
	'purge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Purges of link tables
	'linkpurge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Files rendered via thumb.php or thumb_handler.php
	'renderfile' => [
		'ip' => [ 700, 30 ],
		'user' => [ 700, 30 ],
	],
	// Same as above but for non-standard thumbnails
	'renderfile-nonstandard' => [
		'ip' => [ 70, 30 ],
		'user' => [ 70, 30 ],
	],
	'badoath' => [
		'user' => [ 10, 60 ],
		'user-global' => [ 10, 60 ],
	]
];


$wgAccountCreationThrottle = [ [
	'count' => 2,
	'seconds' => 31536000, // lock IPs to 2 accounts per year
] ];


$wgAutoConfirmCount = 50;
$wgAutoConfirmAge = 86400*5;
$wgAutopromoteOnceLogInRC = true;
$wgNewUserLog = true;

$wgAutopromote = [
	'autoconfirmed' => [
		'&',
		[ APCOND_EDITCOUNT, 10 ],
		[ APCOND_AGE, 86400*3 ],
	],
	'emailconfirmed' => APCOND_EMAILCONFIRMED,
];


$wgEnableSpecialMute = true;
$wgEnablePartialBlocks = true;
$wgBlockDisablesLogin = true;
$wgBlockAllowsUTEdit = true;
$wgCookieSetOnAutoblock = true;
$wgAutoblockExpiry = 86400 * 3;
$wgCookieSetOnIpBlock = true; // Global Tables

$wgNoFollowLinks = true;
$wgUseRCPatrol = true;
$wgUseFilePatrol = true;
$wgUseNPPatrol = true;
$wgFixDoubleRedirects = false;

$wgEnableDnsBlacklist = true;
$wgDnsBlacklistUrls = [ 'dnsbl.tornevall.org' ];
$wgApplyIpBlocksToXff = true;

$wgDeleteRevisionsLimit = 100000000;
$wgHideUserContribLimit = false;
ini_set( 'pcre.backtrack_limit', '10M' );

$wgProxyWhitelist = [];
$wgApplyIpBlocksToXff = true;

$wgImportSources = [];
$wgImportTargetNamespace = null;
$wgExportAllowHistory = false;
$wgExportAllowListContributors = false;
$wgExportFromNamespaces = false;
$wgExportAllowAll = false;
$wgExportMaxHistory = 0;
$wgExportMaxLinkDepth = 0;
$wgExportPagelistLimit = 0;

$wgLogRestrictions = [
	"checkuser-log" => "CVULogs",
	"abusefilter" => "restrictedLogs",
	"abusefilter-log" => "restrictedLogs",
	"abusefilter-hidden-log" => "restrictedLogs",
	"abusefilter-hide-log" => "restrictedLogs",
	"suppressionlog" => "CVULogs",
	"spamblacklist" => "restrictedLogs",
	"titleblacklist" => "restrictedLogs",
	"suppress" => "restrictedLogs",
	"usermerge" => "restrictedLogs",
	"renameuser" => "restrictedLogs",
	"deletelogentry" => "restrictedLogs",
	"gblrights" => "restrictedLogs",
	"sudo" => "restrictedLogs",
];

unset( $wgFooterIcons['poweredby'] );
