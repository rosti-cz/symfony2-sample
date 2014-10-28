Roští.cz Symfony2 ukázková aplikace
===================================

Tato aplikace slouží jako šablona a zároveň průvodce nastavením Symfony2 na hostingu [Roští.cz][1].

Instalace na serveru
--------------------

Přihlašte se na server pomocí SSH přístupu a spusťte následující příkazy.

Nejdříve odstraníme výchozí složky, které jsou součástí výchozí instalace php aplikace na roští.cz:

    rm -rf app
    rm -rf webroot
    
Stáhneme tento repozitář pomocí gitu:

    git clone https://github.com/rosti-cz/symfony2-sample.git app
    
Nainstalujeme závislosti. Při instalaci se spustí průvodce kde můžete nastavit připojení do db a na mail server:

    cd /srv/app && composer install
    
Vytvoříme symlink do webrootu a nainstalujeme statické soubory:

    ln -s /srv/app/web /srv/webroot
    cd /srv/app && php app/console assets:install
    
_Díky tomu bude php kód aplikace oddělen od webrootu._


Nyní stačí jen přistoupit na url, kterou máte připojenou k aplikaci.

[1]:  http://rosti.cz

