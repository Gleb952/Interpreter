<?php 

$par1_ip = "127.0.0.1";
$par2_name = "root";
$par3_p = "";
$par4_db = "translator";


$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

if ($induction == false)
{
echo 'Ошибка подключения!';

}



/*     $result = mysqli_query($induction, "SELECT * FROM `interpreter`");

    if($result){
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<p>Получено объектов: $rowsCount</p>";
        echo "<table><tr><th>Id</th><th>ENG</th><th>RUS</th></tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["ENG"] . "</td>";
                echo "<td>" . $row["RUS"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
    
    

    $ENG = mysqli_query($induction, "SELECT ENG FROM `interpreter`"); */
?>