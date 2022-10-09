<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web Programcılığı Ödev 2</title>
    <style>
        body{
            background-color: floralwhite;
        }
        header{
            font-family:fantasy;
            font-size: 18pt;
            color: black;
            margin: auto;
            width: max-content;
        }
        .container{
            padding: 10px;
            background-color:indianred;
            margin: auto;
            width: max-content;
            border-radius: 5px;
        }
        input, select{
            border: 1px solid transparent;
            padding: 8px 18px;
            border-radius: 2px;
            background-color:azure;
            font-family:fantasy;
            font-size: 12pt;
        }
        #hesapla{
            background-color: #6f1333;
            color: linen; 
            font-size: 12pt;
            border-radius: 5px; 
            border: 2px solid black; 
        }
        .sonuc{
            font-family: fantasy;
            font-size: 16pt; 
            font-weight: normal; 
            background-color: #6f1333; 
            color:linen; 
            width: max-content; 
            padding: 1px 15px; 
            margin: 20px auto; 
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>Hesap Makinesi</header><hr>
    <div class="container">
    <form method="post" action="">
    <input type="number" name="deger1" required>
        <select name="islem">
        <option value="topla">Topla</option>
        <option value="cik">Çıkar</option>
        <option value="carp">Çarp</option>
        <option value="bol">Böl</option>
        </select>
        <input type="number" name="deger2" required>
        <input type="submit" value="Hesapla" id="hesapla"/>
        </form>
    </div>
<?php
if(isset($_POST['islem'])){
    $islem = $_POST['islem'];
    $deger1 = $_POST['deger1'];
    $deger2 = $_POST['deger2'];

    if($islem=="topla"){
            echo '<div class="sonuc">'.'Sonuç: '.($deger1+$deger2).'</div>';
        }
        else if($islem=="cik"){
            echo '<div class="sonuc">'.'Sonuç: '.($deger1-$deger2).'</div>';
        }
        else if($islem=="carp"){
            echo '<div class="sonuc">'.'Sonuç: '.($deger1*$deger2).'</div>';
        }
        else if($islem=="bol"){
            echo '<div class="sonuc">'.'Sonuç: '.($deger1/$deger2).'</div>';
        }
    }
?>
</body>
</html>