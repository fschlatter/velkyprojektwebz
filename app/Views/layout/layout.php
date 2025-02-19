<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    if (!empty($page_title)) echo $page_title;?></title>
    <?= $this->include("layout/cssjs.php");?>
</head>
<body>
    <?= $this->include("layout/navbar.php");?>
    <?= $this->section('content');?>
    <?= $this->include("layout/footer.php");?>
</body>
</html>