#!/bin/bash 
pwd
prueba=clavo
su - slave 
if [ $? -eq 0 ]
then 
echo "Todo salio bien"
else
echo "Algo salió mal"
fi 
#whoami
#mkdir $prueba
#cd $prueba 
#vagrant init ubuntu/focal64 2>&1 && vagrant up 2>&1
