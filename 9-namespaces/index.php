<?php

require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as productClass;

use models\Produto as productModel;

$produto = new productClass();

$produto->mostrarDetalhes();