#!/bin/bash
ls -lha
echo "Procedemos a realizar la invocación de la maquina..."
mkdir vm-ubuntu-bento 2>&1
cd vm-ubuntu-bento  2>&1
sudo cp /home/eloy/Documentos/repositorios/GIT-HUB-ELOY/egdep/lenguaje/proyectofin-curso/SlWp/Vagrantfile ./Vagrantfile
cat Vagrantfile 
sudo chown slave:slave ./* 2>&1
cp /var/www/html/script.sh ./
cp -r /var/www/html/provisioning ./
ls -lha ./


vagrant up --provision 2>&1
vagrant global-status 2>&1
vagrant ssh -c "hostname -I | cut -d' ' -f2" 2>&1
#cd /home/eloy/Documentos/repositorios/GIT-HUB-ELOY/egdep/lenguaje/proyectofin-curso/vm-ubuntu && cat ip.txt
