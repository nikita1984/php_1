<?php
function getUserByLogin($login) {
    // return  queryOne("SELECT * FROM shopUsers WHERE name = '{$login}'");
    return SQLQuery("SELECT * FROM shopUsers WHERE name = '{$login}'", 'Array');
}