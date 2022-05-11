# sistema de cadastro com txt
from lib.interface import *
from time import sleep
from lib.arquivo import *

arquivo = 'dados.txt'

if not arquivoExiste(arquivo): # se o arquivo não existe
    criarArquivo(arquivo)

while True:
    resposta = menu(['Ver pessoas cadastradas', 'Cadastrar Pessoas', 'Sair do Sistema'])
    if resposta == 1:
        # opção de listar o conteúdo de um arquivo!
        lerArquivo(arquivo)
    elif resposta == 2:
        # opção de cadastrar uma nova pessoa
        cabecalho('NOVO CADSTRO')
        nome = str(input('Nome: ')).strip()
        idade = leiaInt('Idade: ')
        cadastrar(arquivo, nome, idade)
    elif resposta == 3:
        cabecalho('Saindo do Sistema... Até logo!')
        sleep(1)
        break
    else:
        print(vermelho('ERRO! Opção Inválida'))
    sleep(1)
