<?php 
/*
Configuração dos templates das categorias do site
OBS: ADICIONAR CONFORME SAIA FORA DO PADRÃO ATUAM DO SITE!
AS OUTRAS CONDIÇÕES DO IF ESTÃO COM VALOR NULO (OU SEJA, ESTAO BUSCANDO POR UM TEMPLATE Q NAO EXISTE)

*/
$post = $wp_query->post;
if (in_category('413')) {
include(TEMPLATEPATH.'/category-ezrama.php');
} elseif (in_category('460')) {
include(TEMPLATEPATH.'/category-filhas-r8.php');
} else{
include(TEMPLATEPATH.'/category-filhas-r8.php');
}


 ?>