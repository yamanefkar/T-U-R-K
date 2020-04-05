#!/data/data/com.termux/bin/bash
#!/bin/bash
clear


banner(){
	echo -e '\e[37m
	\tCode: YamanEfkar\033[31;40;1m
	¸.•*´¨`*•.¸¸.•*´¨`*•¸.•*´¨`*•.¸
	░
	░\e[31m[\e[37m01\e[31m]\e[37mSpam Call\033[31;40;1m
	░
	░¸.•*´¨`*•.¸¸.•*´¨`*•¸.•*´¨`*•.
	\e[33m[\e[37m\t  Termux Api   \t\e[33m]
	\e[31m[\e[37m99\e[31m]\e[37mÇıkış\e[31m  [\e[37mExit\e[31m]\e[37m
	\e[31m[\e[37m00\e[31m]\e[37mMenu\e[31m
	'


	read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37m İşlem Numarası : ' islem_numarasi

}

banner

if [[ $islem_numarasi == 01 ||  $islem_numarasi == 1  ]]; then
	echo -e ""
	read -p $'\e[31m[\e[32m!\e[31m]\e[37mHedef Tel No [+905xxx] : ' tel_no_sms
	echo -e ""
	read -p $'\e[31m[\e[32m!\e[31m]\e[37mMax call : ' sms_sayisi
	for (( i=1; i <= $sms_sayisi; i++))
	do
		clear
		termux-telephony-call $tel_no_sms
		sleep 60

	done

elif [[ $islem_numarasi == 00 ||  $islem_numarasi == 0  ]]; then
	bash ../tst.sh
elif [[ $islem_numarasi == 99 ||  $islem_numarasi == 9  ]]; then
	clear
	echo -e "\e[37mGüle güle..."
	sleep 2
	clear
	exit
else
	bash tst.sh
fi
