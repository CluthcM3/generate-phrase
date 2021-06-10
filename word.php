<?php
include 'list.php';

$title = "
\033[01;31m ___    _                  _    _
(  _`\ (_ )               ( )_ ( )                         
| ( (_) | |  _   _    ___ | ,_)| |__       ___ ___     __  
| |  _  | | ( ) ( ) /'___)| |  |  _ `\   /' _ ` _ `\ /'__`\ \033[0m
| (_( ) | | | (_) |( (___ | |_ | | | | _ | ( ) ( ) |(  ___/
(____/'(___)`\___/'`\____)`\__)(_) (_)(_)(_) (_) (_)`\____) 
@Date : Thursday, June 10, 2021, 12:34
@Author : ClutchM31337
Generate Phrase - Made By : https://github.com/CluthcM3
";

echo $title . PHP_EOL;
echo "Ingin Generate brp ?? : ";
$in = fgets(STDIN);
echo "save sebagai : ";
$sv = trim(fgets(STDIN));

for ($i=1;$i<=$in ; $i++)
{
    $rand = rand(0,7775);
    $data = "$wordlis1[$rand] $wordlis2[$rand] $wordlis3[$rand] $wordlis4[$rand] $wordlis5[$rand] $wordlis6[$rand] $wordlis7[$rand] $wordlis8[$rand] $wordlis9[$rand] $wordlis10[$rand] $wordlis11[$rand] $wordlis12[$rand]\n";
    echo "$i => $data";
    file_put_contents($sv,$data,FILE_APPEND);
}











