<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Frenck Lutke <frenck@innologi.nl>, www.innologi.nl
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Appointment domain model
 *
 * @package appointments
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Appointments_Domain_Model_Appointment extends Tx_Extbase_DomainObject_AbstractEntity {
	#@FIXME probeer eens een new/edit form gigantisch te verknallen, en kijk wat je moet beveiligen

	/**
	 * Creation timestamp
	 *
	 * @var integer
	 */
	protected $crdate;

	/**
	 * Temporary record / not finalized
	 *
	 * @var boolean
	 */
	protected $temporary;

	/**
	 * Start time
	 *
	 * @var DateTime
	 * @validate DateTime
	 */
	protected $beginTime; #@FIXME wat als iemand deze waarde probeert te manipuleren?

	/**
	 * End time
	 *
	 * @var DateTime
	 */
	protected $endTime;

	/**
	 * Start reserved
	 *
	 * @var DateTime
	 */
	protected $beginReserved;

	/**
	 * End time
	 *
	 * @var DateTime
	 */
	protected $endReserved;

	/**
	 * Notes
	 *
	 * @var string
	 */
	protected $notes;

	/**
	 * Notes SU
	 *
	 * @var string
	 */
	protected $notesSu;

	/**
	 * Type which this Appointment belongs to
	 *
	 * @var Tx_Appointments_Domain_Model_Type
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	 * Form field values associated with this appointment
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Appointments_Domain_Model_FormFieldValue>
	 * @validate Tx_Appointments_Domain_Validator_ObjectStorageValidator(containsVariable=1)
	 */
	protected $formFieldValues;

	/**
	 * Name and address information
	 *
	 * @var Tx_Appointments_Domain_Model_Address
	 * @validate Tx_Appointments_Domain_Validator_ObjectPropertiesValidator
	 */
	protected $address;

	/**
	 * User who created this appointment
	 *
	 * @var Tx_Extbase_Domain_Model_FrontendUser
	 * @validate NotEmpty
	 * @lazy
	 */
	protected $feUser;

	/**
	 * Agenda in which this appointment was made
	 *
	 * @var Tx_Appointments_Domain_Model_Agenda
	 * @validate NotEmpty
	 */
	protected $agenda;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->formFieldValues = new Tx_Extbase_Persistence_ObjectStorage();
	}


	/**
	 * Returns the creation timestamp
	 *
	 * @return integer $crdate
	 */
	public function getCrdate() {
		return $this->crdate;
	}

	/**
	 * Returns the temporary flag
	 *
	 * @return boolean $temporary
	 */
	public function getTemporary() {
		return $this->temporary;
	}

	/**
	 * Sets the temporary flag
	 *
	 * @param boolean $temporary
	 * @return void
	 */
	public function setTemporary($temporary) {
		$this->temporary = $temporary;
	}

	/**
	 * Returns the beginTime
	 *
	 * @return DateTime $beginTime
	 */
	public function getBeginTime() {
		return $this->beginTime;
	}

	/**
	 * Sets the beginTime
	 *
	 * @param DateTime $beginTime
	 * @return void
	 */
	public function setBeginTime($beginTime) {
		$this->beginTime = $beginTime;
	}

	/**
	 * Returns the endTime
	 *
	 * @return DateTime $endTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Sets the endTime
	 *
	 * @param DateTime $endTime
	 * @return void
	 */
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
	}

	/**
	 * Returns the beginReserved
	 *
	 * @return DateTime $beginReserved
	 */
	public function getBeginReserved() {
		return $this->beginReserved;
	}

	/**
	 * Sets the beginReserved
	 *
	 * @param DateTime $beginReserved
	 * @return void
	 */
	public function setBeginReserved($beginReserved) {
		$this->beginReserved = $beginReserved;
	}

	/**
	 * Returns the endReserved
	 *
	 * @return DateTime $endReserved
	 */
	public function getEndReserved() {
		return $this->endReserved;
	}

	/**
	 * Sets the endReserved
	 *
	 * @param DateTime $endReserved
	 * @return void
	 */
	public function setEndReserved($endReserved) {
		$this->endReserved = $endReserved;
	}

	/**
	 * Returns the notes
	 *
	 * @return string $notes
	 */
	public function getNotes() {
		return $this->notes;
	}

	/**
	 * Sets the notes
	 *
	 * @param string $notes
	 * @return void
	 */
	public function setNotes($notes) {
		$this->notes = $notes;
	}

	/**
	 * Returns the notes SU
	 *
	 * @return string $notesSu
	 */
	public function getNotesSu() {
		return $this->notesSu;
	}

	/**
	 * Sets the notes SU
	 *
	 * @param string $notesSu
	 * @return void
	 */
	public function setNotesSu($notesSu) {
		$this->notesSu = $notesSu;
	}

	/**
	 * Returns the type
	 *
	 * @return Tx_Appointments_Domain_Model_Type $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param Tx_Appointments_Domain_Model_Type $type
	 * @return void
	 */
	public function setType(Tx_Appointments_Domain_Model_Type $type) {
		$this->type = $type;
	}

	/**
	 * Adds a FormFieldValue
	 *
	 * @param Tx_Appointments_Domain_Model_FormFieldValue $formFieldValue
	 * @return void
	 */
	public function addFormFieldValue(Tx_Appointments_Domain_Model_FormFieldValue $formFieldValue) {
		$this->formFieldValues->attach($formFieldValue);
	}

	/**
	 * Removes a FormFieldValue
	 *
	 * @param Tx_Appointments_Domain_Model_FormFieldValue $formFieldValueToRemove The FormFieldValue to be removed
	 * @return void
	 */
	public function removeFormFieldValue(Tx_Appointments_Domain_Model_FormFieldValue $formFieldValueToRemove) {
		$this->formFieldValues->detach($formFieldValueToRemove);
	}

	/**
	 * Returns the formFieldValues
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Appointments_Domain_Model_FormFieldValue> $formFieldValues
	 */
	public function getFormFieldValues() {
		return $this->formFieldValues;
	}

	/**
	 * Sets the formFieldValues
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Appointments_Domain_Model_FormFieldValue> $formFieldValues
	 * @return void
	 */
	public function setFormFieldValues(Tx_Extbase_Persistence_ObjectStorage $formFieldValues) {
		$this->formFieldValues = $formFieldValues;
	}

	/**
	 * Returns the address
	 *
	 * @return Tx_Appointments_Domain_Model_Address $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param Tx_Appointments_Domain_Model_Address $address
	 * @return void
	 */
	public function setAddress(Tx_Appointments_Domain_Model_Address $address) {
		$this->address = $address;
	}

	/**
	 * Returns the agenda
	 *
	 * @return Tx_Appointments_Domain_Model_Agenda $agenda
	 */
	public function getAgenda() {
		return $this->agenda;
	}

	/**
	 * Sets the agenda
	 *
	 * @param Tx_Appointments_Domain_Model_Agenda $agenda
	 * @return void
	 */
	public function setAgenda(Tx_Appointments_Domain_Model_Agenda $agenda) {
		$this->agenda = $agenda;
	}

	/**
	 * Returns the feUser
	 *
	 * @return Tx_Extbase_Domain_Model_FrontendUser feUser
	 */
	public function getFeUser() {
		return $this->feUser;
	}

	/**
	 * Sets the feUser
	 *
	 * @param Tx_Extbase_Domain_Model_FrontendUser $feUser
	 * @return Tx_Extbase_Domain_Model_FrontendUser feUser
	 */
	public function setFeUser(Tx_Extbase_Domain_Model_FrontendUser $feUser) {
		$this->feUser = $feUser;
	}

}
?>