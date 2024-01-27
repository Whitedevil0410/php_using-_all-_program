<!DOCTYPE html>
<html>
<head>
    <title>pr_6.3</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA(216090307029)</h2>
    <h2>===========================</h2>
    <?php
        // Generate a random number between 10 and 20
        $random_number = rand(10, 20);
        echo "Random number: $random_number<br><br><br>";

        // Convert decimal 255 to binary, octal, and hexadecimal
        $decimal = 225;
        $binary = decbin($decimal);
        $octal = decoct($decimal);
        $hexa = dechex($decimal);

        echo "Decimal number: $decimal<br>";
        echo "Binary number: $binary<br>";
        echo "Octal number: $octal<br>";
        echo "Hexadecimal number: $hexa<br><br><br>";

        // Calculate the sin, cos, and tan of 45 degrees
        $angle = 45;
        $sin = sin(deg2rad($angle));
        $cos = cos(deg2rad($angle));
        $tan = tan(deg2rad($angle));

        echo "Angle: $angle degrees<br>";
        echo "Sine value: $sin<br>";
        echo "Cosine value: $cos<br>";
        echo "Tangent value: $tan<br>";

    ?>
</body>
</html>
