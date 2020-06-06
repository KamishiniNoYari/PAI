<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array('etat'=> array('rule' => 'notBlank'),
	'nazwisko'=>array('rule' => 'notBlank'),
	'placa_pod' => array('rule' => array('range', 0, 2000),
	'message' => 'The payment range is 0 - 2000'));
}
?>
