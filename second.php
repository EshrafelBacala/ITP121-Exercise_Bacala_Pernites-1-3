<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculation and Student Names</title>
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Factorial Calculation and Student Names</h2>

        <?php
   
        function factorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        $inputNumber = 5;
        $result = factorial($inputNumber);
        echo "<p>Factorial of $inputNumber is: $result</p>";

        $studentNames = ["Alice", "Bob", "Charlie", "David", "Eva"];

        
        echo "<h3>Student Names:</h3>";
        foreach ($studentNames as $name) {
            echo "<p>$name</p>";
        }
        ?>
    </div>
</body>

</html>
