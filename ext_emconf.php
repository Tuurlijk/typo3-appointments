<?php

########################################################################
# Extension Manager/Repository config file for ext: "appointments"
#
# Auto generated by Extension Builder 2012-06-29
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Appointment Scheduler',
	'description' => 'Appointment scheduler allows FE users to schedule / list / manage appointments. Agenda\'s are created in BE, including user-defined appointment types, conditions, registration forms, and more.',
	'category' => 'plugin',
	'author' => 'Frenck Lutke',
	'author_email' => 'typo3@innologi.nl',
	'author_company' => 'www.innologi.nl',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.2.99',
			'tt_address' => '2.2.1',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);