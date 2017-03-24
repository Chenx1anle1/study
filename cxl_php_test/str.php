<?php
echo <<<str
<hr>题目:
//1,返回字符串的长度；
<hr>Code:
echo strlen("shddnnn");
<hr>out:
str;
echo strlen("shddnnn");

echo <<<str
<hr>题目:
//2.返回字符串的一部分
<hr>Code:
echo substr("hello word",7);
<hr>out:
str;
echo substr("hello word",7);

echo <<<str
<hr>题目:
//3查找一个字符串在另一个字符串中第一次出现的位置，区分大小写
<hr>Code:
echo strpos("have a good time,you must oo","o");
<hr>out:
str;
echo strpos("have a good time,you must oo","o");

echo <<<str
<hr>题目:
//4查找一个字符串在另一个字符串中第一次出现的位置，不区分大小写
<hr>Code:
echo stripos("have a good time,you HAVE A","a");
<hr>out:
str;
echo stripos("have a good time,you HAVE A","a");

echo <<<str
<hr>题目:
//5查找一个字符串在另一个字符串中最后出现的位置，区分大小写
<hr>Code:
echo strrpos("have a good time ,you vary HAPPY","a");
<hr>out:
str;
echo strrpos("have a good time ,you vary HAPPY","a");

echo <<<str
<hr>题目:
//6 别名strchr()查找一个字符串在另一个字符串中最后出现的位置，不区分大小写
<hr>Code:
echo strripos("have a good time ,you vary HAPPY","a");
<hr>out:
str;
echo strripos("have a good time ,you vary HAPPY","a");

echo <<<str
<hr>题目:
//8查找一个字符串在另一个字符串中第一次出现，并返回剩余的部分，不区分大小写
<hr>Code:
echo stristr("HAVE a good time","a");
<hr>out:
str;
echo stristr("HAVE a good time","a");

echo <<<str
<hr>题目:
//7一个字符串在另一个字符串中第一次出现，并返回剩下的部分，区分大小写
<hr>Code:
echo strstr("have agood time ","a");
<hr>out:
str;
echo strstr("have agood time ","a");

echo <<<str
<hr>题目:
//9查找一个字符串在另一个字符串中最后一次出现的位置，并返回剩余的部分，区分大小写
<hr>Code:
echo strrchr("have a good time ","a");
<hr>out:
str;
echo strrchr("have a good time ","a");

echo <<<str
<hr>题目:
/**
 * 10 have 替换 a
 * 如果搜索的字符串是数组，那么他将返回数组
 * 如果他搜索的字符串是数组，那么他将对数组中的每一个元素进行查找和替换，
 * 如果同时需要对数组进行查找和替换，并且需要替换的元素少于查找的元素的数量，那么多余元素将会用空字符进行替换
 * 如果查找的是数组，替换的是字符串，那么替代字符串将会对所有查找到的值起作用
 *
 */
<hr>Code:
echo str_replace("a","have","have a good time");
<hr>out:
str;
echo str_replace("a","have","have a good time");

echo <<<str
<hr>题目:
//11返回反转后的字符串
<hr>Code:
echo strrev("hollo world");
<hr>out:
str;
echo strrev("hollo world");

echo <<<str
<hr>题目:
//12移除字符串两边的空白字符或其他预定义字符
<hr>Code:
echo trim("hello  world","hed");
<hr>out:
str;
echo trim("hello  world","hed");

echo <<<str
<hr>题目:
//13移除字符串左边的空白字符或其他预定义字符
<hr>Code:
echo ltrim("hello world","hed");
<hr>out:
str;
echo ltrim("hello world","hed");

echo <<<str
<hr>题目:
//14移除字符串左边的空白字符或其他预定义字符
<hr>Code:
echo rtrim("hello world","hed");
<hr>out:
str;
echo rtrim("hello world","hed");

echo <<<str
<hr>题目:
//15函数剥去了字符串中HTML，XML，以及PHP的标签，无法通过allow参数改变
<hr>Code:
echo strip_tags("hello<b>word<b/>");
<hr>out:
str;

echo <<<str
<hr>题目:
//16把预定义字符“>”大于和“<”等装换为HTML实体
<hr>Code:
echo htmlspecialchars("This is some<b>bold</b> text.");
<hr>out:
str;
echo htmlspecialchars("This is some<b>bold</b> text.");

echo <<<str
<hr>题目:
//16把所有的字符串转换成小写
<hr>Code:
echo strtolower("Hollo WOLde");
<hr>out:
str;
echo strtolower("Hollo WOLde");

echo <<<str
<hr>题目:
//17把所有的字符串转换为大写
<hr>Code:
echo strtoupper("helloWorld");
<hr>out:
str;
echo strtoupper("helloWorld");

echo <<<str
<hr>题目:
//18 把一个字符串中第一个字符改为大写
<hr>Code:
echo ucfirst("hello world");
<hr>out:
str;
echo ucfirst("hello world");

echo <<<str
<hr>题目:
//19把第一个字符串中首字母转换成小写
<hr>Code:
echo lcfirst("HEKFKF　　　ＤＪＪ");
<hr>out:
str;
echo lcfirst("HEKFKF　　　ＤＪＪ");

echo <<<str
<hr>题目:
//20把每个单词的首字母转换成大写
<hr>Code:
echo ucwords("hello world");
<hr>out:
str;

echo <<<str
<hr>题目:
//字符串拆分成数组
<hr>Code:
\$b="ddjdhh kdkdk dhjd";
print_r (explode(" ",\$b));
<hr>out:
str;
$b="ddjdhh kdkdk dhjd";
print_r (explode(" ",$b));


/**
 * Created by PhpStorm
 * User: Administrator
 * Date: 2017/3/23
 * Time: 10:12
 */
