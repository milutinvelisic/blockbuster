<?php

function getAllGenres(){
    return executeQuery("SELECT * FROM genres");
}