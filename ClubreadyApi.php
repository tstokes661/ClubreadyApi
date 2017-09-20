<?php
class ClubreadyApi {
    public $cr_key;
    
    public function __construct($cr_key=null) {
        $this->api_key = $cr_key;
        echo "Clubready Api Initialized..\n";
    }

    //USER DATA//
    function FindUsers($store_id,$email=null,$barcode=null) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "Accept: application/json";
		$hook_url = "http://www.clubready.com/api/current/users/find?ApiKey=$this->api_key&StoreId=$store_id&email=$email&barcode=$barcode";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function DateAdded($store_id,$FromDate=null,$ToDate=null) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "Accept: application/json";
		$hook_url = "http://www.clubready.com/api/current/users/date-added?ApiKey=$this->api_key&StoreId=$store_id&FromDate=$FromDate&ToDate=$ToDate";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

}