<?php

function getAllProducers(){
    return executeQuery("SELECT * FROM producers");
}