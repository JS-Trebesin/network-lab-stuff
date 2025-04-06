# Hello?


### 1. Conf Telnet on server

```bash
sudo apt install inetutils-inetd telnetd
```
```bash
sudo nano /etc/inetd.conf
```
add line:
```bash
telnet  stream  tcp     nowait  root    /usr/sbin/telnetd telnetd
```
```bash
sudo systemctl restart inetutils-inetd
```


### 2. Misconf Apache

```bash
sudo mkdir /var/www/html/secret
```
```bash
echo "Top secret stuff" | sudo tee /var/www/html/secret/passwords.txt
```
```bash
sudo nano /etc/apache2/apache2.conf
```
Indexes needs to be included

<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride None
        Require all granted
</Directory>

```bash
sudo systemctl reload apache2
```

### 3. SQL inject

```bash
sudo apt install php libapache2-mod-php
```
```bash
sudo systemctl restart apache2
```

