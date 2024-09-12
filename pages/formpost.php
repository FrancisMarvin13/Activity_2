<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout responsive structure</title>
    <link rel="stylesheet" href="../css/Customstyle.css">
    <style>
        .form1{
            float: left;
        }
        .form2{
            float: right;
            padding-right: 50px;
        }
    </style>
</head>
<body>
    <header>
        <img id="image" src="../img/MSU.png" alt="">  
        <div>
            <h1>College of Information and Computing Sciences</h1>
            <h2>Bachelor of Science in Information System</h2>
        </div>
        <div class="container">
            <a href="../index.html">HOME</a> |
            <a href="about.html">ABOUT</a> |
            <a href="contactus.html">CONTACT US</a> |
            <a href="inquiry.html">ADMISSION</a> |
            <a href="profile.html">PROFILE</a> 
            <button id="home_btn"><a href="login.html">LOG IN</a></button>

    </header>
    <section>
        <nav>
            <ul>
                <li>
                    <br><a href="head.html">Headings</a><br><br>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="tables.html">Tables</a><br><br>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="list.html">HTML List</a><br><br>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="form.html">Programs</a><br><br>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="image.html">Image</a><br><br>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="logout.html">Forms</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="formpost.html">Form Post Method</a>
                </li>
            </ul>
        </nav>
        <article>
        <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $fullname = htmlspecialchars($_POST['name']);
                    $yourage = htmlspecialchars($_POST['age']);
                    $month = htmlspecialchars($_POST['dataMonth']);
                    $week = htmlspecialchars($_POST['dataWeek']);
                    $time = htmlspecialchars($_POST['dataTime']);

                    echo "<h2>Your Name is: " . $fullname . "</h2>";
                    echo "<h2>Your Age is: " . $yourage . "</h2>";
                    echo "<h2>Selected Month: " . $month . "</h2>";
                    echo "<h2>Selected Week: " . $week . "</h2>";
                    echo "<h2>Selected Time: " . $time . "</h2>";
                }
            ?>
            <h1><br><b><u>Form Post Method</u></b></h1>
            
        </article>
        <footer>
            <br><br><hr>
            <h1>Marinduque State University</h1>
            <div>
                
                <a href="refund.html"> Refund policy</a> |
                <a href="term.html"> Term of Use</a> |
                <a href="private.html"> Private policy</a> |
                <a href="faq.html"> News</a> |
                <a href="affliate.html"> Affiliate</a> 
                
            </div>
            <div>
                <p>
                    <h4>Copright A TUTORIAL POINTS (MARINDUE)
                    PRIVATE LIMITED.ALL RIGHT Reserved</h4>
                </p>
            </div>
        </footer>
    </section>
    
</body>
</html>