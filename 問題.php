
# 配列操作

```php
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

```

## Q1

$countriesから「カナダ」を出力してください
<?php

$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

echo $countries[2]; 

?>

## Q2

$countriesの'ロツア'を'ロシア'に再代入して$countriesをvar_dumpしてください

<?php
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

$countries[3] = 'ロシア';
var_dump($countries);
?>

## Q3

$countriesの末尾に中国を追加してください

<?php
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

$countries[] = '中国';
var_dump($countries);
?>

```php
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
]

```

## Q4

$daysから「火曜日」を出力してください

<?php
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

$week = $days['tuesday'];
echo $week;
?>

## Q5

$daysの中の間違っているvalueを訂正して$daysをvar_dumpしてください

<?php
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

$days['wednesday'] = '水曜日';
var_dump($days);

?>
## Q6

$daysに「saturday」というキーで、「土曜日」のvalueを追加してください
<?php
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

$days['saturday'] = '土曜日';
var_dump($days);

?>
# 繰り返し構文

```php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

```

## Q1

$arrayに対し、foreachを使用して以下の出力を行ってください

```
1つめはa
2つめはb
3つめはc
4つめはd
5つめはe
6つめはf

```
<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

foreach ($array as $x => $y) {
    echo $x+1 . 'つめは' . $y . "\n";
}

?>
## Q2

$arrayに対し、forを使用して以下の出力を行ってください

```
1つめはa
2つめはb
3つめはc
4つめはd
5つめはe
6つめはf

```
<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

for ($i = 0; $i <= 5; $i++) {
    echo $i+1 . 'つめは' . $array[$i] . "\n";
}

?>

# 多次元連想配列

```php
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
];

```

## Q1

foreachを使用して以下の出力を行ってください

```
カレーライスはインド料理で値段は1200円です。
スパゲッティはイタリア料理で値段は1000円です。
ボルシチはロシア料理で値段は2000円です。

```
<?php
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
];

foreach ($menu as $x => $y) {
    echo $x . 'は' . $y['ジャンル'] . 'で値段は' . $y['値段'] . '円です。' . "\n";
}

?>

## Q2

$menuに「そば」というkeyに対してvalueが配列で値段が800、ジャンルが日本料理となる値を追加してください


## Q3

各料理のvalueに「人気度」というキーで以下の値を追加してください

- カレーライス: 5
- スパゲッティ: 3
- ボルシチ: 4
- そば: 4


<?php
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
];

$menu['そば'] = ['値段' => 800 , 'ジャンル' => '日本料理'];


$rating = [5, 3, 4, 4];
$i = 0;

foreach ($menu as $key => $value) {
    $menu[$key]['人気度'] = $rating[$i++];
}

var_dump($menu);
?>
# 関数

## Q1

割引価格を計算する関数を作成します。以下の条件のもと、下記のように割引価格を表示しましょう。

### 条件

- 通常価格を引数に受け取って割引価格に変換して返す関数を、calcDiscountPrice という名前で定義してください。
- 割引価格を$priceとして定義し、それを引数に上記の関数を実行しましょう。
- 関数を実行した返り値を、$discountPriceとして受け取って、下記のような文章を表示してください。
- 割引率は 20% として計算してください。

### 出力例

```
800円の商品が今だけ640円です！

```
<?php
function calcDiscountPrice($price)
{
    return $price * 0.8;
}

$price = 800;
$discountPrice = calcDiscountPrice($price);

echo $price . '円の商品が今だけ' . $discountPrice . 'です！'; 
?>

## Q2

2つの値のうちどちらが大きいかを判定する関数を作成ます。以下の条件のもと処理を記述しましょう。

### 条件

- 関数名はwhichIsBiggerという名前で定義してください。
- 第一引数のほうが大きかったら、「第一引数の方が大きい。値："◯"」という文字列を返してください。
- 第二引数のほうが大きかったら、「第二引数の方が大きい。値："◯"」という文字列を返してください。

### 出力例

```
第一引数の方が大きい。値："100"
第二引数の方が大きい。値："50"

```
<?php
function whichIsBigger($a, $b)
{
    switch ($a) {
        case $a > $b:
            echo '第一引数の方が大きい。値:' . '"' . $a . '"';
            break;
            
        case $b > $a:
            echo '第二引数の方が大きい。値:' . '"' . $b . '"';
            break;
        
        case $a === $b:
            echo '第一引数と第二引数は同じ値です。';
            break;
            
        default:
            echo '判定不能';
            break;
    }
}

whichIsBigger(120, 130);

?>

## Q3

引数に渡した整数を素数かどうか判定する関数を作成します。以下の条件のもと、渡した数字が素数かどうか判定しましょう。

### 条件

- 整数を引数に受け取って、素数だった場合にtrue、そうではなかった場合にfalseを返す関数を、isPrimeNumberという名前で定義してください。
- 返り値をvar_dumpで出力しましょう。

### ヒント

- 素数に1と0は含まないので、1以下の数字はfalseを返すようにすると書きやすくなります。
- 自分より小さい数字で割り切れないので、うまくfor文を使ってあげると計算することができます。


<?php
function isPrimeNumber($num)
{
    if ($num <= 1) {
        return false;
    }
    
    if ($num == 2) {
        return true;
    }
    
    for($i = 3; $i <= sqrt($num); $i += 2){
        if($num % $i == 0) {
            return false;
        } 
    }
    
    return true;
}

var_dump(isPrimeNumber(18));

?>
# オブジェクト

## Q1

商品クラスを使用して、条件を満たした上で下記の文字列を出力してください。

### 条件

- コンストラクタメソッドを作成してください
- 引数から `$param1` 受け取った商品名を `name` プロパティに格納してください
- 引数から `$param2` 受け取った商品の価格を `price` プロパティに格納してください

### 出力文字列

```
りんごの税抜価格は100円です。

```

```php
class Item
{
    public $name;
    public $price;
}

```

<?php

class Item
{
    public $name;
    public $price;
    
    
    public function __construct($param1, $param2)
    {
        $this->name = $param1;
        $this->price = $param2;
    }
}

$apple = new Item('りんご', 100);
echo $apple->name . 'の税抜き価格は' . $apple->price . '円です。';

?>
## Q2

Q1で使用した商品クラスを同じく使用して、条件を満たした上で下記の文字列を出力してください。

### 条件

- priceを税込価格に変換して返すメソッド名は `fetchCalcTaxInPrice` と命名してください。
- fetchCalTaxInPriceメソッドの返り値を文字列結合して、最終的な文字列を完成させてください。

### 出力文字列
みかんの税込価格は220円です。

<?php

class Item
{
    public $name;
    public $price;
    
    
    public function __construct($param1, $param2)
    {
        $this->name = $param1;
        $this->price = $param2;
    }
    
    public function fetchCalcTaxInPrice()
    {
        echo $this->name . 'の税込価格は' . $this->price . '円です。';
    }
}

$orange = new Item('みかん', 220);
$orange->fetchCalcTaxInPrice();


?>