<form action="" method="post">
    <table>
    <tr>
         Nama : <input type="text" name="name" >
    </tr>
        <tr>
            <td>Sematkan Komentar :</td>
        </tr>
        <tr>
            <td><textarea name="komentar" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="kirim"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $komentar = $_POST['komentar'];

        $count =strlen($komentar);

        if($count < 5){
            echo "komentar  harus lebih dari 5 ";
        } else{
            echo "jumlah kata :".$count;
        }
    }
?>
