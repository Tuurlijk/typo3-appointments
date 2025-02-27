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
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '3.1.2',
	'constraints' => array(
		'depends' => array(
			'php' => '7.2',
			'typo3' => '10.4.0-11.99.99',
			'felogin' => '10.4.0',
			'tt_address' => '5.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'scheduler' => '10.4.0'
		),
	),
	'autoload' => array(
		'psr-4' => array(
			'Innologi\\Appointments\\' => 'Classes'
		)
	)
);