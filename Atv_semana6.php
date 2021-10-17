<?php
function fatorial($n) //exercicio1.1
{
    $x = $n;
    $i = $n - 1;
    while ($i >= 2) {
        $x = $x * $i;
        $i = $i - 1;
    }
    return $x;
}


function primo($n) //exercicio1.2
{
    $resultado = 0;
    $i = 2;
    do {
        if ($n % $i == 0) {
            $resultado++;
            break;
        }
        $i = $i + 1;
    } while ($i <= $n / 2);

    if ($resultado == 0) {
        return true;
    } else {
        return false;
    }
}

function perfeito($n)
{ //exercicio1.3
    if ($n <= 1) {
        return false;
    }
    $divisores = array();
    $i = $n - 1;
    do {
        if ($n % $i == 0) {
            $divisores[] = $i;
        }
        $i = $i - 1;
    } while ($i >= 1);
    $somadivisores = 0;
    $size = count($divisores);
    $i = 0;
    while ($i < $size) {
        $somadivisores = $somadivisores + $divisores[$i];
        $i = $i + 1;
    }

    if ($somadivisores == $n) {
        return true;
    } else {
        return false;
    }
}

function vetor_fatorial($n)
{ // exercicio2.1
    $i = 1;
    $vfatorial = array();
    while ($i <= $n) {
        $vfatorial[] = fatorial($i);
        $i = $i + 1;
    }
    $i = 0;
    $size = count($vfatorial);
    while ($i < $size) {
        $x = $i + 1;
        echo "<p> $x! = $vfatorial[$i]</p>";
        $i = $i + 1;
    }
}
vetor_fatorial(10);

function vetor_primo($n)
{ //exercicio2.2
    $i = 1;
    $primos = array();
    while ($i <= $n) {
        if (primo($i)) {
            $primos[] = $i;
        }
        $i = $i + 1;
    }
    $i = 0;
    $size = count($primos);
    //echo $n;
    while ($i < $size) {
        echo ' ';
        echo $primos[$i];
        $i = $i + 1;
    }
}
vetor_primo(100);

function vetor_perfeito($n)
{ //exercicio2.3
    $i = 1;
    $perfeitos = array();
    while ($i <= $n) {
        if (perfeito($i)) {
            $perfeitos[] = $i;
        }
        $i = $i + 1;
    }
    $i = 0;
    $size = count($perfeitos);
    //echo $n;
    while ($i < $size) {
        echo '<br>';
        echo $perfeitos[$i];
        $i = $i + 1;
    }
}
vetor_perfeito(100);
