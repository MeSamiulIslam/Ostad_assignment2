<?php

class StringProcessor
{
    private $strings;

    public function __construct(array $strings)
    {
        $this->strings = $strings;
    }

    private function countVowels(string $str): int
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;

        foreach (str_split($str) as $char) {
            if (in_array($char, $vowels)) {
                $count++;
            }
        }

        return $count;
    }

    private function reverseString(string $str): string
    {
        return strrev($str);
    }

    public function processStrings(): void
    {
        foreach ($this->strings as $string) {
            $vowelCount = $this->countVowels($string);
            $reversedString = $this->reverseString($string);

            $this->displayResult($string, $vowelCount, $reversedString);
        }
    }

    private function displayResult(string $original, int $vowelCount, string $reversed): void
    {
        echo "Original String: $original, Vowel Count: $vowelCount, Reversed String: $reversed\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];
$stringProcessor = new StringProcessor($strings);
$stringProcessor->processStrings();

?>
