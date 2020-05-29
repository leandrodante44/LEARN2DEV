<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
   include 'menu.php';
   ?>
<?php

if($_POST['hdnedit'] == 'true' && empty($_FILES["userfile"]["name"])){
    $newfilename = $_POST['name_file'];
}else{
    $uploaddir = '/wamp64/www/LEARN2DEV/upload/experience/';
    $temp = explode(".", $_FILES["userfile"]["name"]);
    $newfilename = round(microtime(true)) . '_' .$temp[0]. '.' . end($temp);
    $uploadfile = $uploaddir . $newfilename;
    if (move_uploaded_file($_FILES['userfile']['tmp_name'] , $uploadfile)) {
        //echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        //echo "Possível ataque de upload de arquivo!\n";
    }
}
?> 
<script src="js/experience.js"></script>
<script>
    salvarEXPERIENCE(
        "<?php echo $_POST['txtName']?>",
        "<?php echo preg_replace( "/\r|\n/", "<br>",$_POST['txtdesc'])?>", 
        "<?php echo $_GET['u']?>", 
        '<?php echo $_POST['slcType']?>', 
        '<?php echo $_POST['slcTech']?>', 
        '<?php echo $_POST['txtInto']?>', 
        '<?php echo $_POST['txtLinkCapa']?>',
        "<?php echo $newfilename?>", 
        <?php echo $_POST['hdnedit']?>, 
        '<?php echo $_POST['hdnEx']?>');
</script>