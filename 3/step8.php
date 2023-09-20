<?php
// Input sentence
$sentence = "Hello, how are you today?";

// Initialize variables
$reversedSentence = "";
$word = "";

// Iterate through the sentence character by character
for ($i = 0; $i < strlen($sentence); $i++) {
    // Check if the current character is not a space or punctuation
    if ($sentence[$i] !== ' ' && $sentence[$i] !== ',' && $sentence[$i] !== '?') {
        // Build the current word
        $word .= $sentence[$i];
    } else {
        // If a space or punctuation is encountered, add the word to the reversed sentence
        $reversedSentence = $word . ' ' . $reversedSentence;
        $word = ""; // Reset the word
    }
    
}

// Add the last word (without a space or punctuation at the end) to the reversed sentence
$reversedSentence = $word . ' ' . $reversedSentence;

// Output the reversed sentence
echo trim($reversedSentence); // Trim to remove leading/trailing spaces

?>
