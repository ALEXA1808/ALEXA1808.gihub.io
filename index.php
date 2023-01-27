<?php

//ars = 3%
//afp = 2.87%
//itbis = 18%
//irs = si el sueldo es mayor a 40,000.00 se restara el sueldo por el limite y el resultado se multiplicara por 15%
//ej (45,000 - 40,000 = 5000 * 0.15 = 750.00 ese es el IRS);

if(isset($_POST['btn'])){
    $salario = $_POST['salario'];

    $ars = $salario * 0.03;
    $afp = $salario * 0.0287;
    $itbis = $salario * 0.18;
    $message_itbis = "";
    $irs;

    if($salario > 40000){
        $irs = ($salario - 40000) * 0.15;
        $message_itbis = "el impuesto sobre renta es de: ".$irs." ";
    }else{
        $message_itbis = "su sueldo no supera los 40000, exento del IRS";
    }

    $descuento = $salario - ($ars + $afp + $itbis + $irs);

    echo "<div class='cont_img'>
        <div>
        <span>".$message_itbis."</span>
        <span>los impuestos de ars son de: ".$ars." </span>
        <span>los impuestos de afp son de: ".$afp."</span>
        <span>los impuestos de ITBIS son de: ".$itbis."</span>
        <span>el total es de: ".$descuento." </span>
        </div>
    </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        transition: .3s ease all;   
        font-family: 'poppins', sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #f84c4c;
    }
    form{
        width: 30%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    form input{
        padding: 10px 20px;
        width: 100%;
        outline: none;
        border: none;
        border-radius: 4px;
    }
    form button{
        margin-left: 20px;
        padding: 10px 30px;
        background: #ab3030;
        color: #fff;
        border-radius: 4px;
        outline: none;
        border: none;
        cursor: pointer;
    }
    .cont_img{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .cont_img div{
        padding: 20px;
        border-radius: 5px;
        width: 30%;
        background: #fff;
        display: flex;
        flex-direction: column;
    }
</style>

<body>
    <form action="index.php" method="post">
        <input type="number" placeholder="ingrese su salario" name="salario">
        <button type="submit" name="btn">calcular</button>
    </form>
</body>
</html>
