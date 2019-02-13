<?php

namespace Generator;

// require_once "Pretty.php";
use function Pretty\render;

function generate($data)
{
    return render($data);
}


generate(1);
