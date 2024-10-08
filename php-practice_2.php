<?php
// Q1 tic-tac問題
<?php
echo '１から１００までのカウントを開始します' . "\n";

for ($i = 0; $i <= 100; $i++) {
    switch ($i){
        case $i % 4 == 0:
            echo 'tic' . "\n";
            break;
        
        case $i % 5 == 0:
            echo 'tac' . "\n";
            break;
            
        case $i % 4 == 0:
        case $i % 5 == 0;
            echo 'tic-tac' . "\n";
            break;
            
        default:
            echo $i . "\n";
            break;
    }
}

// Q2 多次元連想配列
//問題1
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
// 問題2
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $key => $personal_info) {
    echo $key+1 . '番目の' . $personal_info['name'] . 'のメールアドレスは' . $personal_info['mail'] . 'で、電話番号は' . $personal_info['tel'] . 'です。' . "\n";
}
//問題3
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($ageList as $key => $age) {
    $personalInfos[$key]['age'] = $age;    
}

var_dump($personalInfos);


// Q3 オブジェクト-1
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';


// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題1
<?php

$datetime = new DateTime;
$interval = new DateInterval('P1M');
$newDate1 = $datetime->sub($interval);
echo $newDate1->format('Y-m-d');

//問題2
<?php

$datetime = new DateTime;
$target = date_create('1992-4-25');
$newDate1 = date_diff($datetime, $target);
echo 'あの日から' .$newDate1->format("%a") . '日経過しました。';



?>