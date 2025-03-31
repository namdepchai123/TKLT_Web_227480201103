<!DOCTYPE html>
<html>
<head>
    <title>Tính USCLN và BSCNN</title>
</head>
<body align=center>
    <h2>Tính USCLN và BSCNN</h2>
    <form method="post">
        Số thứ nhất: <input type="number" name="num1" required><br><br>
        Số thứ hai: <input type="number" name="num2" required><br><br>
        <input type="submit" name="uscln" value="USCLN">
        <input type="submit" name="bscnn" value="BSCNN">
    </form>

    <?php
    // Hàm tính USCLN (GCD) bằng thuật toán Euclid
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Hàm tính BSCNN (LCM) dựa vào công thức: (a * b) / USCLN(a, b)
    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);

        if (isset($_POST["uscln"])) {
            echo "<p>Ước số chung lớn nhất của $num1 và $num2 là: " . uscln($num1, $num2) . "</p>";
        }

        if (isset($_POST["bscnn"])) {
            echo "<p>Bội số chung nhỏ nhất của $num1 và $num2 là: " . bscnn($num1, $num2) . "</p>";
        }
    }
    ?>
</body>
</html>