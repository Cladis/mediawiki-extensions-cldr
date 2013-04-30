<?php
if ( !defined( 'MEDIAWIKI' ) ) die();
/**
 * An extension which provides localised language names for other extensions.
 *
 * @file
 * @ingroup Extensions
 * @author Niklas Laxström
 * @copyright Copyright © 2007-2010, Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
define( 'CLDR_VERSION', '4.0.0 (CLDR 22.1)' );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Language Names',
	'version' => '[https://www.mediawiki.org/wiki/MLEB MLEB 2013.04]',
	'author' => array( 'Niklas Laxström', 'Siebrand Mazeland', 'Ryan Kaldari' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:CLDR',
	'descriptionmsg' => 'cldr-desc',
);

$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['cldr'] = $dir . 'cldr.i18n.php';
$wgAutoloadClasses['CldrNames'] = $dir . 'CldrNames.php';
$wgAutoloadClasses['LanguageNames'] = $dir . 'LanguageNames.body.php';
$wgAutoloadClasses['CountryNames'] = $dir . 'CountryNames.body.php';
$wgAutoloadClasses['CurrencyNames'] = $dir . 'CurrencyNames.body.php';
$wgAutoloadClasses['TimeUnits'] = $dir . 'TimeUnits.body.php';
$wgHooks['LanguageGetTranslatedLanguageNames'][] = 'LanguageNames::coreHook';
