<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types and Age Classification</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        text-align: center;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Types and Age Classification</h2>
        <?php
            
            $stringVar = "Hello";
            $integerVar = 10;
            $floatVar = 5.5;
            $booleanVar = true;

            $result = $integerVar * $floatVar;

            

           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userAge = $_POST['age'];
                if ($userAge < 18) {
                    echo "<p>You are a minor.</p>";
                } elseif ($userAge >= 18 && $userAge < 60) {
                    echo "<p>You are an adult.</p>";
                } else {
                    echo "<p>You are a senior citizen.</p>";
                }
            }
        ?>
        <form method="post">
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
