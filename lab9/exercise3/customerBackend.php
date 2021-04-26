<?php
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
$beanpole = $_POST[beanpole];
$xBeanpole = $_POST[xBeanpole];
$xxBeanpole = $$_POST[xxBeanpole];
$Shipping = $_POST["shipping"];
$User = $_POST["username"];
$Pass = $_POST["pass"];
	
$Total = 0;
$Quantity = 0;
$Shipping = 0;

 
$Total = (39 * $Quantity) + $Shipping;
echo "Total Cost: " . $Total . "</p>";
?>