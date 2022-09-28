<?php
$tip = "PHP Tips";
$title = "Trabalhando com Datas";
$subtitle = "Dias, meses, anos, horas, minutos e segundos (procedural)";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="../../_libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_assets/css/styles.css">
</head>
<body>

<div class="container top">
    <div class="row">
        <div class="col-sm-12">
            <img class="img-fluid logo d-block" src="../../_assets/img/logo.png" alt="">
        </div>
    </div>
</div>

<div class="container white content">
    <div class="row">
        <div class="col-sm-12">
            <h1><?= $tip; ?> :: <?= $title; ?> <small><?= $subtitle; ?></small></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Documentação</h2>
            <code>
                <?php
                $link_EN = "https://www.php.net/manual/en/function.date.php";
                $link_PT = "https://www.php.net/manual/pt_BR/function.date.php";

                echo "PT <a target='_blank' href=\"{$link_PT}\">{$link_PT}</a> <br>";
                echo "EN <a target='_blank' href=\"{$link_EN}\">{$link_EN}</a>";
                ?>

            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Chamada da Função</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 */
                $data_completa = date("d/m/Y");
                echo "Data Completa: {$data_completa}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Formatos De Dias do Mês e da Semana</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 * d Dia do mês, 2 digits com zeros à esquerda	01 a 31
                 * D Uma representação textual de um dia, três letras	Mon a Sun
                 * j Dia do mês sem zeros à esquerda	1 a 31
                 * l (lowercase 'L')	Uma representação textual completa do dia da semana	Sunday a Saturday
                 * N Representação numérica ISO 8601 do dia da semana	1 (para segunda-feira) a 7 (para domingo)
                 * S Sufixo ordinal inglês para o dia do mês, 2 caracteres	st, nd, rd ou th. Funciona bem com j
                 * w Representação numérica do dia da semana	0 (para domingo) a 6 (para sábado)
                 * z O dia do ano (começando em 0)	0 a 365
                 */
                $day = date("d");
                $weekday = date("D");
                $monthday_sup_zero = date("j");
                $weekday_ext = date("l");
                $weekday_num = date("N");
                $sufix = date("S");
                $numWeekday = date("w");
                $yearDay = date("z");

                echo "Dia do mês: {$day}<br>";
                echo "Dia da semana (3 letras): {$weekday}<br>";
                echo "Dia do mês sem zero: {$monthday_sup_zero}<br>";
                echo "Dia da semana: {$weekday_ext}<br>";
                echo "Dia da semana numérico: {$weekday_num}<br>";
                echo "Sufixo: {$day}<sup><u>{$sufix}</u></sup><br>";
                echo "Dia da semana (0 para domingo): {$numWeekday}<br>";
                echo "Dia corrido do ano: {$yearDay}<br>";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Formatos De Meses</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Formatos De Anos</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Escrevendo uma Data completa</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Somando dias/meses/anos a Datas</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Subtraindo dias/meses/anos a Datas</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>Calculando diferença entre Datas</h2>
            <code>
                <?php
                /**
                 * Documentação do Formato
                 * https://www.php.net/manual/pt_BR/datetime.format.php
                 *
                 */
                $formato = date("z");
                echo "Formato para Dia da Semana: {$formato}";
                ?>
            </code>
        </div>
    </div>
</div>

<script src="../../_libs/jquery/jquery.js"></script>
<script src="../../_libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../../_assets/js/scripts.js"></script>

</body>
</html>