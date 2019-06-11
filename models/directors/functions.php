<?php

function getAllDirectors(){
    return executeQuery("SELECT * FROM directors");
}