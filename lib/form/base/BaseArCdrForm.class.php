<?php

/**
 * ArCdr form base class.
 *
 * @method ArCdr getObject() Returns the current form's model object
 *
 * @package    asterisell
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseArCdrForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                                 => new sfWidgetFormInputHidden(),
      'calldate'                                           => new sfWidgetFormDateTime(),
      'to_calldate'                                        => new sfWidgetFormDateTime(),
      'is_imported_service_cdr'                            => new sfWidgetFormInputCheckbox(),
      'count_of_calls'                                     => new sfWidgetFormInputText(),
      'destination_type'                                   => new sfWidgetFormInputText(),
      'is_redirect'                                        => new sfWidgetFormInputCheckbox(),
      'duration'                                           => new sfWidgetFormInputText(),
      'billsec'                                            => new sfWidgetFormInputText(),
      'ar_organization_unit_id'                            => new sfWidgetFormPropelChoice(array('model' => 'ArOrganizationUnit', 'add_empty' => true)),
      'cached_parent_id_hierarchy'                         => new sfWidgetFormInputText(),
      'billable_ar_organization_unit_id'                   => new sfWidgetFormInputText(),
      'bundle_ar_organization_unit_id'                     => new sfWidgetFormInputText(),
      'income'                                             => new sfWidgetFormInputText(),
      'cost_saving'                                        => new sfWidgetFormInputText(),
      'ar_vendor_id'                                       => new sfWidgetFormPropelChoice(array('model' => 'ArVendor', 'add_empty' => true)),
      'ar_communication_channel_type_id'                   => new sfWidgetFormPropelChoice(array('model' => 'ArCommunicationChannelType', 'add_empty' => true)),
      'cost'                                               => new sfWidgetFormInputText(),
      'expected_cost'                                      => new sfWidgetFormInputText(),
      'ar_telephone_prefix_id'                             => new sfWidgetFormPropelChoice(array('model' => 'ArTelephonePrefix', 'add_empty' => true)),
      'cached_external_telephone_number'                   => new sfWidgetFormInputText(),
      'external_telephone_number_with_applied_portability' => new sfWidgetFormInputText(),
      'cached_masked_external_telephone_number'            => new sfWidgetFormInputText(),
      'error_destination_type'                             => new sfWidgetFormInputText(),
      'ar_problem_duplication_key'                         => new sfWidgetFormInputText(),
      'debug_cost_rate'                                    => new sfWidgetFormInputText(),
      'debug_income_rate'                                  => new sfWidgetFormInputText(),
      'debug_residual_income_rate'                         => new sfWidgetFormInputText(),
      'debug_residual_call_duration'                       => new sfWidgetFormInputText(),
      'debug_bundle_left_calls'                            => new sfWidgetFormInputText(),
      'debug_bundle_left_duration'                         => new sfWidgetFormInputText(),
      'debug_bundle_left_cost'                             => new sfWidgetFormInputText(),
      'debug_rating_details'                               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'calldate'                                           => new sfValidatorDateTime(),
      'to_calldate'                                        => new sfValidatorDateTime(array('required' => false)),
      'is_imported_service_cdr'                            => new sfValidatorBoolean(),
      'count_of_calls'                                     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'destination_type'                                   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'is_redirect'                                        => new sfValidatorBoolean(),
      'duration'                                           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'billsec'                                            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'ar_organization_unit_id'                            => new sfValidatorPropelChoice(array('model' => 'ArOrganizationUnit', 'column' => 'id', 'required' => false)),
      'cached_parent_id_hierarchy'                         => new sfValidatorString(array('max_length' => 850, 'required' => false)),
      'billable_ar_organization_unit_id'                   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'bundle_ar_organization_unit_id'                     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'income'                                             => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'cost_saving'                                        => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'ar_vendor_id'                                       => new sfValidatorPropelChoice(array('model' => 'ArVendor', 'column' => 'id', 'required' => false)),
      'ar_communication_channel_type_id'                   => new sfValidatorPropelChoice(array('model' => 'ArCommunicationChannelType', 'column' => 'id', 'required' => false)),
      'cost'                                               => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'expected_cost'                                      => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'ar_telephone_prefix_id'                             => new sfValidatorPropelChoice(array('model' => 'ArTelephonePrefix', 'column' => 'id', 'required' => false)),
      'cached_external_telephone_number'                   => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'external_telephone_number_with_applied_portability' => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'cached_masked_external_telephone_number'            => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'error_destination_type'                             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'ar_problem_duplication_key'                         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'debug_cost_rate'                                    => new sfValidatorString(array('max_length' => 2048, 'required' => false)),
      'debug_income_rate'                                  => new sfValidatorString(array('max_length' => 2048, 'required' => false)),
      'debug_residual_income_rate'                         => new sfValidatorString(array('max_length' => 2048, 'required' => false)),
      'debug_residual_call_duration'                       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'debug_bundle_left_calls'                            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'debug_bundle_left_duration'                         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'debug_bundle_left_cost'                             => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'debug_rating_details'                               => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ar_cdr[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArCdr';
  }


}
