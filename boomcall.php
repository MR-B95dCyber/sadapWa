<?php
system('clear'); 
function send($phone){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETIRNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
$test = curl_exec($ch);
curl_close($ch);
echo $test."\n";
}
echo "
\033[1;97m█████████
\033[1;97m█▄█████▄█      \033[1;96m●▬▬▬▬▬▬▬▬▬๑۩۩๑▬▬▬▬▬▬▬▬●
\033[1;97m█\033[1;91m▼▼▼▼▼ \033[1;97m- _ --_--\033[1;92m  ╔═╗╔═╗ ╔╗ ╔╗
\033[1;97m█ \033[1;97m \033[1;97m_-_-- -_ --__\033[1;92m  ║═╣║╬╚╗║╚╗║╚╗
\033[1;97m█\033[1;91m▲▲▲▲▲\033[1;97m--  - _ --\033[1;92m  ╚═╝╚══╝╚═╝╚═╝ \033[1;93mv1.1
\033[1;97m█████████      \033[1;96m«----------✧----------»
\033[1;97m ██ ██
\033[1;97m╔═══════════════════════════════════════════╗​
\033[1;97m║ \033[1;93m* \033[1;97mAuthor \033[1;91m: \033[1;96mWahyudi Programing             \033[1;97m║
\033[1;97m║ \033[1;93m* \033[1;97mSuport \033[1;91m: \033[1;96mMR-B95d                        \033[1;97m║
\033[1;97m║ \033[1;93m* \033[1;97mGitHub \033[1;91m: \033[1;92mhttps://github.com/MR-B95dCyber\033[1;97m║
\033[1;97m​​╚═══════════════════════════════════════════╝
\033[1;97m║---\033[1;91m> \033[1;94mFollow \033[1;95mIG \033[1;91m: \033[1;97mwahyudi_programing
\033[1;97m║
​​\033[1;97m╚══\033[1;91mD \033[1;92mMasukan Nomor \033[1;91m:\033[1;97m";
$nomor = trim(fgets(STDIN));
sleep(2);
$execute = send($nomor);
print $execute;
?>