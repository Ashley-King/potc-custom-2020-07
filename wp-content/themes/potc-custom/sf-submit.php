<?php
date_default_timezone_set('UTC');
$today = date("Y-m-d H:i:s"); 
$curl = curl_init();
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijk0OWJhYWU1N2E2NjcyN2YyNWVjYjE2NGExYTE5YzM4YmU3MjJiY2ZkYTlmYzA5ZDQyMWE3MzZmOWFlZjEwMGU5M2M3ZDJjYWQxYTI5NTYyIn0.eyJhdWQiOiI0IiwianRpIjoiOTQ5YmFhZTU3YTY2NzI3ZjI1ZWNiMTY0YTFhMTljMzhiZTcyMmJjZmRhOWZjMDlkNDIxYTczNmY5YWVmMTAwZTkzYzdkMmNhZDFhMjk1NjIiLCJpYXQiOjE1OTE1NzQwMzgsIm5iZiI6MTU5MTU3NDAzOCwiZXhwIjoxNjIzMTEwMDM4LCJzdWIiOiIxMDA1NCIsInNjb3BlcyI6W119.k0PJtzzkRTMfdMAV0i0-cl8y9MzWzSpX094-NFxljACsSOm8ymFFF-F8kWewp7nL7rVJcKLHbSn-NkalUPDC8tjeg1Omst9J6wczFGqNTiobFePiiloGM7GZZMGvU46ytyV5izYqDGClm6VFWdBbDPhSs5ozMd-EAYMIRKda96C759-lOmjffdE79kFaKzUkiUEDwWfYnuTXcyDAAzyRUvsJY8d3TzP_0GUDAlBolHzH9HqXEgrzcUic5vkWWIe2HJhYDECuitKqgvovu7yMm8t0dChr_YyovwFqfgnL6qeRlF6rU04yu6DWhI4GhQxAvKWdEW3vt1UlL3OVcHT1s-DuPpv2b4jbsnxmiaMvz3C1r9KuL9-b9noZpTI5fI9wE7RSHdyCnKJRGLJjrDfaEP0nMxnaae_IWtjlTHUov_YqQG9J3kd5u0UkNHm-mw4KniMYX4R2vaoK7lopPDPnrB2mVm7kuA3GzVUElUJ065zB6CsEQxgwXMrqHsGE95huDvgLXIzzp9EqaCvHi3j5sGCL2K-jqs_4u2vqliItlnBg7PLVUHxicASCUKR0Sx4mndHxSBvL8OgNnlYH--EEAgcOJhV4-AtoZTUsJex133tHXIPcA3qARuDvTo9RRmhg9b2zSSNVHkYbjFO_EqrbvcMjut7VI7MsqE2eK3AES7g";
$auth = "Authorization: Bearer ". $token;
$list = '';
//if there isn't a list passed, use main list
if($_POST['list']){
    $list = array($_POST['list']);
}else{
    $list = array('17065');
}
    $subscriber = array(
        'email' => $_POST['email'],
        'first_name' => $_POST['first_name'],
        // 'signup_ip' => $_SERVER['REMOTE_ADDR'],
        // 'signup_timestamp' => $today,
        // 'type' => 'unconfirmed',
        // 'fields' => array()
        'lists'=> $list
    );
      $subscriber = json_encode($subscriber);
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.sendfox.com/contacts",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $subscriber,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/json",
        $auth,
        
      ),
    ));

    
        // Verified - send email
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
   





if ($err) {
   echo "cURL Error #:" . $err;
  
} else {
    echo $response;

  
}
?>