<?php
if($_SESSION["utilisateur"]->getIdRole()==1){
    header("location:index.php?page=PageAdmin");
}else{
    header("location:index.php?page=PageUser");
}
?>