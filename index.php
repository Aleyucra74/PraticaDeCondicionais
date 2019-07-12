<?php
    $visitante = [
        'nome' => 'Nika',
        'idade' => 25,
        'sexo' => 'F',
    ];

    $produtos_f = [
        'Vestido Ana rosa - vermelho',
        'Absorvente',
        'Sutiã',
        'Baton'
    ];

    $produtos_m = [
        'Creme de barbear',
        'Gravata',
        'Machado',
        'Caixa de ferramentas'
    ];

    $num1 = mt_rand(0,3);
    $num2 = mt_rand(0,3);

    if($visitante['sexo']=='m') {
        $sugestoes = [
            $produtos_m[$num1],
            $produtos_m[$num2]
        ];
    }else {
        $sugestoes = [
            $produtos_f[$num1],
            $produtos_f[$num2]
        ];
    }

    $hora = 33;
    if($hora>=6 && $hora <12) {
        $periodo = "MANHA";
    }elseif ($hora >=12 && $hora < 18) {
        $periodo = "TARDE";
    }else {
        $periodo = "NOITE";
    }

    switch ($periodo) {
        case 'MANHA':
            $cordefundo = "Aqua";
            break;

        case 'TARDE':
            $cordefunfo = "Yellow";
            break;

        case 'NOITE':
            $cordefundo = "Black";
            break;

        default:
            $cordefundo = "White";
            break;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: <?php echo $cordefundo ?>;
        }
    </style>
</head>
<body>
    <h2>Bem vind<?= $visitante['sexo']=='m'? 'o' : 'a'; ?>, <?php echo $visitante['nome']; ?></h2>

    <p>
        Sugerimos para você <?= $sugestoes[0] .' E ' . $sugestoes[1]; ?>
    </p>

</body>
</html>