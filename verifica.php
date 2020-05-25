<?php
$conn = mysqli_connect('localhost','teste','teste102030','teste') or die ('erro de conexao');
$query = "select * from users where user = '$_POST[user]' and password = '$_POST[pass]'";
$res = mysqli_query($conn, $query);
echo $query;
echo "<br><br>";

if ($res and mysqli_num_rows($res) != 0) {
        while($row = mysqli_fetch_assoc($res)) {
                echo "usuario encontrado";
                print_r($row);
        }
} else if (!$res) {
        echo 'erro';
} else if (mysqli_num_rows($res) == 0) {
        echo 'usuario ou senha nao encontrado';

}

?>
