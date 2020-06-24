<?php
/** Осуществляет поиск пользователя по введённому им при аутентификации логину,
 * в случае успеха возвращает массив с данными пользователя, и ноль в случае ошибки
 * @param $login - Полученный от пользолвателя логин
 */
function getUserByLogin(string $login)
{
    return SQLQuery("SELECT * FROM shopUsers WHERE name = '{$login}'", 'Array');
}