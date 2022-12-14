<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
       $resultado = $ano/100;
      if ((int) $resultado < $resultado){
          return (int) ($ano/100 + 1);
      }else{
          return ((int) $resultado);
      }
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
	 
	# Função auxiliar para verificar se é um número primo.
	
	public function NumeroPrimo(int $numero){
		for ($i = 2; $i < $numero; $i++){
		  if ($numero % $i == 0){
			  return false;
		  }
		}
	return true;
    }
  
    public function PrimoAnterior(int $numero): int {
        for ($i = $numero-1; $i > 0; $i--){
          if (NumeroPrimo($i) == 1){
              return $i;
          }
      }
      return "Não possui numeros primos anteriores!";
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $sizeArray = count($arr);
        $maior = 0;
        $segundoMaior = 0;
        for ($i = 0; $i < $sizeArray; $i++){
            $internArraySize = count($arr[$i]);
            for ($j = 0; $j < $internArraySize; $j++){
                if ($arr[$i][$j] > $maior){
                    $segundoMaior = $maior;
                    $maior = $arr[$i][$j];
                }
                else if($arr[$i][$j] > $segundoMaior){
                    $segundoMaior = $arr[$i][$j];
                }
            }
        }
        return $segundoMaior;
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	
	public function EhCrescente($array){
	  $sizeArray = count($array);
	  for ($i = 0; $i < $sizeArray-1; $i++){
		  if ($array[$i+1] <= $array[$i]){
			return false;
		  }
	  }
	  return true;
	}
	
	public function SequenciaCrescente(array $arr): bool {
        $sizeArray = count($arr);
		for ($i = 0; $i < $sizeArray; $i++){
		  $array_temp = $arr;
		  unset($array_temp[$i]);
		  if (EhCrescente(array_values($array_temp)) == true){
			return true;
		  }
		}
		return false;
    }
}
