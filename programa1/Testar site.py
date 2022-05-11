# testar site
import urllib
import urllib.request

try:
    site = urllib.request.urlopen('http://www.bossagenciadigital.com')
except:
    print('Deu erro')
else:
    print('Tudo Ok')