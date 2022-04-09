<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <title>Document</title>
</head>

<body>
    <form id="newsletter" action="validate.php" method="POST">
        <input type="text" name="email">
        <input type="submit" name="submit" value="Submit">
        <div class="g-recaptcha" data-sitekey="6LcqdVsfAAAAAFMS9pTEGm37y_qfYBs9nhyM0W3S"></div>
    </form>
</body>
<script>
    $("form#newsletter").on('submit', (e) => {
        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            event.preventDefault();
            alert("Check captcha");
        }
    })
</script>

</html>