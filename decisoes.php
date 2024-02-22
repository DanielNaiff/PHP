<?php

$idade = 21;

echo "Voce só pode entrar se tiver mais do que 18 anos";

if ($idade >= 18) {
  echo "Voce tem $idade anos. Pode entrar".PHP_EOL;
  echo "Pode entrar";
}else{
  echo "Voce só tem $idade anos. Voce nao pode entrar";
}