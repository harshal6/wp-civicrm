<?php
/**
 * Test Generated example demonstrating the MessageTemplate.create API.
 *
 * @return array
 *   API result array
 */
function message_template_create_example() {
  $params = [
    'msg_title' => 'msg_title_284',
    'msg_subject' => 'msg_subject_284',
    'msg_text' => 'msg_text_284',
    'msg_html' => 'msg_html_284',
    'workflow_id' => 284,
    'is_default' => '1',
    'is_reserved' => 1,
  ];

  try{
    $result = civicrm_api3('MessageTemplate', 'create', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return [
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    ];
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function message_template_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 69,
    'values' => [
      '69' => [
        'id' => '69',
        'msg_title' => 'msg_title_284',
        'msg_subject' => 'msg_subject_284',
        'msg_text' => 'msg_text_284',
        'msg_html' => 'msg_html_284',
        'is_active' => '1',
        'workflow_id' => '284',
        'is_default' => '1',
        'is_reserved' => '1',
        'is_sms' => '',
        'pdf_format_id' => '',
      ],
    ],
  ];

  return $expectedResult;
}

/*
* This example has been generated from the API test suite.
* The test that created it is called "testCreate"
* and can be found at:
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/MessageTemplateTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
