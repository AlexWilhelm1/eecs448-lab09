<?php
//access the global array called $_POST to get the values from the
text fields

$spainAnswer = $_POST["spainCapital"];
$japanAnswer = $_POST["japanCapital"];
$libyaAnswer = $_POST["libyaCapital"];
$ecuadorAnswer = $_POST["ecuadorCapital"];
$bulgariaAnswer = $_POST["bulgariaCapital"];

$q1 = 0;
$q2 = 0;
$q3 = 0;
$q4 = 0;
$q5 = 0;

if ($spainAnswer == "Madrid")
{
 q1 = 1;
}
if ($japanAnswer == "Tokyo")
{
 q2 = 1;
}
if ($libyaAnswer == "Tripoli")
{
 q3 = 1;
}

if ($ecuadorAnswer == "Quito")
{
 q4 = 1;
}

if ($bugariaAnswer == "Sofia")
{
 q5 = 1;
}

function quizTotal($q1,q2,q3,q4,q5)
{
 $total = $q1 + $q2 + $q3 + $q4 + $q5;
 return $total;
}


echo "Question 1: What is the capital of Spain:<br>";
echo "You answered " .$spainAnswer. "<br>";
echo "Correct answer: Madrid<br><br>";

echo "Question 2: What is the capital of Japan:<br>";
echo "You answered " .$japanAnswer. "<br>";
echo "Correct answer: Tokyo<br><br>";

echo "Question 3: What is the capital of Libya:<br>";
echo "You answered " .$libyaAnswer. "<br>";
echo "Correct answer: Tripoli<br><br>";

echo "Question 4: What is the capital of Ecuador:<br>";
echo "You answered " .$ecuadorAnswer. "<br>";
echo "Correct answer: Quito<br><br>";

echo "Question 5: What is the capital of Bulgaria:<br>";
echo "You answered " .$bulgariaAnswer. "<br>";
echo "Correct answer: Sofia<br><br>";

echo "Score: " .$total. "/5 Correct<br>";
echo "Percentage: " . ( quizTotal(q1, q2, q3, q4, q5) / 5 ) * 100 . " %<br>";
?>