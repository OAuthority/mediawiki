<?php
# This file was automatically generated by the MediaWiki 1.39.6
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "twewy Wiki";
$wgMetaNamespace = "Twewy_Wiki";
$wgServer = "twewy.wiki";
$wgDBname = "twewy_wiki";


## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/w";
$wgArticlePath = "/wiki/$1";
$wgScript = "{$wgScriptPath}/";
$wgUsePathInfo = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
	'icon' => "$wgResourceBasePath/resources/assets/change-your-logo-icon.svg",
];


## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

$wgSecretKey = "a21ae81007eb568931ad4b3b3919d49afe1887b6c1e86ac933a4fe41c7eed493";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "567060c27dc684fe";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# End of automatically generated settings.
# Add more configuration options below.

# disables wiki-editor
$wgDefaultUserOptions['usebetatoolbar'] = 0;

wfLoadSkin( 'Vector' );
$wgDefaultSkin = "vector";

$wgExtraNamespaces[302] = "Property";
$wgExtraNamespaces[303] = "Property_talk";
$wgExtraNamespaces[308] = "Concept";
$wgExtraNamespaces[309] = "Concept_talk";
$wgExtraNamespaces[314] = "Rule";
$wgExtraNamespaces[315] = "Rule_talk";
$wgExtraNamespaces[2300] = "Gadget";
$wgExtraNamespaces[2301] = "Gadget_talk";
$wgExtraNamespaces[2302] = "Gadget_definition";
$wgExtraNamespaces[2303] = "Gadget_definition_talk";

wfLoadExtension("EmbedVideo");
wfLoadExtension("Renameuser");

wfLoadExtension( "MigrateUserAccount" );
$wgMUALogToWiki = true;
$wgMUARemoteWikiContentPath = "https://community.fandom.com/wiki/Community_Central";
$wgMUARemoteWikiAPI = "https://community.fandom.com/api.php";
$wgMUATokenSecret = "cc9fb6ccf1196f1e1738f535d5e41e18";
