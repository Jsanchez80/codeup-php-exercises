<?php

$companies = [
    'Sun Microsystems' =>  [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' =>  [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' =>  [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' =>  [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' =>  [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' =>  [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' =>  [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];


/////////////////////////////////////////////////////////////////
// 2.Add code to output the $companies array in its current form.
///////////////////////////////////////////////////

// asort($companies);
// print_r($companies);

/////////////////////////////////////////////////////////////////
// 3.Sort the $companies array by company name and output the results.
///////////////////////////////////////////////////

ksort($companies);
	echo "======================" . PHP_EOL;
	echo "======================" . PHP_EOL;

foreach ($companies as $key => $company) {
	echo "$key" . PHP_EOL;
	echo "======================" . PHP_EOL;
		foreach($company as $key => $value) {
			echo "$value" . PHP_EOL;
		}

			echo "----------------------" . PHP_EOL;
			echo "======================" . PHP_EOL;

}

/////////////////////////////////////////////////////////////////
// 4.Sort the people in each company alphabetically. You will need to use a foreach loop and will need to reassign each inner array after sorting. Output the result.
///////////////////////////////////////////////////

