<?php
function redirenciona(string $url):void
{
    header("Location: $url");
    die();
}