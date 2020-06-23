<?php
function getUserByLogin($login) {
    return SQLQuery("SELECT * FROM shopUsers WHERE name = '{$login}'", 'Array');
}