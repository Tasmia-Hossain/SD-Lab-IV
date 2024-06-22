<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["number"]) && is_numeric($_POST["number"])) { 
        $number = $_POST["number"];
        
        function isPrime($n) {
            if ($n <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        
        $isPrime = isPrime($number);
        
        if ($isPrime) {
            $result = "$number is a prime number";
        } else {
            $result = "$number is not a prime number";
        }
    } else {
        $result = "Invalid input. Please go back and insert a valid number";
    }
} else {
    header("Location: profile.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Checker Result</title>
    <link rel="stylesheet" href="./profile.css"/>
</head>
<body>
    <div class="container">
        <div class="header"></div>
        <div class="propic">
            <img src="propic.jpeg" alt="Profile Picture">
        </div>
        <div class="name">Tasmia Hossain</div>
        <div class="result">
            <p><?php echo $result; ?></p>
                <form action="profile.html">
                    <input type="submit" class="goback" value="Go Back">
                </form>       
        </div>
    </div>
</body>
</html>
