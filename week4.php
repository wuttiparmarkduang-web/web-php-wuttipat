<?php

function showMultiplicationWithWhileLoop($number) {
    $output = "=========================================\n";
    $output .= "       🔄 ตารางสูตรคูณแม่ $number (While Loop) 🔄\n";
    $output .= "=========================================\n";
    
  
    $i = 1; 
    
    while ($i <= 12) { // 2. เงื่อนไขการวนซ้ำ
        $result = $number * $i;
        
        // จัดตัวเลขให้ตรงหลักเพื่อความสวยงาม
        $multiplier = str_pad($i, 2, " ", STR_PAD_LEFT);
        $total = str_pad($result, 3, " ", STR_PAD_LEFT);
        
        $output .= "   $number  x  $multiplier  =  $total\n";
        
        $i++; // 3. เพิ่มค่ารอบ (ห้ามลืมเด็ดขาด)
    }
    // --- [ สิ้นสุด WHILE LOOP ] ---
    
    $output .= "=========================================\n";
    return $output;
}


function showAddition($a, $b) {
    $sum = $a + $b;
    $output = "-----------------------------------------\n";
    $output .= "       ➕ ผลลัพธ์การคำนวณการบวก\n";
    $output .= "-----------------------------------------\n";
    $output .= "   ตัวเลขที่ 1 : $a\n";
    $output .= "   ตัวเลขที่ 2 : $b\n";
    $output .= "   ผลรวมสุทธิ : $sum\n";
    $output .= "-----------------------------------------\n";
    return $output;
}


$result_output = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['multiplication'])) {
        $num = trim($_POST['number1'] ?? '');
        if ($num !== '' && is_numeric($num)) {
            $result_output = showMultiplicationWithWhileLoop((int)$num);
        } else {
            $result_output = "⚠️ กรุณากรอกตัวเลขสูตรคูณให้ถูกต้อง";
        }
    } elseif (isset($_POST['addition'])) {
        $a = trim($_POST['num_a'] ?? '');
        $b = trim($_POST['num_b'] ?? '');
        if ($a !== '' && $b !== '' && is_numeric($a) && is_numeric($b)) {
            $result_output = showAddition((int)$a, (int)$b);
        } else {
            $result_output = "⚠️ กรุณากรอกตัวเลขทั้ง 2 ตัวสำหรับการบวก";
        }
    }
}


echo '<style>
    body { font-family: monospace; padding: 20px; background-color: #f5f5f5; line-height: 1.5; }
    .box { background: white; padding: 20px; border: 1px solid #ccc; max-width: 500px; margin-bottom: 20px; }
    .form-group { margin-bottom: 10px; }
    label { display: inline-block; width: 150px; font-weight: bold; }
    input { padding: 5px; width: 100px; }
    button { padding: 5px 15px; cursor: pointer; background: #e1e1e1; border: 1px solid #999; }
    button:hover { background: #ccc; }
    pre { background: #222; color: #fff; padding: 15px; max-width: 500px; overflow: auto; border-radius: 4px; }
</style>';

echo '<h2>💻 โปรแกรมคำนวณคณิตศาสตร์ (PHP 100%)</h2>';

// ฟอร์มที่ 1: กรอกสูตรคูณ
echo '<div class="box">';
echo '<h3>1. ตารางสูตรคูณ (While Loop)</h3>';
echo '<form method="post">';
echo '<div class="form-group">';
echo '<label>แม่สูตรคูณที่ต้องการ:</label>';
echo '<input type="number" name="number1" required>';
echo '</div>';
echo '<button type="submit" name="multiplication">🔄 แสดงสูตรคูณ</button>';
echo '</form>';
echo '</div>';

// ฟอร์มที่ 2: กรอกเลขบวกกัน
echo '<div class="box">';
echo '<h3>2. โปรแกรมบวกเลข</h3>';
echo '<form method="post">';
echo '<div class="form-group">';
echo '<label>ตัวเลขตัวที่ 1:</label>';
echo '<input type="number" name="num_a" required>';
echo '</div>';
echo '<div class="form-group">';
echo '<label>ตัวเลขตัวที่ 2:</label>';
echo '<input type="number" name="num_b" required>';
echo '</div>';
echo '<button type="submit" name="addition">➕ คำนวณผลบวก</button>';
echo '</form>';
echo '</div>';

// ส่วนแสดงผลลัพธ์ (ถ้ามีการกดส่งข้อมูลมา)
if ($result_output !== "") {
    echo '<h3>📊 ผลลัพธ์จากการประมวลผล:</h3>';
    echo '<pre>' . $result_output . '</pre>';
}
?>