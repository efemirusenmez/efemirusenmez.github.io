
<?php
include('database/dbconnect.php');
?>

<?php
$q = $conn->prepare("SELECT * FROM iletisim ORDER BY ID ASC");
$q->execute();
$r = $q->fetchAll(PDO::FETCH_ASSOC);
if($r){
    echo'<table border="1" bgcolor="#A6FFCD">';
    foreach ($r as $sonuc){
        echo '<tr>';
        echo '<td>';
        echo $sonuc['name'];
        echo '</td>';
        echo '<td>';    
        echo $sonuc['surname'];
        echo '</td>';
        echo '<td>';
        echo $sonuc['username'];
        echo '</td>';
        echo '<td>';
        echo $sonuc['email'];
        echo '</td>';
        echo '<td>';
        echo $sonuc['cins'];
        echo '</td>';
        echo '</tr>';
        
    }
    echo'</table>';
}
else{
    echo 'sonuc yok';
}
?>
