<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script data-require="jquery@2.2.4" data-semver="2.2.4" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
</head>
<script>
$(document).ready(function() {
    var pass = prompt("請輸入密碼", "");
    pass = CryptoJS.MD5(pass).toString();
    if (pass == '202cb962ac59075b964b07152d234b70') {
        alert("Welcome, redirect to your page");
        document.location = 'result.php';
    } else {
        alert("Sorry, this page is under construction");
        document.location = 'https://www.google.com.tw/';
    }
});
</script>
</body>
</html>
