<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$CI =& get_instance();	
$CI->config->load('config');   
$this->domain = $CI->config->item('domain'); 

$config['roles'] = array(
	 'admin'      => "Administrator",
	 'master'     => "Super Admistrator",	
	 'normal'    => "Owner/Tenant"
);

/*** Menu For Super Admin***/
$config['menu1'] = array(
	'main'    => array(
	 					"name" => "Dashboard",	
	 					"icon"    => "fa-th-large",
	 					"url" => $this->domain."/main/index",	
	 				),
 	'property'    => array(
	 					"name" => "Property",
	 					"icon"    => "fa-home",	
	 					"url" => $this->domain."/property/index",	
	 				),
	 'account'     => array(
	 					"name" => "Users",	
	 					"icon"    => "fa-user",
	 					"url" => $this->domain."/account/index",	
	 				),
	 'facility'  => array(
	 					"name" => "Facility",	
	 					"icon"    => "fa-gamepad",
	 					"url" => $this->domain."/facility/index",	
	 				),
	'maintenance'  => array(
	 					"name" => "Account",	
	 					"icon"    => "fa-wrench",
	 					"url" => $this->domain."/maintenance/index",	
	 				),
	'announcement'  => array(
	 					"name" => "Announcement",
	 					"icon"    => "fa-comment",	
	 					"url" => $this->domain."/announcement/index",	
	 				),
	  'messages'    => array(
	 					"name" => "Messages",	
	 					"icon"    => "fa-comments",
	 					"url" => $this->domain."/messages/index",	
	 				),
);

$config['sub_menu1'] = array(
	'main'     => array(),
	'property'     => array(
					'Manage Property' =>  $this->domain.'/property/index',
					'Create Property' =>  $this->domain.'/property/create',
	),
	 'account'  => array(
	 				'Manage User' => $this->domain.'/account/index', 
	 				'Create User' => $this->domain.'/account/create', 
	 				'Edit User' => $this->domain.'/account/edit'
	 ),
	 'facility'     => array(
	 				'Manage Facility' => $this->domain.'/facility/index',
	 				'Create Facility' => $this->domain.'/facility/add',
	 				'Manage Booking' => $this->domain.'/facility/booking'
	 ),	
	'maintenance'     => array(
					'Manage Account' =>  $this->domain.'/maintenance/index',
					'Add Account' =>  $this->domain.'/maintenance/create',
	),	
	 'announcement'    => array(
	 				'Manage Announcement' => $this->domain.'/announcement/index',
	 				'Create Announcement' => $this->domain.'/announcement/create',
	 	),
);

/*** Menu For Normal Admin***/
$config['menu2'] = array(
	'main'    => array(
	 					"name" => "Dashboard",	
	 					"icon"    => "fa-th-large",
	 					"url" => $this->domain."/main/index",	
	 				),
	 'account'     => array(
	 					"name" => "Users",	
	 					"icon"    => "fa-user",
	 					"url" => $this->domain."/account/index",	
	 				),
	 'facility'  => array(
	 					"name" => "Facility",	
	 					"icon"    => "fa-gamepad",
	 					"url" => $this->domain."/facility/index",	
	 				),
	'maintenance'  => array(
	 					"name" => "Account",	
	 					"icon"    => "fa-wrench",
	 					"url" => $this->domain."/maintenance/index",	
	 				),
	'announcement'  => array(
	 					"name" => "Announcement",	
	 					"icon"    => "fa-comment",
	 					"url" => $this->domain."/announcement/index",	
	 				),
	 'messages'    => array(
	 					"name" => "Messages",	
	 					"icon"    => "fa-comments",
	 					"url" => $this->domain."/messages/index",	
	 				),
);

$config['sub_menu2'] = array( 
	'main'     => array(),
	 'account'  => array(
	 				'Manage User' => $this->domain.'/account/index', 
	 				'Create User' => $this->domain.'/account/create', 
	 				'Edit User' => $this->domain.'/account/edit'
	 ),
	 'facility'     => array(
	 				'Manage Facility' => $this->domain.'/facility/index',
	 				'Create Facility' => $this->domain.'/facility/add',
	 				'Manage Booking' => $this->domain.'/facility/checkBooking'
	 ),	
	'maintenance'     => array(
					'Manage Account' =>  $this->domain.'/maintenance/index',
					'Add Account' =>  $this->domain.'/maintenance/create',
	),	
	 'announcement'    => array(
	 				'Manage Announcement' => $this->domain.'/announcement/index',
	 				'Create Announcement' => $this->domain.'/announcement/create',
	 	),
);

/*** Menu For Normal User***/
$config['menu3'] = array(
	'main'    => array(
	 					"name" => "Dashboard",	
	 					"icon"    => "fa-th-large",
	 					"url" => $this->domain."/main/dashboard",	
	 				),
	 'account'     => array(
	 					"name" => "Users",	
	 					"icon"    => "fa-user",
	 					"url" => $this->domain."/account/index",	
	 				),
	 'facility'  => array(
	 					"name" => "Facility",	
	 					"icon"    => "fa-gamepad",
	 					"url" => $this->domain."/facility/index",	
	 				),
	'maintenance'  => array(
	 					"name" => "Account",	
	 					"icon"    => "fa-wrench",
	 					"url" => $this->domain."/maintenance/index",	
	 				),
	  'messages'    => array(
	 					"name" => "Messages",	
	 					"icon"    => "fa-comments",
	 					"url" => $this->domain."/messages/index",	
	 				),

);

