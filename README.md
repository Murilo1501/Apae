# Projeto sistema web APAE
## Introdução
Olá! Este sistema foi feito por estudantes do Centro Universitário ENIAC, iniciado no primeiro ano do Ensino Médio, em 2022, e entregue no terceiro ano do Ensino Médio, em 2024.

Nós utilizamos o modelo MVC, assim ficará mais fácil caso vocês precisem implementar/alterar algo. 

Caso você sinta dúvida no que uma função faz ou o que é/como funciona o modelo MVC, recomendamos altamente que você leia a documentação do Laravel, pois nos baseamos fortemente nela.

**Detalhes importantes se encontram no final deste arquivo**

## O que tem no sistema?
Como já foi mencionado, utilizamos o modelo MVC, portanto a estrutura estará dividida entre Model, Controller, View e Routes. Qualquer caminho que for inserido na URL ou redirecionado via HTTP deverá ser exatamente uma rota existente, caso contrário um código 404 será retornado. (Não fizemos uma página para isso)

Algumas partes de código estão comentadas para serem reutilizadas, especialmente no View. Um ótimo exemplo disso é a estrutura dos Cartões de cada usuário. Eles são imagens com texto colado por cima. Por isso, nas listas de usuários, eles são exibidos como um Modal.

O front-end foi feito em Boostrap 5 na parte após o login. Antes disso, o CSS inteiro foi feito à mão.

O View foi dividido em duas partes maiores: beforeLogin e afterLogin. O primeiro é todo o conteúdo que acontece antes do Login ser efetuado, e o segundo após o Login ser efetuado.

## Detalhes importantes
Um sistema de ReCaptcha é altamente recomendado de implementar. Não foi implementado antes porque o sistema foi criado em servidor local, impossibilitando os testes nele. Além disso, login por outros meios também é recomendado adicionar, mas não é garantido que as coisas funcionarão como planejadas, especialmente na parte de alteração de dados. Novamente, isso não foi testado porque o sistema foi criado em servidor local.

Como uma única pessoa testou todo o projeto, pode ser que erros mais específicos tenham passado despercebidos. Por isso, quando isso for ao ar, recomenda-se que permita o acesso apenas a algumas poucas pessoas de confiança, para que elas possam desfrutar do sistema e, caso falhas apareçam, os danos sejam mínimos.

Caso no seu editor de código apareça que há um problema com uma *namespace* chamada "Inteface", saiba que isso não quebra o sistema. O editor de texto apenas considera como uma palavra-chave (mesmo que a escrita esteja com letras maiúsculas e minúsculas), portanto sinta-se livre para alterar caso isso incomode.

## Erro conhecido
Um erro crítico conhecido acontece na lista de usuários. Como as tabelas de usuários e empresas parceiras no banco de dados são separadas, a *lista de usuário* do *administrador* não mostra a carteirinha certa para as empresas parceiras. Isso se deve a ela ser carregada a partir do ID, que não é único quando juntando as duas tabelas.

Um possível jeito de solucionar isso seria transformando o ID na junção dos dois único, ou então separar as tabelas. Devido ao nosso prazo, não conseguimos corrigir isso.