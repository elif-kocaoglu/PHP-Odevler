<html>
<head>
    <meta charset="UTF-8">
    <title>Toplama Ödevi</title>
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
        #buton{
            background-color: #6f1333;
            color: linen; 
            font-size: 16pt;
            border-radius: 5px; 
            height: 50px; 
            border: 2px solid black; 
        }
        #buton:hover{
            background-color: #000000;
            color: #fff;
        }
        input{
            border: 1px solid transparent;
            padding: 8px 18px;
            border-radius: 2px;
            background-color:azure;
            font-family:fantasy;
            font-size: 16pt;
        }
        #cikti{
            font-family: fantasy;
            font-size: 16pt; 
            font-weight: normal;
            background-color: #6f1333; 
            color:linen; 
            width: max-content;
            padding: 10px 150px;
            margin: 20px auto; 
            border-radius: 10px;
        }
        .arti{ 
            display: inline;
            font-size: 24pt;
        }
    </style>
</head>
<body>
    <hr>
    <header>Sayı Topla</header>
    <hr>
    <div class="container">
        <form method="post" action="">
                <input type="number" name="input_1" required>
                <div class="arti">+</div>
                <input type="text" name="input_2" required>
            <input type="submit" value="Topla" id="buton"/>
        </form>
    </div>
    <hr>
    <?php
        if(isset($_POST['input_1'])){
            $inpt_1 = $_POST['input_1'];
            $inpt_2 = $_POST['input_2'];
            echo '<h1 id="cikti">'.'Sonuç: '.($inpt_1+$inpt_2).'</h1>'; 
        }    
    ?>
</body>
</html>