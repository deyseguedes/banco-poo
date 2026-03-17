<?php
// include "arquivo-nao-existe.php";

// echo 10/0;

//erro -> problema grave que interrompe execução

// aviso(warning) -> problema que não interrompe execução

//exceção -> problema que pode ser trato.


/*try{
    //codigo que pode gerar erro
}catch (Error $e){
    //tratamento de erro
}
    */

/*try{
      throw new Exception();
    $numero = 10 / 0;
}catch (Exception $e){
    //echo "Ocorreu um erro";
    echo $e->getMessage("Pagina não encontrada");

}
*/

/*try {
    $saldo = 100;
} catch (Exception $e) {
    echo "Erro encontrado";
} finally {
    function Sair(){
        //codigo home
    }
}
*/

try {
    $idade = 15;
    if($idade < 18){
        throw new Exception("Acesso negado", 404);
    }
    echo "Acesso permitido";
}catch (Exception $e){
    echo $e->getMessage();
    echo $e->getCode();
    echo $e->getFile();
    echo $e->getLine();
}

//THROWABLE -> ERROR -> EXCEPTION

//THROW -> ele é a classe base de todos os erros
//ERROR -> erros internos do PHP
//EXCEPTION -> erros controlaveis







