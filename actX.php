<?php
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    if ( array_key_exists('v', $_GET) ) {
      if ( trim($_GET['v'] ) == "10321") {        
        echo '{"version":"10321","url":"bit.ly/1oJQevX","beta":"10","beta2":"10","beta3":"10","betaurl":"bit.ly/1oJQevX","updateUrl":"http://download.ygopro.co/private/10332b.exe","updateFile":"10332b.exe","allowCommand":"1","allowStrip":"0","dd":"0","servers":[{"roomport":"7922","port":"7911","name":"Data DM","address":"18.232.187.138","roomaddress":"18.232.187.138","Data":"1"}]}';
      }
    }
  }
?>