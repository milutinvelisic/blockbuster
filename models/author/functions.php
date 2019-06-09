<?php

function getAuthorInfo()
{
    return executeQuery("SELECT * FROM author");
}
