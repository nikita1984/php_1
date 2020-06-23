<?php
function getUserByLogin($login) {
    return  queryOne("SELECT * FROM shopUsers WHERE name = '{$login}'");
}