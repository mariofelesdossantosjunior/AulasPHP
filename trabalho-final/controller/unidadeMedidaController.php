<?php

function getUnidades()
{
    return array(
        "AMPOLA",
        "BALDE",
        "BANDEJA",
        "BARRA",
        "BISNAGA",
        "BLOCO",
        "BOBINA",
        "BOMBONA",
        "CAPSULA",
        "CARTELA",
        "CENTO",
        "CONJUNTO",
        "CENTIMETRO",
        "CENTIMETRO QUADRADO",
        "CAIXA",
        "CAIXA COM 2 UNIDADES",
        "CAIXA COM 3 UNIDADES",
        "CAIXA COM 5 UNIDADES",
        "CAIXA COM 10 UNIDADES",
        "CAIXA COM 15 UNIDADES",
        "CAIXA COM 20 UNIDADES",
        "CAIXA COM 25 UNIDADES",
        "CAIXA COM 50 UNIDADES",
        "CAIXA COM 100 UNIDADES",
        "DISPLAY",
        "DUZIA",
        "EMBALAGEM",
        "FARDO",
        "FOLHA",
        "FRASCO",
        "GALÃO",
        "GARRAFA",
        "GRAMAS",
        "JOGO",
        "QUILOGRAMA",
        "KIT",
        "LATA",
        "LITRO",
        "METRO",
        "METRO QUADRADO",
        "METRO CÚBICO",
        "MILHEIRO",
        "MILILITRO",
        "MEGAWATT HORA",
        "PACOTE",
        "PALETE",
        "PALETE",
        "PARES",
        "PEÇA",
        "POTE",
        "QUILATE",
        "RESMA",
        "ROLO",
        "SACO",
        "SACOLA",
        "TAMBOR",
        "TANQUE",
        "TONELADA",
        "TUBO",
        "UNIDADE",
        "VASILHAME",
        "VIDRO"
    );
}

/**
 * Função responsavel por gerar as
 * opções de unidade
 */
function gerarUnidadeMedida($selecionada)
{
    foreach (getUnidades() as $key => $value) {
        if ($key == $selecionada) {
            echo "<option value=" . $key . " selected>$value</option>";
        } else {
            echo "<option value=" . $key . ">" . $value . "</option>";
        }
    }
}

/**
 * Função responsavel por recuperar nome
 * da unidade cadastrada
 */
function getUnidadeSelecionada($selecionada)
{
    $unidade = "";
    foreach (getUnidades() as $key => $value) {
        if ($key == $selecionada) {
            $unidade = $value;
        }
    }
    return $unidade;
}
