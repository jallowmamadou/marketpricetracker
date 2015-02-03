<?php 
	if (!function_exists('pull_year')) :

		//method would return a year from a string
		function pull_year($date){
			// ruretn $date;
			// reads the date
			// check for characters and spaces
			// creates an array of date values
			// check for the value with 4 numbers
			// returns that as the date
			// AT THE MOMENT JUST A NOT SAVE VERSION

			$stamp = strtotime($date);
			$year = date('Y',$stamp);
			if ($year == '1970') {
				return null;
			}
			return $year;
		}

	endif;

if (!function_exists('date_standard')) :
	function date_standard($date){
		$faan = array();
		$datef = '';
		$string = $date;
			if (!$string) {
				return null;
			}
			if (str_contains($string, ' ')) {
				// remove the time
				$dateandtime = preg_split('/( )/', $string);
				if (!empty($dateandtime)) {
					if (count($dateandtime) > 1) {
						$datef = ( ($dateandtime[0]) && (strlen($dateandtime[0]) > 3) )? $dateandtime[0] : null;
					}else{
						$datef = ( ($dateandtime[0]) && (strlen($dateandtime[0]) > 3) )? $dateandtime[0] : null;
					}
				}else{
					#slip is one
				}
				// and set the remain date to the datef
			}else{

				$datef = ( ($string) && (strlen($string) > 3) )? $string : null;

			}
			if ($datef) {
				if (str_contains($datef, '/')) {
					$faan = preg_split('/\//', $datef);
				}elseif(str_contains($datef, '-')){
					$faan = preg_split('/-/', $datef);
				}
			}
			if (!empty($faan)) {
				$wahtu = '';
				$year = max($faan);
				foreach ($faan as $key => $value) {
					if ($key != count($faan) - 1 ) {
						$wahtu .= $value.'-';
					}else{
					$wahtu .= $value;	
					}
					
				}
				$stamp3 = strtotime($wahtu);
				$dat = date("Y-m-d H:i:s",$stamp3);
				return $dat;
			}
	}
endif;
if (!function_exists('just_date')) :
	function just_date($date){
		$faan = array();
		$datef = '';
		$string = $date;
			if (!$string) {
				return null;
			}
			if (str_contains($string, ' ')) {
				// remove the time
				$dateandtime = preg_split('/( )/', $string);
				if (!empty($dateandtime)) {
					if (count($dateandtime) > 1) {
						$datef = ( ($dateandtime[0]) && (strlen($dateandtime[0]) > 3) )? $dateandtime[0] : null;
					}else{
						$datef = ( ($dateandtime[0]) && (strlen($dateandtime[0]) > 3) )? $dateandtime[0] : null;
					}
				}else{
					#slip is one
				}
				// and set the remain date to the datef
			}else{

				$datef = ( ($string) && (strlen($string) > 3) )? $string : null;

			}
			if ($datef) {
				if (str_contains($datef, '/')) {
					$faan = preg_split('/\//', $datef);
				}elseif(str_contains($datef, '-')){
					$faan = preg_split('/-/', $datef);
				}
			}
			if (!empty($faan)) {
				$wahtu = '';
				$year = max($faan);
				foreach ($faan as $key => $value) {
					if ($key != count($faan) - 1 ) {
						$wahtu .= $value.'-';
					}else{
					$wahtu .= $value;	
					}
					
				}
				$stamp3 = strtotime($wahtu);
				$dat = date("Y-m-d",$stamp3);
				return $dat;
			}
	}
endif;