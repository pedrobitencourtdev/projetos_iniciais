# lista de compras. criado por Pedro Bitencourt dev https://github.com/pedrobitencourtdev 03/05/2022
from time import sleep
carrinho = []
vazio = 0 # itens do carrinho
removidos = [] # os itens que forem removidos do carrinho entra nessa lista
removidosq = 0 # quantidade de removidos entra aqui
print('\033[1;32mEscreva "Sair" para sair a qualquer momento.\033[m')
for itens in range(0, len(carrinho)):
    print(carrinho[itens])
while True:
    try:
        jogador = str(input('\033[1;32mADD\033[m para adicionar \033[1;31mREM\033[m para remover \033[1;34mV\033[m '
                            'para ver o Carrinho: ')).strip().upper() # aqui a
        # parte de entrada onde o usuário escolhe se quer add ou remover
        if jogador == 'ADD':
            add = str(input('Qual ítem deseja adicionar?: ')).strip().upper()
            carrinho.append(add) # se ele colocar add então essa função adiciona o item que ele digitou acima na
            # lista carrinho
            vazio += 1
            print('-' * 60)
            print(f'Você adicionou \033[1;32m{add}\033[m no Carrinho, agora seu Carrinho tem ')
            print('-' * 60)
            for itens in range(0, len(carrinho)): # aqui repete o print dos itens que ele tem no carrinho.
                print(carrinho[itens])
        elif jogador == 'REM': # caso ele escolha REM isso acontece
            rem = str(input('Qual ítem deseja Remover??: ')).strip().upper()
            if vazio == 0: # quando ele não tiver nada no carrinho vai aparecer carrinho vazio
                print('Carrinho vazio')
            else: # se ele tiver algo no carrinho vai digitar o que ele deseja remover, e então será removido.
                carrinho.remove(rem)
                vazio -= 1
                removidos.append(rem)
                removidosq += 1
                print('-' * 60)
                print(f'Você removeu \033[1;31m{rem}\033[m do Carrinho, agora seu Carrinho tem ')
                print('-' * 60)
                for itens in range(0, len(carrinho)):
                    print(carrinho[itens])
        elif jogador == 'V': # aqui ele verá a qualquer momento os itens que ele tem disponível já dentro do
            # carrinho, se for 0 ele recebe a msg carrinho vazio.
            if vazio == 0:
                print('Carrinho vazio')
            else: # se não tiver vazio vai adicionar tudo que ele quis e remover o que ele quis remover, e mostrar
                # pra ele.
                print(f'\033[1;32mAdicionando itens ao carrinho...\033[m')
                sleep(2)
                print('-' * 25)
                print(f'seu carrinho tem:', end=' ')
                print(f'{vazio} itens')
                print('-' * 25)
                for itens in range(0, len(carrinho)):
                    print(f'{carrinho[itens]:.<25}')
                user = str(input('Deseja ver os itens removidos? [S/N]')).strip().upper() # aqui já pergunta se quer
                # que mostre os itens que ele deletou.
                if user == 'S':
                    print(f'\033[1;31mItens removidos do carrinho {removidosq}\033[m')
                    for rem in range(0, len(removidos)):
                        print(f'\033[1;31m{removidos[rem]:.<25}\033[m')
                elif user == 'N':
                    continue
        elif jogador == 'SAIR': # aqui uma função que ele pode digitar para sair a qualquer momento
            print(f'\033[1;35mEncerrando programa...\033[m')
            sleep(2)
            print(f'Programa encerrado. Volte sempre!')
            break
    except ValueError:
        print(f'Esse item não existe no Carrinho!')
