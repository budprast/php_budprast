<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <form>
        <fieldset style="width:0px">
            <label for="baris">Inputkan Jumlah Baris:</label>
            <input type="text" name="baris" id="baris"><br><br>
            <label for="kolom">Inputkan Jumlah Kolom:</label>
            <input type="text" name="kolom" id="kolom"> <br><br>
            <button type="submit" name="submit"  value="submit">SUBMIT</button>
        </fieldset>
    </form>
    <?php 
        if (isset($_GET['submit'])) {
            $Jbaris = $_GET['baris'];
            $Jkolom = $_GET['kolom'];
        }
        $i=0;
        $j=0;
        while ($i<=$Jbaris){
            if ($j<=$Jkolom){
                echo "<tr>"."kolom"."</tr>";
            }
            echo "<td>"."baris". "</td>"; 
            $i++;
        }
    ?>
    <table></table>
</body>
</html>