<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Agenda',
	array(
		'Agenda' => 'showMonth, showWeeks, none',

	),
	// non-cacheable actions
	array(

	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'List',
	array(
		'Appointment' => 'list, show, new1, new2, processNew, simpleProcessNew, create, edit, update, delete, free, none',

	),
	// non-cacheable actions
	array(
		'Appointment' => 'create, update, delete, edit, new1, new2, processNew, simpleProcessNew, free',
	)
);

if (TYPO3_MODE === 'BE') {
	#$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'Tx_Appointments_Configuration_TCA_PostProcess_Appointment';
	#$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'Tx_Appointments_Configuration_TCA_PostProcess_FormFieldValue';
	$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_iconworks.php']['overrideIconOverlay'][] = 'tx_appointments_hooks_iconworks';
}
?>