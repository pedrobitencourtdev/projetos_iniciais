def linha(tam=42):
    return '-' * tam


def arquivoExiste(nome): # função verifica se o arquivo existe
    try:
        a = open(nome, 'rt')
        a.close()
    except FileNotFoundError:
        return False
    else:
        return True


def criarArquivo(nome): # função cria o arquivo .txt
    try:
        a = open(nome, 'wt+')
        a.close()
    except:
        print('Houve um erro na criação do arquivo!')
    else:
        print(verde(f'Arquivo {nome} criado com sucesso'))


def cadastrar(arquivo, nome='desconhecido', idade=0): # função que adiciona dados na lista txt
    try:
        a = open(arquivo, 'at')
    except:
        print('Houve um erro na abertura do arquivo!')
    else:
        try:
            a.write(f'{nome};{idade}\n')
        except:
            print('Houve um erro na hora de escrever os dados!')
        else:
            print(f'Novo registro de {nome} adicionado.')
            a.close()


def lerArquivo(nome): # função que lê o arquivo txt e exibe na tela
    try:
        a = open(nome, 'rt')
    except:
        print('Erro ao ler o arquivo')
    else:
        verde(cabecalho('PESSOAS CADASTRADAS'))
        for linha in a:
            dado = linha.split(';')
            dado[1] = dado[1].replace('\n', '')
            print(f'{dado[0]:<30}{dado[1]:>3} Anos')
    finally:
        a.close()


def cabecalho(txt):
    print(azul(linha()))
    print(txt.center(42))
    print(azul(linha()))


def menu(lista):
    cabecalho('MENU PRINCIPAL')
    cont = 1
    for item in lista:
        print(f'{verde(cont)} - {verde(item)}')
        cont += 1
    print(azul(linha()))
    opc = leiaInt('Sua Opção: ')
    return opc


def leiaInt(msg):  # validando dados de entrada
    ok = False
    valor = 0
    while True:
        n = str(input(msg))
        if n.isnumeric():
            valor = int(n)
            ok = True
        else:
            print('\033[0;31mERRO! Digite um valor inteiro válido\033[m')
        if ok:
            break
    return valor


def vermelho(tex=0):
    vermelho = f'\033[1;31m{tex}\033[m'
    return vermelho


def verde(tex=0):
    verde = f'\033[1;32m{tex}\033[m'
    return verde


def azul(tex=0):
    azul = f'\033[1;34m{tex}\033[m'
    return azul
