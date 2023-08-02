# php-xdebug
how to use xdebug in a application php

<br>

## Erro 01: Erro de sintaxe

O erro estava presente na linha 11, onde estava um fechamento de chave "}".

A solução do erro foi inserir o ";" no final da linha 10, resolvendo assim o erro.

~~~php
return $this->model;
~~~


<br>

## Erro 02: Propriedade Indefinida

O erro estava presente na linha 14, onde uma propriedade estava indefinida.

~~~php
return $this->"age";
~~~

Para solucionar o erro, precisou ser criada a propriedade **private $age;**

~~~php
<?php 
class Person {
    private $name;
    private $age;
~~~
<br>

## Erro 03: Método Indefinido

O erro estava presente na linha 13, onde o *"multiply"* era um método indefinido.

~~~php
echo $calculator->"multiply"(2, 3);
~~~

Para resolver o erro, foi necessário criar a função para o método:

~~~php
public function multiply($a, $b) {
        return $a * $b;
    }
~~~
<br>

## Erro 04: 


<br>



## Erro 06: Retornando uma de duas strings

O erro estava presente na linha 8 do código, onde estava passando apenas uma string, porém o código requeria duas.

~~~php
echo StringUtils::concatenate("Hello");
~~~

Para resolver o erro, foi inserida a segunda string solicitada.

~~~php
echo StringUtils::concatenate("Hello", "World");
~~~