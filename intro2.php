<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นำเสนอตัวเอง - วุฒิภัทร มากด้วง</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 500px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        .name-en {
            color: #667eea;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .info {
            text-align: left;
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .info p {
            margin: 10px 0;
            color: #555;
        }
        .label {
            font-weight: bold;
            color: #667eea;
        }
        .footer {
            color: #999;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>วุฒิภัทร มากด้วง</h1>
        <p class="name-en">Wuttipath Magdwang</p>
        
        <div class="info">
            <p><span class="label">ชื่อเล่น:</span> วุฒิ</p>
            <p><span class="label">อายุ:</span> 18 ปี</p>
            <p><span class="label">สถานที่อยู่:</span> ประเทศไทย</p>
            <p><span class="label">ความสนใจ:</span> การเขียนโปรแกรม</p>
            <p><span class="label">ทักษะ:</span> PHP, HTML, CSS, JavaScript</p>
        </div>
        
        <p><strong>เกี่ยวกับฉัน:</strong></p>
        <p>สวัสดีค่ะ ฉันชื่อวุฒิภัทร มากด้วง เป็นนักเรียนที่สนใจการเขียนโปรแกรม และพัฒนาเว็บไซต์</p>
        
        <div class="footer">
            <p>📅 วันที่: <?php echo date('d/m/Y'); ?></p>
            <p>⏰ เวลา: <?php echo date('H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>