<!DOCTYPE html>
<html>
<head>
    <title>pr_6.1</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>priyansh masiyava (216090307029)</h2>
    <h2>===========================</h2>

    <?php
        function calculate($amount) {
            $notes = array(100, 50, 20, 10, 5, 2, 1);
            $num_notes = array();
        
            foreach ($notes as $note) {
                $num_notes[$note] = intval($amount / $note);
                $amount -= $num_notes[$note] * $note;
            }
            return $num_notes;
        }

        $amount = 987;
        echo "Given amount : $amount<br><br><br>";
        $notes = Calculate($amount);
        foreach ($notes as $note => $num) {
            echo "Number of Rs. $note notes required: $num<br>";
        }
    ?>
</body>
</html>
