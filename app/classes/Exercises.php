<?php

namespace App\classes;

class Exercises
{

    /**
     * @description: Exercise 1: Simple Calculator
    */
    public function calculator(float $num1, float $num2, $operator): float|string
    {
        return match ($operator) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            '*' => $num1 * $num2,
            '/' => $num1 / $num2,
            default => 'Invalid operator',
        };
    }

    /**
     * @description: Exercise 2: Prime Numbers
    */
    public function isPrime(int $num): bool
    {
        $validator = 0;
        for($i=2; $i<($num/2+1); $i++){
            if($num%$i===0){
                $validator ++;
            }
        }
        return $validator === 0
            ? $num." is a prime number."
            : $num." is not a prime number.";
    }

    /**
     * @description: Exercise 3: Factorial
    */
    public function factorial(int $num): int
    {
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    /**
     * @description: Exercise 4: Palindrome
    */
    public function isPalindrome(string $word): string
    {
        $wordBreak = str_split($word);
        $wordReverse = array_reverse($wordBreak);
        $wordReverse = implode($wordReverse);
        return $word === $wordReverse
            ? $word." is a palindrome."
            : $word." is not a palindrome.";
    }

    /**
     * @description: Exercise 5: Table
    */
    public function table(int $num): string
    {
        $table = "";
        for ($i = 1; $i <= 10; $i++) {
            $result = $num*$i;
            $table .= "$num x $i = $result<br>";
        }
        return $table;
    }

    /**
     * @description: Exercise 6: Vowel Counter
    */
    public function vowelCounter(string $word): int
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $wordBreak = str_split($word);
        $counter = 0;
        foreach ($wordBreak as $letter) {
            if (in_array($letter, $vowels)) {
                $counter++;
            }
        }
        return $counter;
    }

    /**
     * @description: Exercise 7: Grade Average
    */
    public function gradeAverage(float $grade1, float $grade2, float $grade3): float
    {
        $avg = ($grade1 + $grade2 + $grade3) / 3;
        return round($avg, 2);
    }

    /**
     * @description: Exercise 8: : Interest Calculation
    */
    public function interestCalculation(float $initialCapital, float $interestRate, int $investmentTime): float
    {
        $interestRate /= 100;
        $return = $initialCapital;
        for ($i = 1; $i <= $investmentTime; $i++) {
            $return += ($return * $interestRate);
        }
        return round($return, 2);
    }

}
