<?php
//9. Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
//производит транслитерацию и замену пробелов на подчеркивания (аналогичная
//задача решается при конструировании url-адресов на основе названия статьи в блогах).

/* Решение */
// Объявим функцию
/** Функция транслитерации строки
 * @param {string} $inputString - входная строка для дальнейшего преобразования
 * @param {array} $dictionary - массив с ключами преобразования
 * @return {string} $outputString - исходная строка результатом преобразования
 */

function transliteration($inputString, $dictionary)
{
    $outputString = '';
    if (is_string($inputString)) {
        for ($i = 0; $i < mb_strlen($inputString); $i++) {
            if (key_exists(mb_strtolower(mb_substr($inputString, $i, 1)), $dictionary)) {
                $outputString .= $dictionary[mb_strtolower(mb_substr($inputString, $i, 1))];
            }         
        }
    }
    return $outputString;
}

// Объявим массив с ключами преобразования и входную строку
$dictionary = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '_'
];

$inputText = 'Привет мир';

// Осуществим вывод
echo transliteration($inputText, $dictionary);