<?php

//Based on code from the following URL:
//http://snipplr.com/view.php?codeview&id=20539
  $search_replace_mapping = array(
    // country prefix normalization
    '+00' => '+', '++' => '+',
    // country prefix is always 00
    '+' => '00',
    // funny user input goulash
    'i' => '1', 'I' => '1', 'l' => '1',
    'o' => '0', 'O' => '0',

    // ([^\diIloO\+]*)
    // ...brackets
    '(' => '', ')' => '',
    '[' => '', ']' => '',
    '[' => '', ']' => '',
    // slashes
    '/' => '', '\\\\' => '',
    // dashes
    '-' => '', '_' => '',
    // whitespaces
    ' ' => ''
  );

  function normalizeTelephoneNumber($telephone_number) {
    global $search_replace_mapping;
    // fetch search and replace arrays
    $search = array_keys($search_replace_mapping);
    $replace = array_values($search_replace_mapping);

    // simple string replacement
    $telephone_number = str_replace($search, $replace, $telephone_number);

    // lets kick out all dutty stuff which is left...
    $telephone_number = preg_replace('~[^\d]~', '', $telephone_number);

    return $telephone_number;
  }

?>