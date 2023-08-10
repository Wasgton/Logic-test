<?php


use App\classes\Exercises;
use PHPUnit\Framework\TestCase;

class ExercisesTest extends TestCase
{

    public function testCalculator(): void
    {
        $exercises = new Exercises();
        $this->assertEquals(4, $exercises->calculator(2, 2, '+'));
        $this->assertEquals(0, $exercises->calculator(2, 2, '-'));
        $this->assertEquals(4, $exercises->calculator(2, 2, '*'));
        $this->assertEquals(1, $exercises->calculator(2, 2, '/'));
        $this->assertEquals('Invalid operator', $exercises->calculator(2, 2, ''));
    }

    public function testIsPrime(): void
    {
        $exercises = new Exercises();
        $this->assertEquals('2 is a prime number.', $exercises->isPrime(2));
        $this->assertEquals('3 is a prime number.', $exercises->isPrime(3));
        $this->assertEquals('4 is not a prime number.', $exercises->isPrime(4));
        $this->assertEquals('5 is a prime number.', $exercises->isPrime(5));
        $this->assertEquals('6 is not a prime number.', $exercises->isPrime(6));
        $this->assertEquals('7 is a prime number.', $exercises->isPrime(7));
        $this->assertEquals('8 is not a prime number.', $exercises->isPrime(8));
        $this->assertEquals('9 is not a prime number.', $exercises->isPrime(9));
        $this->assertEquals('10 is not a prime number.', $exercises->isPrime(10));
    }

    public function testFactorial()
    {
        $exercises = new Exercises();
        $this->assertEquals(1, $exercises->factorial(1));
        $this->assertEquals(2, $exercises->factorial(2));
        $this->assertEquals(6, $exercises->factorial(3));
        $this->assertEquals(24, $exercises->factorial(4));
        $this->assertEquals(120, $exercises->factorial(5));
    }

    public function testIsPalindrome()
    {
        $exercises = new Exercises();
        $this->assertEquals('madam is a palindrome.', $exercises->isPalindrome('madam'));
        $this->assertEquals('racecar is a palindrome.', $exercises->isPalindrome('racecar'));
        $this->assertEquals('apple is not a palindrome.', $exercises->isPalindrome('apple'));
        $this->assertEquals('rotator is a palindrome.', $exercises->isPalindrome('rotator'));
        $this->assertEquals('mom is a palindrome.', $exercises->isPalindrome('mom'));
    }

    public function testTable()
    {
        $exercises = new Exercises();
        $result = "2 x 1 = 2<br>2 x 2 = 4<br>2 x 3 = 6<br>2 x 4 = 8<br>2 x 5 = 10<br>2 x 6 = 12<br>2 x 7 = 14<br>2 x 8 = 16<br>2 x 9 = 18<br>2 x 10 = 20<br>";
        $this->assertEquals($result, $exercises->table(2));
        $result2 = "3 x 1 = 3<br>3 x 2 = 6<br>3 x 3 = 9<br>3 x 4 = 12<br>3 x 5 = 15<br>3 x 6 = 18<br>3 x 7 = 21<br>3 x 8 = 24<br>3 x 9 = 27<br>3 x 10 = 30<br>";
        $this->assertEquals($result2, $exercises->table(3));
        $result3 = "4 x 1 = 4<br>4 x 2 = 8<br>4 x 3 = 12<br>4 x 4 = 16<br>4 x 5 = 20<br>4 x 6 = 24<br>4 x 7 = 28<br>4 x 8 = 32<br>4 x 9 = 36<br>4 x 10 = 40<br>";
        $this->assertEquals($result3, $exercises->table(4));
        $result4 = "5 x 1 = 5<br>5 x 2 = 10<br>5 x 3 = 15<br>5 x 4 = 20<br>5 x 5 = 25<br>5 x 6 = 30<br>5 x 7 = 35<br>5 x 8 = 40<br>5 x 9 = 45<br>5 x 10 = 50<br>";
        $this->assertEquals($result4, $exercises->table(5));
    }

    public function testVowelCounter()
    {
        $exercises = new Exercises();
        $this->assertEquals(2, $exercises->vowelCounter('hello'));
        $this->assertEquals(3, $exercises->vowelCounter('hello world'));
        $this->assertEquals(1, $exercises->vowelCounter('world'));
        $this->assertEquals(5, $exercises->vowelCounter('aeiou'));
        $this->assertEquals(0, $exercises->vowelCounter(''));
        $this->assertEquals(0, $exercises->vowelCounter('123'));
    }


    public function testGradeAverage()
    {
        $exercises = new Exercises();
        $this->assertEquals('7', $exercises->gradeAverage(7,7,7));
        $this->assertEquals('7.67', $exercises->gradeAverage(8,5,10));
        $this->assertEquals('3.33', $exercises->gradeAverage(5,2,3));
        $this->assertEquals('6.33', $exercises->gradeAverage(7,8,4));
        $this->assertEquals('6.33', $exercises->gradeAverage(6,5,8));
    }

    public function testInterestCalculation()
    {
        $exercises = new Exercises();
        $result2 = $exercises->interestCalculation(1500, 3.5, 3);
        $this->assertEquals(1663.08, $result2);

        $result1 = $exercises->interestCalculation(1000, 5, 2);
        $this->assertEquals(1102.5, $result1);
    }

}
