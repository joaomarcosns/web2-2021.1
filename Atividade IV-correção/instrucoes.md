**1. Este arquivo deve conter a descrição sobre a atividade solicitada**

**2. Arquivos entregues fora do padrão não terão a nota contabilizada**

**3. Cada atividade se houver códigos para desenvolver deverá ser
criada uma branch com o nome da atividade e dentro dela deverá conter criar uma pasta com o nome 'codigo'**

**4. Pegue as instruções da atividade no moodle e adicione dentro da diretiva "###__Exemplo"**

###__Exemplo

    1 - Corrija o arquivo de rotas nomeando as rotas exemplo:
    Route::get('/clientes/create',[ClienteController::Class, 'create'])->name('clientes.create');
    Route::get('/clientes/edit',[ClienteController::Class, 'edit'])->name('clientes.edit');
    Route::get('/clientes/update/{id}',[ClienteController::Class, 'update'])->name('clientes.update');
    
    2 -  Nas Views modifique as Actions substituido:
    #exemplo sem parametro:
    <!-- <form action="/clientes/create" method="post"> -->
    por
    <!-- <form action="{{route('clientes.create')}}" method="post"> -->
    #exemplo com parametro:
    <!-- <form action="/clientes/update/{{$cliente->id}}" method="post"> -->
    por

    3 - Na pasta Model corrija as relações das models (venda, intensvenda,entrada, itensentrada, fornecedor, produto)conforme relação apresentada entre o model cliente e endereço
    #em anexo exemplo(cliente.php e endereco.php)
    postar Atividade utilizando os modelos disponíbilizados no Github(criar branch Atividade IV-correção)
    o print deve constar todos os itens solicitados acima(codigo)
    a pasta código deve conter todo o codigo do sistema
    Valor até 1,0 ponto
    Entrega até dia  02-02-11 as 14:00. 
    Não serão aceitas atividades após o horário de entrega
    Atividade entregue fora do padrão recebe até 50% do valor da atividade
    Atividades com codigo idênticos(crtl+c, crtl+V) serão desconsiderados
    
###__Exemplo


**5. Colocar um arquivo em pdf, na pasta da Atividade(referenciada) na branch main, com o print da execução das atividades acima adotando o seguinte modelo para nome do arquivo: ```print-AtividadeIV-Nome-Sobrenome.pdf```**

**6. postar no moodle a url do git referente a atividade solicitada.**
