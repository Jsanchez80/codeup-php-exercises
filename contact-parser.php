<?php



function parseContacts($contactList)
{
     $contacts = array();

// $filename = 'contacts.txt';
// $handle = fopen($filename, 'r');
// $contents = fread($handle, filesize($filename));
// $contentsArray = explode("\n", $contents);
// fclose($handle);
    // todo - read file and parse contacts
	$lists = 'contacts.txt';
    $handle = fopen($lists, 'r');
    $filtered = fread($handle, filesize($lists));
    $filteredArray = explode("\n", $filtered);
    $sfilteredArray = $filteredArray;
    array_push($sfilteredArray[1]);
    $randArray = array_pop($filteredArray);
    $secondPopArray = array_pop($filteredArray);
    fclose($handle);
    
    
    // foreach($filteredArray as $key => $array) {

        echo $array . PHP_EOL;
    }
    // // returns the contents of lists.txt
    return $filteredArray;

    // // print_r($readArray);
}
// echo parseContacts($lists);
var_dump(parseContacts('contacts.txt'));



