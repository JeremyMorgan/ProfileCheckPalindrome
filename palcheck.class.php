<?php

class palcheck {


		private $timestart;
		private $timeend;
		public $timecollection = array();


		private function getTime(){

			array_push($this->timecollection, round(($this->timeend - $this->timestart) * 1000, 6));

		}
		public function clearTimes(){

			unset($this->timecollection);
			$this->timecollection = array();
		}

		public function startTimer(){

			$this->timestart = microtime(true);
		}

		public function endTimer(){

			$this->timeend = microtime(true);
			$this->getTime();		
		}

		public function getAvgTime(){

			return (array_sum($this->timecollection) / count($this->timecollection));
		}

		function isPalindrome1($inputstring)
		{
		    if (strlen($inputstring) <= 1){
		        // if there is only one or zero characters, technically it's a palindrome
		        return true;
		    }
		    else {

		        if (substr($inputstring,0,1) == substr($inputstring,(strlen($inputstring) - 1),1)) {

		             return isPalindrome1(substr($inputstring,1,strlen($inputstring) -2));
		            
		            }
		            else { 
		            
		                return false; 
		            
		            }
		     }
		}

		public function isPalindrome2($inputstring){

			if ($inputstring == strrev($inputstring)){
				return true;
			}else {
				return false;
			}
	    }

}