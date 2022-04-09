<?PHP 
    error_reporting(0);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $captcha;
    $json;
    
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
    }

    if (!$captcha) {
        $json->msg="error";
    }

    $secretKey = "== secret ==";
        
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);
    
    if ($responseKeys["success"]) {
        include("ret.php");
    } else {
        echo json_encode($json);
    }