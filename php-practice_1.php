<?php
// Q1 変数と文字列
<?php
$name = '安藤';
echo '私の名前は「' . $name . '」 です';


// Q2 四則演算
<?php
$num = 1;
$num = $num * 5 * 4;
echo "$num \n";

$num = $num / 2;
echo $num;

// Q3 日付操作
<?php
date_default_timezone_set('Asia/Tokyo');

echo date("現在時刻は、Y年m月d日 H時i分s秒です。")


// Q4 条件分岐-1 if文
<?php
$device = 'p';
if ($device == 'windows' || $device == 'mac'){
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
<?php
$age = 18;
$message = ($age > 17) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
<?php
$kantou = ['東京都', '群馬県', '栃木県', '千葉県', '茨城県', '神奈川県', '埼玉県'];
echo $kantou[2] . 'と' . $kantou[3] . 'は関東地方の都道府県です';

// Q7 連想配列-1
<?php
$kantou = ['東京都' => '新宿区', 
         '神奈川県' => '横浜市', 
         '千葉県' => '千葉市', 
         '埼玉県' => 'さいたま市', 
         '栃木県' => '宇都宮市', 
         '群馬県' => '前橋市', 
         '茨城県' => '水戸市'];
foreach ($kantou as $x => $y) {
    echo $y . "\n";
}

// Q8 連想配列-2
<?php
$kantou = ['東京都' => '新宿区', 
         '神奈川県' => '横浜市', 
         '千葉県' => '千葉市', 
         '埼玉県' => 'さいたま市', 
         '栃木県' => '宇都宮市', 
         '群馬県' => '前橋市', 
         '茨城県' => '水戸市'];

foreach ($kantou as $territory => $prefectural_capital){
   if ($territory == '埼玉県') {
       echo $territory . 'の県庁所在地は、' . $prefectural_capital . 'です。';
   }
}

// Q9 連想配列-3
<?php
$kantou = ['東京都' => '新宿区', 
         '神奈川県' => '横浜市', 
         '千葉県' => '千葉市', 
         '埼玉県' => 'さいたま市', 
         '栃木県' => '宇都宮市', 
         '群馬県' => '前橋市', 
         '茨城県' => '水戸市'];
$kantou['愛知県'] = '名古屋市';
$kantou['大阪府'] = '大阪市';

foreach ($kantou as $territory => $prefectural_capital){
   if ($territory !== '愛知県' && $territory !== '大阪府') {
       echo $territory . 'の県庁所在地は、' . $prefectural_capital . 'です。' . "\n";
   }else{
       echo $territory . 'は関東地方ではありません' . "\n";
   }
}

// Q10 関数-1
<?php
function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
<?php

function calcTaxInPrice($price){
    return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . 'の商品の税込み価格は' . $taxInPrice . 'です。';

// Q12 関数とif文
<?php

function distinguishNum($num){
    if ($num % 2 == 0){
        echo $num . 'は偶数です。' . "\n";
    }else{
        echo $num . 'は奇数です。' . "\n";
    }
}
distinguishNum(10);
distinguishNum(9);


// Q13 関数とswitch文
<?php

function evaluateGrade($num){
    switch ($num){
        case 'A':
        case 'B':    
            return '合格です。' . "\n";
            break;
        
        case 'C':
            return '合格ですが追加課題があります。' . "\n";
            break;
        
        case 'D':
            return '不合格です。' . "\n";
            break;
            
        default:
            return '「判定不明です。講師に問い合わせてください。」' . "\n";
            break;
            
    }
}

echo evaluateGrade('B');
echo evaluateGrade('C');

?>