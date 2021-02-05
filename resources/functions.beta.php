<?php
//...........................................................................
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPP...PEEEEEEEEEE.ERRRRRRRRR....
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPP..PEEEEEEEEEE.ERRRRRRRRRR...
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPPP.PEEEEEEEEEE.ERRRRRRRRRR...
//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..
//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPPP.PEEEEEEEEE..ERRRRRRRRRR...
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPP..PEEEEEEEEE..ERRRRRRRRRR...
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPP...PEEEEEEEEE..ERRRRRRR......
//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR.RRRR.....
//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR..RRRR....
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR..RRRRR...
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR...RRRRR..
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR....RRRR..
//...........................................................................
//-----------------------------------------
//=======  Helper Functions  ==============
//-----------------------------------------
//=======    DB Functions    ==============
//-----------------------------------------
class DB {
  //  Get ID of last entered
  public function last_id() {
    global $connection;
    return mysqli_insert_id($connection);
  }
  //  Run Query
  public function run($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
  }
  //  Confirm Query
  public function confirm($result) {
    global $connection;
    if(!$result) {
      die("QUERY FAILED". mysqli_error($connection));
    }
  }
  //  Filter Query String
  public function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
  }
  //  Return Data
  public function data($result) {
    return mysqli_fetch_array($result);
  }
  //  Count Rows
  public function rows($result) {
    return mysqli_num_rows($result);
  }

}
//-----------------------------------------
//=======    GET Functions    ==============
//-----------------------------------------
class Get {
  // Get Dynamic Pages
  public function page() {
    if (isset($_GET['page'])) { 
      $page = $_GET['page'];
      $filename = "pages/".$page.".php";
      if (file_exists($filename)) {
        include $filename;
      }
    } else {
      include("pages/dashboard.php");
    }
  }
  // Detect Active Class form Page
  public function active_class($page) {
    $current = (isset($_GET['page'])) ? $_GET['page'] : "" ;
    echo ($page == $current) ? "active" : "" ;
    echo ($page == "dashboard" && $current == "") ? "active" : "" ;
  }
}
//-----------------------------------------
//=======  Check Functions   ==============
//-----------------------------------------
class Check {
  // Check if email available
  public function email_availbilty($email,$table) 
  {
    $query = query("SELECT email FROM {$table} WHERE email = '{$email}'");
    confirm($query);
    $count = num_rows($query);
    return ($count == 0) ? true : false ;
  }
}
//-----------------------------------------
//=======  Alert Functions   ==============
//-----------------------------------------
class Alert {
  // Show simple alert
  public function show_simple($alert)
  {
    echo "<script>$(document).ready(function(){".$alert."();});</script>";
  }
  // Show alert with parameter
  public function show_args_alert($alert,$args)
  {
    echo "<script>$(document).ready(function(){".$alert."('".$args."');});</script>";
  }
}
//-----------------------------------------
//=======     Validation     ==============
//-----------------------------------------
class Validate {

}
//-----------------------------------------
//======= Genrate Functions  ==============
//-----------------------------------------
class Genrate {

}
//-----------------------------------------
//=======  Upload Functions  ==============
//-----------------------------------------
class Upload {

}
//-----------------------------------------
//=======   Mail Functions   ==============
//-----------------------------------------
class Mail {
  // Send Email
  public function send($to,$subject,$message) {
    if (SendEmail) {
      if (mail($to,$subject,$message,Mail::headers())) {
      return true;
      } else {
      return false;
      }
    }
  }
  // Genrate Header for Email
  public function headers() {
    $headers = "";
    $headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    $headers .= 'From:<'.$support_email.'>' . "\r\n";
    return $headers;
  }
}
//-----------------------------------------
//======= Redirect Functions ==============
//-----------------------------------------
class Redirect {

  public function to_path($path){
    header("Location: $path");
  }

}
//=======      EndHelper     ==============
//................................................................................
//......AAAAAAA......DDDDDDDDDDDDD.....MMMMMMM....MMMMMMM..IIIII..NNNNN.....NNNN..
//......AAAAAAA......DDDDDDDDDDDDDD....MMMMMMM....MMMMMMM..IIIII..NNNNNN....NNNN..
//.....AAAAAAAA......DDDDDDDDDDDDDDD...MMMMMMM....MMMMMMM..IIIII..NNNNNN....NNNN..
//.....AAAAAAAAA.....DDDDD...DDDDDDD...MMMMMMM...MMMMMMMM..IIIII..NNNNNNN...NNNN..
//.....AAAAAAAAA.....DDDDD.....DDDDDD..MMMMMMMM..MMMMMMMM..IIIII..NNNNNNN...NNNN..
//....AAAAAAAAAAA....DDDDD......DDDDD..MMMMMMMM..MMMMMMMM..IIIII..NNNNNNNN..NNNN..
//....AAAAA.AAAAA....DDDDD......DDDDD..MMMMMMMM.MMMMMMMMM..IIIII..NNNNNNNNN.NNNN..
//...AAAAAA.AAAAA....DDDDD......DDDDD..MMMMMMMMMMMMMMMMMM..IIIII..NNNNNNNNN.NNNN..
//...AAAAA..AAAAAA...DDDDD......DDDDD..MMMMMMMMMMMMMMMMMM..IIIII..NNNNNNNNNNNNNN..
//...AAAAA...AAAAA...DDDDD......DDDDD..MMMMMMMMMMMMMMMMMM..IIIII..NNNN.NNNNNNNNN..
//..AAAAAAAAAAAAAA...DDDDD......DDDDD..MMMMMMMMMMMMMMMMMM..IIIII..NNNN.NNNNNNNNN..
//..AAAAAAAAAAAAAAA..DDDDD......DDDDD..MMMMMMMMMMMMMMMMMM..IIIII..NNNN..NNNNNNNN..
//..AAAAAAAAAAAAAAA..DDDDD.....DDDDDD..MMMMMMMMMMMM.MMMMM..IIIII..NNNN..NNNNNNNN..
//.AAAAAA.....AAAAAA.DDDDD...DDDDDDD...MMMMM.MMMMMM.MMMMM..IIIII..NNNN...NNNNNNN..
//.AAAAA......AAAAAA.DDDDDDDDDDDDDDD...MMMMM.MMMMMM.MMMMM..IIIII..NNNN....NNNNNN..
//.AAAAA.......AAAAA.DDDDDDDDDDDDDD....MMMMM.MMMMMM.MMMMM..IIIII..NNNN....NNNNNN..
//.AAAAA.......AAAAAADDDDDDDDDDDDD.....MMMM..MMMMM..MMMMM..IIIII..NNNN.....NNNNN..
//................................................................................
//-----------------------------------------
//=======  ADMIN Functions   ==============
//-----------------------------------------
class Admin {
  public function login()
  {
    if (isset($_POST['login'])) {
      $vars = extract_vars($_POST);
      extract()
      echo $username;
      die();
      $query = DB::run("SELECT * FROM users");
      DB::confirm($query);
      $count = DB::rows($query);
      if ($count == 1) {
        $data = DB::data($query);
        extract($data);
        $_SESSION['admin_login'] = $id;
      }
    }
  }

  public function validate_login($type)
  {
    if ($type == 1) {
      if (isset($_SESSION['admin_login'])) {
        Redirect::to_path("index.php");
      }
    }
    if ($type == 0) {
      if (!isset($_SESSION['admin_login'])) {
        Redirect::to_path("login.php");
      }
    }
  }
}

function extract_vars($array)
{
  $count = count($array);
  foreach ($array as $name => $value) {
    $array[$name] = DB::escape_string($value);
  }
  return $array;
}