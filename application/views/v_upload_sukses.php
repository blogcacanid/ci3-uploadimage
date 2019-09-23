<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
    <title>Upload Image CodeIgniter 3</title>
</head>
<body>
    <h1>Membuat Upload Image Dengan CodeIgniter 3</h1>
    <ul>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
        <?php endforeach; ?>
    </ul>	
</body>
</html>

