<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));
?>
<h1>Пожалуйста, авторизуйтесь!!</h1>
<form action="" method="post">
    <h3>Введите логин (по умолчанию: user)</h3>
    <input type="text" name="login">
    <h3>Введите пароль (по умолчанию: user)</h3>
    <input type="password" name="password">
    <h4>Проверьте введённые данные и нажмите отправить</h4>
    <input type="submit" value="login">
</form>
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$login = post('login');
$password = post('password');
// осуществляем поиск пользователя в БД по полученному логину
$user = getUserByLogin($login);
// Если пользователь был найден в БД ($user = true) и введённый им пароль совпадает с
// хешированным в БД, то автторизуем пользователя, если нет то кидаем текст отказа в авторизации
if($user && $user['password'] == getHash($password)){
// текущей сессии присваиваем идетификатор, равный id пользователя
$_SESSION['user_id'] = $user['id'];
echo "Вы авторизованы!!";
}else {
echo "Пошел вон, самозванец!";
}
exit;
}
?>
