#!/usr/bin/php
<?PHP

include("ft_is_sort.php");

$tab = array("!/@#;^", "42", "Hello World", "a", "ZzZzZz");

if (ft_is_sort($tab))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";

?>
