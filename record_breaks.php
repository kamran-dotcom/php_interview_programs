<?php

/*

    Maria plays college basketball and wants to go pro. Each season she maintains a record of her play. She tabulates the number of times she breaks her season record for most points and least points in a game. Points scored in the first game establish her record for the season, and she begins counting from there.

    Example

    Scores are in the same order as the games played. She tabulates her results as follows:

                                    Count
        Game  Score  Minimum  Maximum   Min Max
        0      12     12       12       0   0
        1      24     12       24       0   1
        2      10     10       24       1   1
        3      24     10       24       1   1
    Given the scores for a season, determine the number of times Maria breaks her records for most and least points scored during the season.
 
 
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores) {
    // Write your code here
    $minScore = $maxScore = $scores[0];
    $minBreaks = $maxBreaks = 0;
    
    $count = count($scores);
    for ($i = 1; $i < $count; $i++) {
        if ($scores[$i] < $minScore) {
            $minScore = $scores[$i];
            $minBreaks++;
        } elseif ($scores[$i] > $maxScore) {
            $maxScore = $scores[$i];
            $maxBreaks++;
        }
    }
    
    return [$minBreaks, $maxBreaks];

}

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $n = intval(trim(fgets(STDIN)));

// $scores_temp = rtrim(fgets(STDIN));

// $scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$scores = [12,24,10,24];
$result = breakingRecords($scores);
print_r($result);
// fwrite($fptr, implode(" ", $result) . "\n");

// fclose($fptr);
