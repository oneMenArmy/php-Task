<?php 
	function anagram($anagramOne, $anagramTwo)
	{
	    $lenOne = strlen($anagramOne);
	    $lenTwo = strlen($anagramTwo);

	    if ($lenOne == $lenTwo) { // check if anagram length are equal
	    $strOne = $anagramOne;
	    $arrOne = str_split($strOne); // convert anagram one to array

	    $strTwo = $anagramTwo;
	    $arrTwo = str_split($strTwo); // convert anagram two to array

	    $anagramOneElemCount = array_count_values($arrOne); // count anagram array values
	    $anagramTwoElemCount = array_count_values($arrTwo);

	    foreach ($anagramOneElemCount as $key => $val) // compare two anagram keys and val, if something  not match, return 'Is not anagram'
	    {
	    	if ($anagramTwoElemCount[$key] != $anagramOneElemCount[$key]) {
	    		return 'Is not anagram.';
	    	} 
	    }

	    return 'Is anagram.'; // if all checks was successful, return 'Is anagram'
	    } else {
	    	return 'Is not anagram.';
	    }
	}
