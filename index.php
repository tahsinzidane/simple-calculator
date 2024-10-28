<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <!-- Tab icon -->
    <link href="imgs/calculator.png" rel="icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .result {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .inputs, .footer {
            margin-top: 20px;
        }
        .inputs input[type="number"] {
            width: 40%;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .inputs select, .inputs input[type="submit"] {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
            background-color: white; /* Set the background of select to white */
        }
        .footer img {
            width: 32px;
            height: 32px;
            margin: 5px;
        }

        .inputs select {
            appearance: none; /* Remove default browser styles */
        }

        option {
            color: black; /* Set icon color to black */
            background: white; /* Set the option field background to white */
        }

        .inputs select option {
            padding: 10px;
        }

        /* Hide the icon tags in the dropdown since icons inside option tags are not rendered in most browsers */
        .inputs select option i {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Simple Calculator</h2>
        
        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['num1'] ?? null;
                    $num2 = $_POST['num2'] ?? null;
                    $operation = $_POST['operation'] ?? '';

                    if (is_numeric($num1) && is_numeric($num2)) {
                        switch ($operation) {
                            case 'add':
                                echo "Result: " . ($num1 + $num2);
                                break;
                            case 'subtract':
                                echo "Result: " . ($num1 - $num2);
                                break;
                            case 'multiply':
                                echo "Result: " . ($num1 * $num2);
                                break;
                            case 'divide':
                                if ($num2 != 0) {
                                    echo "Result: " . ($num1 / $num2);
                                } else {
                                    echo "Cannot divide by zero!";
                                }
                                break;
                            default:
                                echo "Please select a valid operation.";
                        }
                    } else {
                        echo "Please enter valid numbers.";
                    }
                }
            ?>
        </div>

        <form method="post" action="#">
            <div class="inputs">
                <input type="number" name="num1" placeholder="First Number" required>
                <select name="operation" required>
                    <option value="">Select Operation</option>
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">×</option>
                    <option value="divide">÷</option>
                </select>
                <input type="number" name="num2" placeholder="Second Number" required>
                <input type="submit" value="Calculate">
            </div>
        </form>

        <div class="footer" style="text-align: center;">
                <a href="https://github.com/tahsinzidane">auther tahsin zidane</a>
        </div>
    </div>
</body>
</html>
