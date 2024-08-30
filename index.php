<body>
    <h1>Temperature Converter</h1>

    <!-- HTTP post form to take number input -->
    <form method="post">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br><br>
        <label for="conversion">Convert to:</label>
        <select name="conversion" id="conversion">
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <!-- Submit form -->
        <input type="submit" value="Convert">
    </form>
    
    <!-- PHP script -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get values
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];
        $result = 0;

        // Echo to the page the conversion result - depending on if F or C is entered
        if ($conversion == "c_to_f") {
            $result = ($temperature * 9 / 5) + 32;
            echo "<h2>$temperature&deg;C is equal to $result&deg;F</h2>";
        } elseif ($conversion == "f_to_c") {
            $result = ($temperature - 32) * 5 / 9;
            echo "<h2>$temperature&deg;F is equal to $result&deg;C</h2>";
        }
    }
    ?>


</body>
