// search index for WYSIWYG Web Builder
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("index.php", ".:: PRINCIPAL ::.", "principal categorias nbsp quem somos administrativo cervejas whisky vinhos marcas bem vindo novo usuário cadastra se entrar sair minha contameus pedidos aqui sua loja vira destaque tabnstore gmail com contatos ", "");
   this[database_length++] = new SearchPage("realizar_venda.php", ".:: CADASTRAR ::.", "cadastrar forma de pagamento número pedido cliente nome do aparece nessa area valor total data venda nº parcela depagamento vista parcelado ", "");
   this[database_length++] = new SearchPage("area_compras.php", ".:: CADASTRAR ::.", "cadastrar minhas compras produto selecionado quantidade valor total ", "");
   this[database_length++] = new SearchPage("area_admin.php", ".:: ADMINISTRATIVO  ::.", "administrativo nbsp cadastros produtos categoria marca Área administrativa com permissão do site relatorios vendas clientes venda produto mensal por ", "");
   this[database_length++] = new SearchPage("dados_cliente.php", ".:: PRINCIPAL ::.", "principal meus dados cpf nome alexandre nunes barbosa bairro rua pedro alcantara amoroso jardim alves machado endereço cobrança para entrega casa cep cidade birigui sp telefone email data de cadastro xandinho1984 gmail com aqui sua loja vira destaque tabnstore contatos bem vindo sair minha contameus pedidos ", "");
   this[database_length++] = new SearchPage("compra_produto.php", ".:: PRINCIPAL ::.", "principal cerveja brahma litrão beba bem gelado quantidade quando assunto classificar surgem diversas maneiras formais informais de classificá las um exemplo disso classificação das cervejas como fraca extra ou forte alusivamente classificamos pelo teor alcoólico baixo moderado detalhes do produto vindo novo usuário cadastra se entrar sair minha contameus pedidos aqui sua loja vira destaque tabnstore gmail com contatos ", "");
   this[database_length++] = new SearchPage("login/fazer_login.php", ".:: LOGIN ::.", "login acesso cpf senha lembra me ", "");
   this[database_length++] = new SearchPage("login/pagina_erro.php", ".:: LOGIN ::.", "login erro de página ", "");
   this[database_length++] = new SearchPage("login/acesso_negado.php", ".:: LOGIN ::.", "login acesso negado ", "");
   this[database_length++] = new SearchPage("login/pagina_contato.php", ".:: LOGIN ::.", "login tiago bagatini fale conosco alexandre nunes ", "");
   this[database_length++] = new SearchPage("login/pagina_quem_somos.php", "QUEM SOMOS NÓS", "quem somos nÓs comercialização por meio da internet em geral sustentada sistemas de comércio eletrônico também chamado lojas virtuais um sistema corresponde uma página na com software gerenciamento pedidos qual empresas oferecem vendem seus produtos avanço nos dias atuais os sites vêm buscando tratar conteúdos forma simples clara útil funcional pois cada dia volume maior pessoas leigas passa fazer uso desta considerando grande demanda desenvolvimento número crescimento que tecnologia vem tendo no mercado tendência das aumentar divulgar sua marca através criar loja virtual usuário possa conhecer saber mais empresa pesquisar preços até mesmo comprar onde ele estiver sem precisar ir física ganhando tempo economizando dinheiro ainda conforto receber posteriormente comprados casa nbsp tabn store foi fundada ano como projeto conclusão curso cidade birigui pelo senhores tiago bagatini alexandre nunes principal missão oferecer soluções para commerce bagatinianalista desenvolvedor nunesanalista ", "");
   this[database_length++] = new SearchPage("login/alterar_editar_senha.php", ".:: LOGIN ::.", "login escolha sua senha antiga nova confirme ", "");
   this[database_length++] = new SearchPage("login/cadastro_com_sucesso.php", ".:: LOGIN ::.", "login cadastro realizado com sucesso ", "");
   this[database_length++] = new SearchPage("cadastro/cadastro_cliente.php", ".:: CADASTRAR ::.", "cadastrar cadastro de cliente cpf data nome rg nascimento celular endereço cobrança número cep estado sp rj am sc pr al ap cidade birigui bairro complemento entrega telefone email observação senha confirma usuário ", "");
   this[database_length++] = new SearchPage("cadastro/cadastro_produto.php", ".:: CADASTRAR ::.", "cadastrar cadastro de produto preço imagem do descrição marca quantidade código categoria dados ", "");
   this[database_length++] = new SearchPage("cadastro/cadastro_categoria.php", ".:: CADASTRAR ::.", "cadastrar cadastro de categoria código descriçãocategoria ", "");
   this[database_length++] = new SearchPage("cadastro/cadastro_marca.php", ".:: CADASTRAR ::.", "cadastrar cadastro de marca código descrição ", "");
   this[database_length++] = new SearchPage("pagina_lista_produto/pagina_lista_produto.php", ".:: PRINCIPAL ::.", "principal filtro cor tamanho marca faixa de preÇo até exemplo descriÇÃo do produto ser inserido produtos bem vindo sair minha contameus pedidos tabnstore gmail com contatos aqui sua empresa vira destaque ", "");
   this[database_length++] = new SearchPage("gerar_relatorio/relatorio_venda.php", ".:: CADASTRAR ::.", "cadastrar relatório de vendas data inicial final número do pedido ", "");
   this[database_length++] = new SearchPage("gerar_relatorio/relatorio_produto.php", ".:: CADASTRAR ::.", "cadastrar relatório de produtos código descrição ", "");
   this[database_length++] = new SearchPage("gerar_relatorio/relatorio_cliente.php", ".:: CADASTRAR ::.", "cadastrar relatório de clientes código nome do cliente ", "");
   this[database_length++] = new SearchPage("gerar_relatorio/relatorio_venda_produto_mensal.php", ".:: CADASTRAR ::.", "cadastrar relatório de vendas dos produtos por mês código do produto descrição ", "");
   this[database_length++] = new SearchPage("gerar_relatorio/relatorio_venda_cliente.php", ".:: CADASTRAR ::.", "cadastrar relatório de vendas por clientes data código nome do cliente ", "");
   return this;
}
