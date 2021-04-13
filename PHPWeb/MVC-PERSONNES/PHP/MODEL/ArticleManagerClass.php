<?php
class ArticleManager{
    punlic static function add(Article $obj){

        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Articles (descriptionArticle,prixArticle) VALUES (:descriptionArticle, :prixArticle) ");
        $q->bindValue(":descriptionArticle", $obj->getDescriptionArticle())

    }

}