<?php

function validarNum($num) {
    if ((!ctype_digit($num) && $num <= 0)) return "O campo $num está inválido";
}