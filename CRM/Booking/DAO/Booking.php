<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.4                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Booking/Booking.xml
 * DO NOT EDIT.  Generated by GenCode.php
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Booking_DAO_Booking extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_booking';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $primary_contact_id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $secondary_contact_id;
  /**
   *
   * @var string
   */
  public $title;
  /**
   * The status associated with this booking. Implicit FK to option_value row in booking status option_group.
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   *
   * @var datetime
   */
  public $event_date;
  /**
   *
   * @var string
   */
  public $po_number;
  /**
   *
   * @var string
   */
  public $description;
  /**
   *
   * @var text
   */
  public $notes;
  /**
   *
   * @var text
   */
  public $adhoc_charges_note;
  /**
   *
   * @var string
   */
  public $participants_estimate;
  /**
   *
   * @var string
   */
  public $participants_actual;
  /**
   *
   * @var float
   */
  public $discount_amount;
  /**
   * The contribution status associated with this booking. Implicit FK to option_value row in contribution status option_group.
   *
   * @var int unsigned
   */
  public $payment_status_id;
  /**
   *
   * @var boolean
   */
  public $is_deleted;
  /**
   *
   * @var int unsigned
   */
  public $created_by;
  /**
   *
   * @var datetime
   */
  public $created_date;
  /**
   *
   * @var int unsigned
   */
  public $updated_by;
  /**
   *
   * @var datetime
   */
  public $updated_date;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_booking
   */
  function __construct()
  {
    $this->__table = 'civicrm_booking';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_EntityReference
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = array(
        new CRM_Core_EntityReference(self::getTableName() , 'primary_contact_id', 'civicrm_contact', 'id') ,
        new CRM_Core_EntityReference(self::getTableName() , 'secondary_contact_id', 'civicrm_contact', 'id') ,
      );
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'primary_contact_id' => array(
          'name' => 'primary_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Primary Contact ID') ,
          'required' => true,
          'import' => true,
          'where' => 'civicrm_booking.primary_contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'secondary_contact_id' => array(
          'name' => 'secondary_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Secondary Contact ID') ,
          'required' => false,
          'import' => true,
          'where' => 'civicrm_booking.secondary_contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'booking_title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Status ID') ,
          'required' => true,
          'pseudoconstant' => array(
            'optionGroupName' => 'booking_status',
          )
        ) ,
        'booking_event_date' => array(
          'name' => 'event_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Event Date') ,
          'required' => true,
        ) ,
        'booking_po_number' => array(
          'name' => 'po_number',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('PO Number') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'export' => true,
          'where' => 'civicrm_booking.po_number',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'notes' => array(
          'name' => 'notes',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Notes') ,
        ) ,
        'adhoc_charges_note' => array(
          'name' => 'adhoc_charges_note',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Adhoc Charges Note') ,
        ) ,
        'participants_estimate' => array(
          'name' => 'participants_estimate',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participants Estimate') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'participants_actual' => array(
          'name' => 'participants_actual',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participants Actual') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'discount_amount' => array(
          'name' => 'discount_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Discount Amount') ,
        ) ,
        'payment_status_id' => array(
          'name' => 'payment_status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Payment status idD') ,
          'required' => true,
          'pseudoconstant' => array(
            'optionGroupName' => 'contribution_status',
          )
        ) ,
        'booking_is_deleted' => array(
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Booking is in the Trash') ,
          'import' => true,
          'where' => 'civicrm_booking.is_deleted',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'created_by' => array(
          'name' => 'created_by',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Created By') ,
          'required' => true,
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Created Date') ,
          'required' => true,
        ) ,
        'updated_by' => array(
          'name' => 'updated_by',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Updated By') ,
          'required' => true,
        ) ,
        'updated_date' => array(
          'name' => 'updated_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Updated Date') ,
          'required' => true,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'primary_contact_id' => 'primary_contact_id',
        'secondary_contact_id' => 'secondary_contact_id',
        'title' => 'booking_title',
        'status_id' => 'status_id',
        'event_date' => 'booking_event_date',
        'po_number' => 'booking_po_number',
        'description' => 'description',
        'notes' => 'notes',
        'adhoc_charges_note' => 'adhoc_charges_note',
        'participants_estimate' => 'participants_estimate',
        'participants_actual' => 'participants_actual',
        'discount_amount' => 'discount_amount',
        'payment_status_id' => 'payment_status_id',
        'is_deleted' => 'booking_is_deleted',
        'created_by' => 'created_by',
        'created_date' => 'created_date',
        'updated_by' => 'updated_by',
        'updated_date' => 'updated_date',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['booking'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['booking'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
