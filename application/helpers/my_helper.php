<?php 
	

if (!function_exists('indonesian_date')) {
    /**
     * the purpose of this function is convert date into indonesian format 
     *
     * @return date indonesia format
     */
	function indonesian_date ($timestamp = '', $date_format = 'l, j F Y  H:i', $suffix = 'WIB') {
		if (trim ($timestamp) == '')
		{
			$timestamp = time ();
		}
		elseif (!ctype_digit ($timestamp))
		{
			$timestamp = strtotime ($timestamp);
		}
	    # remove S (st,nd,rd,th) there are no such things in indonesia :p
		$date_format = preg_replace ("/S/", "", $date_format);
		$pattern = array (
			'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
			'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
			'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
			'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
			'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
			'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
			'/April/','/June/','/July/','/August/','/September/','/October/',
			'/November/','/December/',
			);
		$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
			'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
			'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
			'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
			'Oktober','November','Desember',
			);
		$date = date ($date_format, $timestamp);
		$date = preg_replace ($pattern, $replace, $date);
		$date = "{$date} {$suffix}";
		return $date;
	}
}


if (!function_exists('indonesian_date_custom')) {

	function indonesian_date_custom($date)
	{
		return 'Pukul : ' . indonesian_date( $date, 'H:i' )  . '<br>' . indonesian_date( $date, 'l, j F Y', '' );
	}
}

if (!function_exists('isSessionExist')) {
	/*
	* function of checking session
	*
	*/
	function isSessionExist()
	{
		// for redirect if session does't exist
		if ( !isset($_SESSION['logged_in']) && $_SESSION['logged_in'] !== true) {
			redirect(base_url() . 'login/');
		}
	}
}


?>