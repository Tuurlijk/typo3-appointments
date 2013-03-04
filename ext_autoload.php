<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2013-03-04 21:38

$extensionPath = t3lib_extMgm::extPath('appointments');
$extensionClassesPath = $extensionPath . 'Classes/';
return array(
	'tx_appointments_configuration_tca_postprocess_appointment' => $extensionPath . 'Configuration/TCA/PostProcess/Appointment.php',
	'tx_appointments_configuration_tca_postprocess_formfieldvalue' => $extensionPath . 'Configuration/TCA/PostProcess/FormFieldValue.php',
	'tx_appointments_controller_agendacontroller' => $extensionClassesPath . 'Controller/AgendaController.php',
	'tx_appointments_controller_agendacontrollertest' => $extensionPath . 'Tests/Unit/Controller/AgendaControllerTest.php',
	'tx_appointments_controller_appointmentcontroller' => $extensionClassesPath . 'Controller/AppointmentController.php',
	'tx_appointments_controller_appointmentcontrollertest' => $extensionPath . 'Tests/Unit/Controller/AppointmentControllerTest.php',
	'tx_appointments_controller_formfieldvaluecontrollertest' => $extensionPath . 'Tests/Unit/Controller/FormFieldValueControllerTest.php',
	'tx_appointments_controller_typecontrollertest' => $extensionPath . 'Tests/Unit/Controller/TypeControllerTest.php',
	'tx_appointments_domain_model_address' => $extensionClassesPath . 'Domain/Model/Address.php',
	'tx_appointments_domain_model_addresstest' => $extensionPath . 'Tests/Unit/Domain/Model/AddressTest.php',
	'tx_appointments_domain_model_agenda' => $extensionClassesPath . 'Domain/Model/Agenda.php',
	'tx_appointments_domain_model_agenda_abstractcontainer' => $extensionClassesPath . 'Domain/Model/Agenda/AbstractContainer.php',
	'tx_appointments_domain_model_agenda_date' => $extensionClassesPath . 'Domain/Model/Agenda/Date.php',
	'tx_appointments_domain_model_agenda_month' => $extensionClassesPath . 'Domain/Model/Agenda/Month.php',
	'tx_appointments_domain_model_agenda_weeks' => $extensionClassesPath . 'Domain/Model/Agenda/Weeks.php',
	'tx_appointments_domain_model_agendatest' => $extensionPath . 'Tests/Unit/Domain/Model/AgendaTest.php',
	'tx_appointments_domain_model_appointment' => $extensionClassesPath . 'Domain/Model/Appointment.php',
	'tx_appointments_domain_model_appointmenttest' => $extensionPath . 'Tests/Unit/Domain/Model/AppointmentTest.php',
	'tx_appointments_domain_model_dateslot' => $extensionClassesPath . 'Domain/Model/DateSlot.php',
	'tx_appointments_domain_model_formfield' => $extensionClassesPath . 'Domain/Model/FormField.php',
	'tx_appointments_domain_model_formfieldtest' => $extensionPath . 'Tests/Unit/Domain/Model/FormFieldTest.php',
	'tx_appointments_domain_model_formfieldvalue' => $extensionClassesPath . 'Domain/Model/FormFieldValue.php',
	'tx_appointments_domain_model_formfieldvaluetest' => $extensionPath . 'Tests/Unit/Domain/Model/FormFieldValueTest.php',
	'tx_appointments_domain_model_timeslot' => $extensionClassesPath . 'Domain/Model/TimeSlot.php',
	'tx_appointments_domain_model_type' => $extensionClassesPath . 'Domain/Model/Type.php',
	'tx_appointments_domain_model_typetest' => $extensionPath . 'Tests/Unit/Domain/Model/TypeTest.php',
	'tx_appointments_domain_model_usertest' => $extensionPath . 'Tests/Unit/Domain/Model/UserTest.php',
	'tx_appointments_domain_repository_agendarepository' => $extensionClassesPath . 'Domain/Repository/AgendaRepository.php',
	'tx_appointments_domain_repository_appointmentrepository' => $extensionClassesPath . 'Domain/Repository/AppointmentRepository.php',
	'tx_appointments_domain_repository_typerepository' => $extensionClassesPath . 'Domain/Repository/TypeRepository.php',
	'tx_appointments_domain_service_slotservice' => $extensionClassesPath . 'Domain/Service/SlotService.php',
	'tx_appointments_domain_validator_objectpropertiesvalidator' => $extensionClassesPath . 'Domain/Validator/ObjectPropertiesValidator.php',
	'tx_appointments_domain_validator_objectstoragevalidator' => $extensionClassesPath . 'Domain/Validator/ObjectStorageValidator.php',
	'tx_appointments_domain_validator_variablevalidator' => $extensionClassesPath . 'Domain/Validator/VariableValidator.php',
	'tx_appointments_hooks_iconworks' => $extensionClassesPath . 'Hooks/Tx_Appointments_Hooks_Iconworks.php',
	'tx_appointments_mvc_controller_settingsoverridecontroller' => $extensionClassesPath . 'MVC/Controller/SettingsOverrideController.php',
	'tx_appointments_persistence_keyobjectstorage' => $extensionClassesPath . 'Persistence/KeyObjectStorage.php',
	'tx_appointments_persistence_manager' => $extensionClassesPath . 'Persistence/Manager.php',
	'tx_appointments_service_emailservice' => $extensionClassesPath . 'Service/EmailService.php',
	'tx_appointments_validation_storageerror' => $extensionClassesPath . 'Validation/StorageError.php',
	'tx_appointments_validation_variablevalidatorresolver' => $extensionClassesPath . 'Validation/VariableValidatorResolver.php',
	'tx_appointments_viewhelpers_form_selectviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/SelectViewHelper.php',
	'tx_appointments_viewhelpers_form_textareaviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/TextareaViewHelper.php',
	'tx_appointments_viewhelpers_form_textfieldviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/TextfieldViewHelper.php',
	'tx_appointments_viewhelpers_format_camelcaseviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/CamelCaseViewHelper.php',
	'tx_appointments_viewhelpers_format_lowercaseviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/LowerCaseViewHelper.php',
);
?>