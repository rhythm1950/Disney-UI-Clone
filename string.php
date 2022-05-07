<?php
// explode(separator, array, limit(optional)) & implode(separator, array). join() and implode() are used for same purpose.
$str = "Hello world. It's a nice day.";
$new_arr = explode(" ", $str, 4);
print_r($new_arr);
echo "\n";

$str2 = "Hello world. It's a nice day.";
$new_arr2 = explode(" ", $str2, -1);
print_r($new_arr2);
echo "\n";

$str3 = ["Hello", "world.", "nice", "day"];
$new_arr3 = implode(" ", $str3);
print_r($new_arr3);
echo "\n";

$str4 = ["Hello", "world.", "nice", "day"];
$new_arr4 = join(" ", $str3);
print_r($new_arr4);
echo "\n";

//str_split(string, length) & chunk_split(string, length, end)
$str = "Yahoo Baba";
$new_arr = str_split($str, 4);
print_r($new_arr);
echo "\n";

$str2 = "Yahoo Baba";
$new_arr2 = chunk_split($str2, 3, "...");
print_r($new_arr2);
echo "\n \n";

// uppercase and lowercase functions -  strtolower, strtoupper, ucfirst, ucwords, lcfirst
$str = "Yahoo Baba";
$new_str = strtolower($str);
echo $new_str;
echo "\n";

$new_str = strtoupper($str);
echo $new_str;
echo "\n";

$str2 = "yahoo Baba";
$new_str2 = ucfirst($str2);
echo $new_str2;
echo "\n";

$new_str = lcfirst($str);
echo $new_str;
echo "\n";

$str3 = "yahoo baba";
$new_str3 = ucwords($str3);
echo $new_str3;
echo "\n \n";

// length & count functions
$str = "Yahoo Baba";
echo strlen($str);
echo "\n";

$str = "Yahoo Baba";
echo str_word_count($str);
echo "\n";

$str = "Yahoo Baba";
$new_arr = str_word_count($str, 2);
print_r($new_arr);
echo "\n";

$str = "Hello world. The world is beautiful.";
echo substr_count($str, "world", 10, 20);
echo "\n";

$str = "Hello world. The world is beautiful.";
echo substr_count($str, "World"); //case sensitive
echo "\n \n";

// search & find position functions - strpos, strrpos, stripos, strripos
$a = "I love php, I love js too!";
echo "strpos:" . strpos($a, "love");
echo "\n";
echo "strpos:" . strpos($a, "love", 10);
echo "\n";

echo "strrpos:" . strrpos($a, "I");
echo "\n";

echo "stripos:" . stripos($a, "love");
echo "\n";
echo "strripos:" . strripos($a, "I");
echo "\n \n";

// string search functions - strstr, stristr, srchr, strrchr, strpbrk
$a = "I love php, I love js too!";
echo strstr($a, "love");
echo "\n";

$a = "I love php, I love js too!";
echo strchr($a, "love");
echo "\n";

$a = "I love php, I love js too!";
echo strrchr($a, "love");
echo "\n";

$a = "I love php, I love js too!";
echo strstr($a, "love", true);
echo "\n";

$a = "I love php, I Love js too!";
echo stristr($a, "Love", true);
echo "\n";

$a = "I love php, I love js too!";
echo stristr($a, "ov");
echo "\n \n";

// substr(string, start, length(optional))
$a = "I love php, I love js too!";
echo substr($a, 5, 10);
echo "\n \n";

// replace functions - str_replace(find, replace, string), str_ireplace, substr_replace(string, replacement, start, length), strtr(string, from, to), strtr(string, array)
$a = "I love php, I love php too!";
echo str_replace("php", "js", $a);
echo "\n";

$a = "I love php, I love php too!";
$find = ["love", "PHP"];
$replace = ["like", "js"];
echo str_replace($find, $replace, $a);
echo "\n";
echo str_ireplace($find, $replace, $a);
echo "\n";

$a = "I love php, I love php too!";
echo substr_replace($a, "js", 3, -5);
echo "\n";

$a = "I love php, I love php too!";
echo strtr($a, "oe", "ip");
echo "\n";

$a = "I love php, I love php too!";
$arr = ["I" => "Me", "love" => "hate"];
echo strtr($a, $arr);
echo "\n \n";

// compare functions - strcmp(string1, string2), strcasecmp(string1, string2), strncmp,  strncasecmp, strnatcmp, strnatcasecmp, substr_compare(string1, string2, start, length(optional), case), similar_text(string1, string2, percent)
