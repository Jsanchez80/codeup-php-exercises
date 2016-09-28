<?php



//  Ex.  $newArray = [];
//     $person[0] == 'Jane'
//     $person[1] == 2104450000

// $newArray['name'] = $person[0];
// $newArray['phone'] = $person[1];

function formatNumber($number) {
    $arrayOfNumbers = str_split("", $number);
    $string = "(" . $arrayOfNumbers[0]
            . $arrayOfNumbers[1]
            . $arrayOfNumbers[2]
            . $arrayOfNumbers[3]
            . ")";
            . $arrayOfNumbers[4]
            . $arrayOfNumbers[5]
            . $arrayOfNumbers[6]
            . $arrayOfNumbers[7]
            . $arrayOfNumbers[8]
            . $arrayOfNumbers[9]
            . $arrayOfNumbers[10]);

        return $string;
}

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
    $filtered = trim(fread($handle, filesize($lists)));
    fclose($handle);

    $filteredArray = explode("\n", $filtered);
    foreach($filteredArray as $person) {
        $personArray = explode("|", $person);
        $contacts[] = $personArray;
        var_dump($personArray);
        $personArrayWithKeys = [];
        $personArrayWithKeys['name'] = $personArray[0];
        $personArrayWithKeys['number'] = $personArray[1];
    }
    
    // // returns the contents of lists.txt
    return $filteredArray;

    // // print_r($readArray);
}
// echo parseContacts($lists);
var_dump(parseContacts('contacts.txt'));

