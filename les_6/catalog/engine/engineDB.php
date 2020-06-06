<?php
function getConnection()
{
    $dbConfig = include CONFIG_DIR . 'db.php';
    static $conn = null;
    if (is_null($conn)) {
        $conn = mysqli_connect(
            $dbConfig['host'],
            $dbConfig['login'],
            $dbConfig['password'],
            $dbConfig['dbName']
        );
        if (!$conn) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }
    return $conn;
}

function execute(string $sql)
{
    $result = mysqli_query(getConnection(), $sql);
    if (!$result) {
        var_dump(mysqli_error(getConnection()));
        exit;
    }
    return $result;
}

function SQLQuery(string $sql, string $resultType = '')
{
    switch ($resultType) {
        case 'All':
            return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
            break;
        case 'Array':
            return mysqli_fetch_array(execute($sql), MYSQLI_ASSOC);
            break;
        case '':
            return execute($sql);
    }
}

function closeConnection()
{
    return mysqli_close(getConnection());
}