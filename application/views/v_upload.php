<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
    <title>Upload Image CodeIgniter 3</title>
</head>
<body>
    <h1>Membuat Upload Image Dengan CodeIgniter 3</h1>
    <?php echo $error;?>
    <?php echo form_open_multipart('upload/aksi_upload');?>
        <input type="file" name="nama_berkas" />
        <br /><br />
        <input type="submit" value="upload" />
    <?php echo form_close(); ?>
</body>
</html>

