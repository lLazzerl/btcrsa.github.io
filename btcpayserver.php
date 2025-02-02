{\rtf1\ansi\ansicpg1252\cocoartf2759
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs26 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
// Set environment variables\
putenv('BTCPAY_HOST=btcpay.EXAMPLE.com');\
putenv('NBITCOIN_NETWORK=mainnet');\
putenv('BTCPAYGEN_CRYPTO1=btc');\
putenv('BTCPAYGEN_ADDITIONAL_FRAGMENTS=opt-save-storage-s');\
putenv('BTCPAYGEN_REVERSEPROXY=nginx');\
putenv('BTCPAYGEN_LIGHTNING=clightning');\
putenv('BTCPAY_ENABLE_SSH=true');\
\
// Execute the btcpay-setup.sh script\
$output = shell_exec('. ./btcpay-setup.sh -i');\
\
// Print the output (optional)\
echo "<pre>$output</pre>";\
\
// Exit the script\
exit;\
?>\
}