# Magento2-TestUnit

__*Hints:*__

- Download repo.
- Copy the folders **Controller** and **etc** to your *app/code/Vendor/Module/* root directory. 
- Replace code where needed.
- In your Magento root directory run:
  ```bash 
  sudo rm -rf generated/* var/* pub/static/*;
  magento s:up;
  magento s:d:c;
  magento s:s:d -f;
  ```
- Turn on your favorite debug tool.
- Add breakpoints.
- Add **/in_a_galaxy/far/faraway** to your browser, after your localhost url.
- Enjoy.



### xdebug ###
Enter container as root and use bash:
```console
mkdir /tmp/downloads; \
    wget -O /tmp/downloads/xdebug-2.6.1.tgz https://xdebug.org/files/xdebug-2.6.1.tgz; \
    cd /tmp/downloads; \
    tar -xvzf /tmp/downloads/xdebug-2.6.1.tgz; \
    cd /tmp/downloads/xdebug-2.6.1; \
    phpize; \
    ./configure && make; \
    cp /tmp/downloads/xdebug-2.6.1/modules/xdebug.so /usr/lib/php/20160303/; \
    rm -r /tmp/downloads;

apt-get install php-xdebug;
```

in file /etc/php/7.1/mods-available/xdebug.ini put:
```console
zend_extension = /usr/lib/php/20160303/xdebug.so
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
xdebug.remote_handler = dbgp
xdebug.ide_key = PHPSTORM
xdebug.remote_mode = req
xdebug.remote_port = 9000
xdebug.remote_connect_back = 1
```