$config['sub_menu3'] = array(
	'main'     => array(),
	 'account'  => array(
	 				'Edit User' => $this->domain.'/account/edit'
	 ),
	 'facility'     => array(
	 				'Facility Booking' => $this->domain.'/facility/memberBooking',
	 				'Make A Booking' => $this->domain.'/facility/memberAddBooking'
	 ),	
	'maintenance'     => array(
					'Manage Account' =>  $this->domain.'/maintenance/index',
					'My Payment' =>  $this->domain.'/maintenance/myPayment'
	),	
);

$config['admin_option'] = array(
	 '0'  => "No Access",
	 '1'  => "View Listing",
	 '2'  => "View and Edit",	
	 '3'  => "ALL (Listing, Add, Edit, Delete)",
);

/********Supported Languages********/
$config['time_range'] = array(
	1 => '08:00 - 09:00',
	2 => '09:00 - 10:00',
	3 => '10:00 - 11:00',
	4 => '11:00 - 12:00',
	5 => '12:00 - 13:00',
	6 => '13:00 - 14:00',
	7 => '14:00 - 15:00',
	8 => '15:00 - 16:00',
	9 => '16:00 - 17:00',
	10 => '17:00 - 18:00',
	11 => '18:00 - 19:00',
	12 => '19:00 - 20:00',
	13 => '20:00 - 21:00',
	14 => '21:00 - 22:00',
	15 => '22:00 - 23:00',
	16 => '23:00 - 00:00',
);							

/********Supported Languages********/
$config['languages'] = array(
			'en' => 'English',
			'bm' => 'Bahasa Malayu',
); 

/********Yes/No********/
$config['yesno'] = array(
			1 => 'Yes',
			2 => 'No',
); 

/********Supported country********/
$config['country'] = array(
	'au' => 'Australia',
	'my' => 'Malaysia',
	'id' => 'Indonesia',
	'sg' => 'Singapore'			
);

$config['per_page'] = '20';
$config['auto_logout'] = '480';

/********Day********/
for($i = 1; $i <= 31; $i++){
	if($i < 10){
		$i = '0'.$i;
	}
	$config['day'][$i] = $i; 
}

/********Month********/
$config['month'] = array(
	1 => 'January',
	2 => 'February',
	3 => 'March',
	4 => 'April',
	5 => 'May',
	6 => 'June',
	7 => 'July',
	8 => 'August',
	9 => 'September',
	10 => 'October',
	11 => 'Novermber',
	12 => 'December',			
);    

/********Year********/
for($y = date('Y') - 10; $y >= 1955; $y--){
	$config['year'][$y] = $y; 
}

for($z = 2014; $z <= date('Y'); $z++){
	$config['yearRecent'][$z] = $z; 
}

/********Malaysia State********/
$config['state'] = array(
	'jh' => 'Johor',
	'kd' => 'Kedah',
	'kt' => 'Kelantan',
	'lb' => 'Labuan',
	'ml' => 'Melaka',
	'ns' => 'Negeri Sembilan',
	'pl' => 'Pulau Langkawi',
	'pn' => 'Penang',	
	'pr' => 'Perak',
	'ps' => 'Perlis',
	'sb' => 'Sabah',
	'sl' => 'Selangor',
	'sr' => 'Sarawak',
	'wp' => 'Wilayah Persekutuan',
);

/********User type********/
$config['user_type'] = array(
	1 => array(
		2 => 'Admin',
		3 => 'Resident' 
	),
	2 => array(
		2 => 'Admin',
		3 => 'Resident' 
	),
	3 => array(
		3 => 'Resident' 
	),
);

/********Status********/
$config['status'] = array(
	1 => 'Active',
	2 => 'Inactive' 
);

/********Payment Type********/
$config['payment_type'] = array(
	1 => 'Cash',
	2 => 'Cheque' 
);

/********Maintenance Type********/
$config['maintenance_type'] = array(
	1 => 'Maintenane & Sinking Fund',
	2 => 'Electrical',
	3 => 'Broadband',
	4 => 'Water',
	5 => 'Others'
);

/********Facilities status********/
$config['facilities_status'] = array(
	1 => 'Open',
	2 => 'Close for maintenance',
	3 => 'Facility removed' 
);


/********Resident Type********/
$config['resident_type'] = array(
	1 => 'Owner',
	2 => 'Tenants'
);

/********Facility status********/
$config['facility_status'] = array(
	1 => 'Open',
	2 => 'Close for maintenance',
	3 => 'Facility removed' 
);

/********Booking status********/
$config['booking_status'] = array(
	1 => 'Confirmed',
	2 => 'Cancelled' 
);

/********Maintenance status********/
$config['maintenance_status'] = array(
	1 => 'Ok',
	2 => 'Cancelled' 
);

/********Gender********/
$config['gender'] = array(
	'm' => 'Male',
	'f' => 'Female',
);	

$config['sorted']  = array(
 	1 =>'ASC',
    2 =>'DESC'
);

/********Skip authentication module********/
$config['skip_auth'] = array(
	'main' => array(
		'login','doLogin','doLogout','doforgetPassword','resetPassword','doSetNewPassword'
	),
);

$config['per_page'] = "10";

/* End of file config_settings.php */
/* Location: ./application/config/config_settings.php */
