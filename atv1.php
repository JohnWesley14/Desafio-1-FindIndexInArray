<?php

function verificarNumero($numeroSelecionado){

	if ($numeroSelecionado < 1 || $numeroSelecionado > 31) {
		echo ("A função só recebe números de 1 a 31");
	} else {
		$lista_num = [5,21,8,28,4,16,26,10,7,25,6,11,18,1,9,14,27,29,15,3,2,31,22,17,13,12,30,20,23,19,24];

		// print_r($lista_num); // Print do array
		
		if (in_array($numeroSelecionado, $lista_num)) {
			foreach ($lista_num as $indice => $numero) {
				if ($numero == $numeroSelecionado) {
					echo $indice;
					// echo "O número " . $numeroSelecionado . " Existe na lista e o seu índice é: [" . $indice . "]"; 
					// Outra mensagem possível para apresentar o resultado, mas comentada por causa do output esperado.
				}
			}
	
		} else {
			echo "O número " . $numeroSelecionado . " não está na lista, tente outro";
		}
	}
}
verificarNumero(6);
/*

--------------------------- Processo e Lógica ---------------------------------

1. Criei um if que verifica se o número faz parte do conjunto de 1 a 31, senão, exibe mensagem de erro, se estiver segue para o passo 2.
2. Criei um array com os 31 valores e verifico por meio da função in_array se o número selecionado está na função. 
3. Utilizei o método foreach para percorrer o array e ver onde o número selecionado coincide com o valor, após isso, capturo o índice e exibo, como o output do problema pede.

--------------------------- Observações ----------------------------

1. Como ainda não tenho o livro optei por usar a própria documentação oficial do PHP, principalmente para identificar a função array_slice.
2. No início por não ter prestado tanta atenção a recomendação acabei pesquisando no Google algumas informações, como por exemplo como encontrar certo valor em um array,
3. Não precisei de nenhuma pesquisa com relação a lógica, apenas questões de sintaxe. 
4. Quanto as demais coisas como foreach, ifs, elses, variáveis, etc... Já tinha conhecimento dessas funções por estudos prévios.

--------------------------- Possíveis alterações -------------------

1. Caso o output permitisse exibiria os prints que comentei (linhas 10 e 16) para melhor visualização e entendimento dos resultados.
2. Receber o número dinamicamente por meio de um formulário de uma página web.

*/

?>
