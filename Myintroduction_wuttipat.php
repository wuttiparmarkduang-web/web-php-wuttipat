<?php
header('Content-Type: text/plain; charset=utf-8');

// ประกาศตัวแปรเก็บข้อมูล
$firstName = "วุฒิภัทร";
$lastName = "มากด้วง";
$nickname = "อาร์ม";
$major = "เทคโนโลยีสารสนเทศ";
$number = 19;
$age = 18;

// แสดงผลข้อมูลแนะนำตัว
echo "=== ยินดีที่ได้รู้จักครับ ===\n";
echo "ชื่อ-นามสกุล: นาย " . $firstName . " " . $lastName . "\n";
echo "ชื่อเล่น: " . $nickname . "\n";
echo "สาขาวิชา: " . $major . "\n";
echo "เลขที่: " . $number . "\n";
echo "อายุ: " . $age . " ปี\n";
echo "===========================\n";
?>