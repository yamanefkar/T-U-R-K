#!/data/data/com.termux/bin/bash
#!/bin/bash
clear


case $1 in

        "--help")
sleep 1
echo -e "\033[32;40;1m
--nmap          (Nmap yükle)
--metasploit    (Metasploit)
--sqlmap        (SQL map)
--apb           (Admin Panel Bulucu)
--md5force      (Md5 şifre çözücü)
--Termux-Debian (Debian Termux)

--ngrok1
--ngrok2

--upgrade       (Toolu güncelle)
"
;;

"-h")
sleep 1
echo -e "\033[32;40;1m
--nmap          (Nmap yükle)
--metasploit    (Metasploit)
--sqlmap        (SQL map)
--apb           (Admin Panel Bulucu)
--md5force      (Md5 şifre çözücü)
--debian (Debian Termux)

--ngrok1
--ngrok2

--upgrade       (Toolu güncelle)
"
;;

"--nmap")
clear
cd $HOME
pkg install nmap -y
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;

"--upgrade")
clear
cd $HOME
rm -rf T-U-R-K/
git clone https://github.com/yamanefkar/T-U-R-K
termux-notification -t "Tool kullanıma hazır"
;;


"--sqlmap")
clear
cd $HOME
git clone https://github.com/sqlmapproject/sqlmap
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;

"--metasploit")
pkg install unstable-repo
pkg install metasploit
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;


"--apb")
clear
cd $HOME
git clone https://github.com/s0md3v/Breacher
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;

"--md5force")
clear
cd $HOME
git clone https://github.com/ciku370/hasher
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;

"--debian")
clear
apt update
apt upgrade -y
pkg install proot -y
cd $HOME
git clone https://github.com/Neo-Oli/termux-ubuntu
sleep 5
cd termux-ubuntu
bash ubuntu.sh
sleep 2
termux-notification -t "Tool kullanıma hazır"
;;



"--ngrok")
clear
cd $HOME/T-U-R-K/update/ngrok/
chmod 777 *
rm -rf /data/data/com.termux/files/usr/bin/ngrok
cp -r  ngrok /data/data/com.termux/files/usr/bin
termux-notification -t "Ngrok kullanıma hazır"
;;


"--ngrok1")
clear
cd $HOME/T-U-R-K/update/ngrok1/
chmod 777 *
rm -rf /data/data/com.termux/files/usr/bin/ngrok
cp -r ngrok /data/data/com.termux/files/usr/bin
termux-notification -t "Ngrok kullanıma hazır"
;;




"--01")
clear
cd $HOME/ &&
cd T-U-R-K/exploit/ && bash tst.sh
;;


"--02")
clear
cd $HOME/ &&
cd T-U-R-K/phishing/ && bash tst.sh

;;


"--03")
clear
cd $HOME/ &&
cd T-U-R-K/bruteforce/ && bash tst.sh

;;


"--04")
                clear
                read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37m İp adresi : ' dos_ip
                echo -e ""
                read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37m Port Numarası [80 , 21 , 22] : ' dos_port
                echo -e ""
                read -p $'\e[31m▂\e[32m▃\e[31m▃\e[37m Hız [80 , 21 , 22] : ' hiz
                cd $HOME/T-U-R-K/dos-ddos/ && python3 tst.py -s $dos_ip -p $dos_port -t $hiz

;;

"--05")
clear
cd $HOME/ &&
cd T-U-R-K/pentest/ && bash tst.sh

;;

"--06")
clear
cd $HOME/ &&
cd T-U-R-K/termux-api/ && bash tst.sh

;;
esac
