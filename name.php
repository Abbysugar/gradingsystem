

<?php



function fullName($first_name, $middle_name, $last_name)
{
	return (ucwords($first_name) . " " . strtolower($middle_name) . " " . strtoupper($last_name));

}
 
echo fullName("Bukola", "Abiodun", "Bisuga"); 


