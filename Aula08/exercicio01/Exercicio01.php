<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro Exercicio</title>
</head>

<body>
<p>
    1. IMPORTAÇÃO. Crie um formulário com um textoarea para inserir o conteúdo do arquivo texto em anexo
    (DADOS.TXT).<br/>
    Receba os dados do arquivo texto no PHP e mostre as informações a seguir:<br/>

    a. O total de pacientes atendidos?<br/>
    b. A quantidade de transações realizadas no Hospital CEMIL?<br/>
    c. O valor total das transações que estão com o status “Pago”?<br/>
    d. O valor total das transações que estão com o status “Pendente”?<br/>
    e. O valor total das transações realizadas na cidade de “Umuarama”?<br/>
    f. O valor total das transações realizadas em cada estado?<br/>

    Os dados do arquivo referem-se, respectivamente:<br/>
    ID ; Hospital ; Paciente ; Idade ; Cidade ; Estado ; Procedimento ; Valor ; Status<br/>
</p>
<br/><br/><br/>
<form method="POST">
        <textarea name="texto" id="texto" rows="15" cols="50">
            1;CEMIL;Neymar Junior;25;Umuarama;PR;Cirurgia;3320,90;Pago#
            2;Norospar;Silvio Santos;70;Maringa;PR;Cirurgia;5730,30;Pendente#
            3;Uopecan;Gisele Bundchen;36;Campo Grande;MS;Consultamedica;200,00;Pago#
            4;Norospar;Luciano Huck;49;Umuarama;PR;Fisioterapia;150,00;Pendente#
            5;CEMIL;Luan Santana;30;Campo Grande;MS;Consulta medica;200,00;Pago#
            6;Uopecan;Danilo Gentili;37;Sao Paulo;SP;Cirurgia;7200,00;Pago#
            7;Norospar;Cristiano Ronaldo;35;Europa;EXT;Cirurgia;14000,00;Pago#
        </textarea>
    <br/>
    <input name="botao" type="submit" value="Enviar">
</form>
<br/>
</body>
</html>

<?php
if (!empty($_POST)) {
    if (isset($_POST['botao'])) {
        $texto = $_POST['texto'];
        $linhas = explode("#", $texto);

        $totalPacientes = 0;
        $qtdCemil = 0;
        $valorPago = 0.0;
        $valorPendente = 0.0;
        $valorUmuarama = 0.0;
        $valorPR = 0.0;
        $valorMS = 0.0;
        $valorSP = 0.0;
        $valorEXT = 0.0;

        foreach ($linhas as $posicao => $valor) {

            if (isset($colunas[0])) {
                $totalPacientes++;
            }

            $colunas = explode(";", $valor);

            if ($colunas[1] == 'CEMIL') {
                $qtdCemil++;
            }

            if ($colunas[8] == 'Pago') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorPago += $valor;
            }

            if ($colunas[8] == 'Pendente') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorPendente += $valor;
            }

            if ($colunas[5] == 'PR') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorPR += $valor;
            }

            if ($colunas[5] == 'MS') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorMS += $valor;
            }

            if ($colunas[5] == 'SP') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorSP += $valor;
            }

            if ($colunas[5] == 'EXT') {
                $valor = str_replace(array('.', ','), array('', '.'), $colunas[7]);
                $valorEXT += $valor;
            }
        }

        echo "TOTAL DE PACIENTES ATENDIDOS: " . $totalPacientes . "<br/>";
        echo " A quantidade de transações realizadas no Hospital CEMIL: " . $qtdCemil . "<br/>";
        echo " O valor total das transações que estão com o status Pago ? " . $valorPago . "<br/>";
        echo " O valor total das transações que estão com o status “Pendente ? " . $valorPendente . "<br/>";
        echo " O valor total das transações realizadas em Umuarama? " . $valorUmuarama . "<br/>";
        echo " ============================================================================<br/>";
        echo " O valor total das transações realizadas no PR? " . $valorPR . "<br/>";
        echo " O valor total das transações realizadas no MS? " . $valorMS . "<br/>";
        echo " O valor total das transações realizadas no SP? " . $valorSP . "<br/>";
        echo " O valor total das transações realizadas no EXT? " . $valorEXT . "<br/>";
    }
}
?>