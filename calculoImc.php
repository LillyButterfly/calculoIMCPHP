<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Calculo IMC</title>
</head>
<body class="bg-info">
    <?php 
    
    function calculoImc($peso, $altura) {
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        return $peso/pow($altura,2);
         
        }
        $imc= calculoImc('peso', 'altura');
        $imc = number_format($imc, 2, '.', '');

    echo "<h1 class='text-center'>Resultado</h1>";

    $valorMassa = [
        [
            'min' => 00,
            'max' => 18.5,
	 'leia'  => 'Magreza'
	],
	[
	'min' => 18.51,
	'max' => 24.9,
	 'leia' => 'Saudável'
	],
	[
	'min' => 25.0,
	'max' => 29.9,
	 'leia' => 'Sobrepeso'
	],
	[
	'min' => 30.0, 
	'max' => 34.9,
	 'leia' => 'Obesidade Grau I'
	],
	[
	'min' => 35.0,
	'max' => 39.9,
	 'leia' => 'Obesidade Grau II'
	],
	[ 
	'max' => 39.9,
		'leia' => 'Obesidade Grau III'
	],
    ];

    for($i = 0; $i < sizeof($valorMassa); $i++){

        if($imc >= $valorMassa[$i]['max']){
            $leia = $valorMassa[$i]['leia'];

        } else if ($imc >= $valorMassa[$i]['min'] && $imc <= $valorMassa[$i]['max']) {
            $leia = $valorMassa[$i]['leia'];
            break;

        } else if ($imc <= $valorMassa[$i]['max']){
            $msg = $valorMassa[$i]['leia'];
            break;	
        }
    };


    echo "<h3 class='text-center'>O seu IMC é:  $imc e está classificado como: $leia.</h3>";

    echo "<h3 class='text-center'>\n<a href='index.html'>Voltar</a></h3>";
    ?>


</body>
</html>