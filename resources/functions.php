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

function last_id($result)
{
  global $connection;
  return mysqli_insert_id($connection);
}

function query($sql) {
  global $connection;
  return mysqli_query($connection, $sql);
}

function confirm($result) {
  global $connection;
  if(!$result) {
    die("QUERY FAILED". mysqli_error($connection));
  }
}

function escape_string($string) {
  global $connection;
  return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {
  return mysqli_fetch_array($result);
}

function num_rows($result) {
  return mysqli_num_rows($result);
}

function get_page() {
  if (isset($_GET['page'])) { 
    $page = $_GET['page'];
    $filename = "resources/pages/".$page.".php";
    if (file_exists($filename)) {
      include $filename;
    }
  } else {
    include("resources/pages/dashboard.php");
  }
}

function get_active_class($page) {
  $current = (isset($_GET['page'])) ? $_GET['page'] : "" ;
  echo ($page == $current) ? "active" : "" ;
  echo ($page == "dashboard" && $current == "") ? "active" : "" ;
}

function check_email_availbilty($email,$table) 
  {
    $query = query("SELECT email FROM {$table} WHERE email = '{$email}'");
    confirm($query);
    $count = num_rows($query);
    return ($count == 0) ? true : false ;
  }

  function show_simple($alert)
  {
    echo "<script>$(document).ready(function(){".$alert."();});</script>";
  }

function show_args_alert($alert,$args)
  {
    echo "<script>$(document).ready(function(){".$alert."('".$args."');});</script>";
  }

  function send_email($to,$subject,$message) {
    if (SendEmail) {
      if (mail($to,$subject,$message,genrate_headers())) {
      return true;
      } else {
      return false;
      }
    }
  }

  function genrate_headers() {
    $headers = "";
    $headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    $headers .= 'From:<'.$support_email.'>' . "\r\n";
    return $headers;
  }

  function redirect($path){
    header("Location: $path");
  }

  function extract_vars($array)
  {
    $count = count($array);
    foreach ($array as $name => $value) {
      $array[$name] = escape_string($value);
    }
    return $array;
  }

  function admin_login()
  {
    if (isset($_POST['login'])) {
      $vars = extract_vars($_POST);
      extract($vars);
      $query = query("SELECT * FROM users");
      confirm($query);
      $count = num_rows($query);
      if ($count == 1) {
        $data = fetch_array($query);
        extract($data);
        $_SESSION['admin_login'] = $id;
      }
    }
  }

  function validate_login($type)
  {
    if ($type == 1) {
      if (isset($_SESSION['admin_login'])) {
        redirect("index.php");
      }
    }
    if ($type == 0) {
      if (!isset($_SESSION['admin_login'])) {
        redirect("login.php");
      }
    }
  }