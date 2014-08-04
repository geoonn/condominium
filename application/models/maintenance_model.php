<?php
class Maintenance_Model extends APP_Model{
	public $_result = array();
	
	function __construct() {
		$this->_table      = "maintenance";
		$this->primary_key = 'm_id';	
		
		$this->_result['status']     = '';
		$this->_result['error_code'] = '';
		$this->_result['data']       = array();	
	}
	
	public function getById(){
		$filter = array(
			$this->primary_key => $this->param['m_id']
		);
		
		$result = $this->get_data($filter);
		
		/*** return response***/
		$this->_result['status']     = 'success';
		$this->_result['data']       = $result[0];	
		return $this->_result;
	}
	
	public function getByResident(){
		$limit = !empty( $this->param['limit']) ?  $this->param['limit'] : '';
		$filter = array(
			'r_id' => $this->param['r_id']
		);
		
		$result = $this->get_data($filter,$limit,0 ,$this->primary_key,'DESC');
		
		/*** return response***/
		$this->_result['status']     = 'success';
		$this->_result['data']       = $result;	
		return $this->_result;
	}
	
	public function add(){
		$validation = $this->validate();
		$duration   = $this->param['year']."-". $this->param['month'] . "-01";
		if(empty($validation)) { 
			$data = array(
				'r_id'                     => $this->param['r_id'],
				'duration'             => $duration,
				'totalAmount'      => $this->param['totalAmount'],
				'type'                     => !empty($this->param['type']) ? $this->param['type'] : 1,
				'paymentType'     => !empty($this->param['paymentType']) ? $this->param['paymentType'] : 1,
				'created'                => date('Y-m-d H:i:s'),
				'updated'               => date('Y-m-d H:i:s')
			);
			
			$id = $this->insert($data);
			
			/*** return response***/
			$this->_result['status']     = 'success';
			$this->_result['data']       = $id;	
			
		}else{
			/***Set Error Message***/
			$this->_result['status']     = 'error';
			$this->_result['error_code'] = $validation;
			foreach($validation as $k => $val){
				$this->_result['data']['error_msg'][$k] = $this->code[$val];
			}
		}
		
		return $this->_result;
	}
	
	public function edit(){
		$validation = $this->validate();
		
		if(empty($validation)) { 
			$data = array(
				'duration'             => $this->param['duration'],
				'totalAmount'      => $this->param['totalAmount'],
				'type'                     => !empty($this->param['type']) ? $this->param['type'] : 1,
				'paymentType'     => !empty($this->param['paymentType']) ? $this->param['paymentType'] : 1,
				'updated'      => date('Y-m-d H:i:s')
			);
			
			$this->update($this->param['m_id'], $data);
			
			/*** return response***/
			$this->_result['status']     = 'success';
			$this->_result['data']       = $this->param['m_id'];	
		}else{
			/***Set Error Message***/
			$this->_result['status']     = 'error';
			$this->_result['error_code'] = $validation;
			foreach($validation as $k => $val){
				$this->_result['data']['error_msg'][$k] = $this->code[$val];
			}
		}
		return $this->_result;
	}
	
	public function remove(){
		$this->delete($this->param['m_id']);
		
		/*** return response***/
		$this->_result['status']     = 'success';
		return $this->_result;
	}
	
	/*** Do checking before send to database***/
	private function validate(){
		$statusCode = array();
		$year        = $this->param['year'];
		$month        = $this->param['month'];
		$totalAmount = $this->param['totalAmount'];
		
		if(empty($year) || empty($month)){
			$statusCode[] = 132;
		}
		
		if(empty($totalAmount)){
			$statusCode[] = 133;
		}
		
		return $statusCode;
	}
	
}
?>
