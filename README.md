# Magento2-TestUnit

### Implementation ###

- Download/clone repo.
- Copy the folder Lastra/ to your *app/code/* directory in Magento.
- Replace code in [Controller](https://github.com/lastralab/Magento2-TestUnit/blob/master/Lastra/Debug/Controller/Far/FarAway.php) according to your needs.
- In your Magento root directory run:
  ```bash
  sudo rm -rf generated/* var/* pub/static/*;
  magento s:up;
  magento s:d:c;
  magento s:s:d -f;
  magento c:c;
  ```
- Turn on your debug tool.
- Add breakpoints.
- Add **/in_a_galaxy/far/faraway** to your browser, after your localhost url.
- Enjoy.



### Using Xdebug with PhpStorm and Docker ###
As root and use bash:
```console
mkdir /tmp/downloads; \
    wget -O /tmp/downloads/xdebug-2.6.1.tgz https://xdebug.org/files/xdebug-2.6.1.tgz; \
    cd /tmp/downloads; \
    tar -xvzf /tmp/downloads/xdebug-2.6.1.tgz; \
    cd /tmp/downloads/xdebug-2.6.1; \
    phpize; \
    ./configure && make; \
    cp /tmp/downloads/xdebug-2.6.1/modules/xdebug.so /usr/lib/php/20170718/; \
    rm -r /tmp/downloads;

apt-get install php-xdebug;
```

In file /etc/php/7.2/mods-available/**xdebug.ini** insert:
```console
zend_extension = /usr/lib/php/20170718/xdebug.so
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
xdebug.remote_handler = dbgp
xdebug.ide_key = PHPSTORM
xdebug.remote_mode = req
xdebug.remote_port = 9000
xdebug.remote_connect_back = 1
```
- Set configurations in PhpStorm
    - Language
        - <img width="600" alt="Screen Shot 2020-06-10 at 12 39 03 PM" src="https://user-images.githubusercontent.com/22894897/84305823-e272e700-ab17-11ea-9534-30df546c6d6a.png">
    - Server
        - <img width="600" alt="Screen Shot 2020-06-10 at 12 41 53 PM" src="https://user-images.githubusercontent.com/22894897/84306234-717fff00-ab18-11ea-8c23-b1a21d8204de.png">
    - Debug Config 
        - <img width="600" alt="Screen Shot 2020-06-10 at 12 42 04 PM" src="https://user-images.githubusercontent.com/22894897/84305835-e69f0480-ab17-11ea-9184-fcf782e10138.png">
 
- Add Xdebug Helper extension to browser
  - <img width="300" alt="Screen Shot 2020-06-10 at 12 44 34 PM" src="https://user-images.githubusercontent.com/22894897/84306051-35e53500-ab18-11ea-82a3-ca4f40e9973a.png">
