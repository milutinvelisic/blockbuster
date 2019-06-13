<?php

include '../../config/connection.php';
include 'functions.php';

$authors = getAuthorInfo();
$author = $authors[0];
var_dump($author);

$wordApp = new COM("Word.Application");
$wordApp->Visible = true;

$wordApp->Documents->Add();
$wordApp->Selection->TypeText("$author->imePrezime \n $author->kratakOpis \n $author->opis");
$wordApp->Documents[1]->SaveAs("AboutAuthor.doc");

header("Location: ../../index.php?p=portfolio");
