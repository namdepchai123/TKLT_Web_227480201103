<!DOCTYPE html>
<html>
<head>
    <title>Danh sách năm</title>
</head>
<body align='center' font size='100px'>
    <h2 align= 'center'><font face='aril' color='blue' >  Chọn năm</font></h2>
    <form method="post">
        <label for="year">Năm:</label>
        <select name="year" id="year">
            <?php
            $currentYear = date("Y"); // Lấy năm hiện tại
            for ($year = 1900; $year <= $currentYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <input type="submit" value="Chọn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedYear = $_POST["year"];
        echo "<p>Bạn đã chọn năm: <strong>$selectedYear</strong></p>";
    }
    ?>
</body>
</html>