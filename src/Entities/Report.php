<?php

namespace src\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @final
 *
 * @ORM\Entity(repositoryClass="src\Repository\ReportRepository")
 * @ORM\Table(name="reports")
 */
class Report
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $charsCount;

    /**
     * @ORM\Column(type="integer")
     */
    private int $wordsCount;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sentencesCount;

    /**
     * @ORM\Column(type="array")
     */
    private array $getCharactersFrequency;

    /**
     * @ORM\Column(type="array")
     */
    private array $charactersDistribution;

    /**
     * @ORM\Column(type="text")
     */
    private string $avgWordLen;

    /**
     * @ORM\Column(type="integer")
     */
    private int $wordsCountInSentence;

    /**
     * @ORM\Column(type="array")
     */
    private array $longestWords;

    /**
     * @ORM\Column(type="array")
     */
    private array $topShortestWords;

    /**
     * @ORM\Column(type="array")
     */
    private array $longestPalindromes;

    /**
     * @ORM\Column(type="integer")
     */
    private int $palindromeCount;


    /**
     * @ORM\Column(type="text")
     */
    private string $reversedText;

    /**
     * @ORM\Column(type="text")
     */
    private string $reversedWords;

    /**
     * @ORM\Column(type="date")
     */
    private DateTime $dateTime;

    /**
     * @ORM\Column(type="text")
     */
    private $fileName;

    /**
     * @ORM\Column(type="array")
     */
    private array $mostUsedWords;

    /**
     * @param int $charsCount
     *
     * @return $this
     */
    public function setCharsCount(int $charsCount) : Report
    {
        $this->charsCount = $charsCount;

        return $this;
    }

    /**
     * @param int $wordsCount
     *
     * @return $this
     */
    public function setWordsCount(int $wordsCount) : Report
    {
        $this->wordsCount = $wordsCount;

        return $this;
    }

    /**
     * @param int $sentencesCount
     *
     * @return $this
     */
    public function setSentencesCount(int $sentencesCount) : Report
    {
        $this->sentencesCount = $sentencesCount;

        return $this;
    }

    /**
     * @param array $charactersFrequency
     *
     * @return $this
     */
    public function setCharsFrequency(array $charactersFrequency) : Report
    {
        $this->getCharactersFrequency = $charactersFrequency;

        return $this;
    }

    /**
     * @param array $charactersDistribution
     *
     * @return $this
     */
    public function setCharsDistributionPercentages(array $charactersDistribution) : Report
    {
        $this->charactersDistribution = $charactersDistribution;

        return $this;
    }

    /**
     * @param string $avgWordLen
     * @return $this
     */
    public function setAverageWordLength(string $avgWordLen) : Report
    {
        $this->avgWordLen = $avgWordLen;

        return $this;
    }

    /**
     * @param int $wordsCountInSentence
     *
     * @return $this
     */
    public function setNumberOfWordsPercentages(int $wordsCountInSentence) : Report
    {
        $this->wordsCountInSentence = $wordsCountInSentence;

        return $this;
    }

    /**
     * @param array $topUsedWords
     *
     * @return $this
     */
    public function setMostUsedWords(array $topUsedWords) : Report
    {
        $this->mostUsedWords = $topUsedWords;

        return $this;
    }

    /**
     * @param array $topLongestWords
     *
     * @return $this
     */
    public function setMostLongestWords(array $topLongestWords) : Report
    {
        $this->longestWords = $topLongestWords;

        return $this;
    }

    /**
     * @param array $topShortestWords
     *
     * @return $this
     */
    public function setMostShortestWords(array $topShortestWords) : Report
    {
        $this->topShortestWords = $topShortestWords;

        return $this;
    }

    /**
     * @param int $palindromeCount
     *
     * @return $this
     */
    public function setPalindromeCount(int $palindromeCount) : Report
    {
        $this->palindromeCount = $palindromeCount;

        return $this;
    }

    /**
     * @param array $longestPalindromes
     *
     * @return $this
     */
    public function setMostLongestPalindromes(array $longestPalindromes) : Report
    {
        $this->longestPalindromes = $longestPalindromes;

        return $this;
    }

    /**
     * @param DateTime $dateTime
     *
     * @return Report
     */
    public function setDate(DateTime $dateTime) : Report
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @param string $reversedText
     * @return $this
     */
    public function setReversedText(string $reversedText) : Report
    {
        $this->reversedText = $reversedText;

        return $this;
    }

    /**
     * @param string $reversedWords
     *
     * @return $this
     */
    public function setReversedWords(string $reversedWords) : Report
    {
        $this->reversedWords = $reversedWords;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvgWordLen(): string
    {
        return $this->avgWordLen;
    }

    /**
     * @return array
     */
    public function getCharactersDistribution(): array
    {
        return $this->charactersDistribution;
    }

    /**
     * @return int
     */
    public function getCharsCount(): int
    {
        return $this->charsCount;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * @return array
     */
    public function getGetCharactersFrequency(): array
    {
        return $this->getCharactersFrequency;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getLongestPalindromes(): array
    {
        return $this->longestPalindromes;
    }

    /**
     * @return string
     */
    public function getReversedText(): string
    {
        return $this->reversedText;
    }

    /**
     * @return int
     */
    public function getPalindromeCount(): int
    {
        return $this->palindromeCount;
    }

    /**
     * @return string
     */
    public function getReversedWords(): string
    {
        return $this->reversedWords;
    }

    /**
     * @return int
     */
    public function getSentencesCount(): int
    {
        return $this->sentencesCount;
    }

    /**
     * @return array
     */
    public function getTopShortestWords(): array
    {
        return $this->topShortestWords;
    }

    /**
     * @return array
     */
    public function getLongestWords(): array
    {
        return $this->longestWords;
    }

    /**
     * @return int
     */
    public function getWordsInSentenceCount(): int
    {
        return $this->wordsCountInSentence;
    }

    /**
     * @return int
     */
    public function getWordsCount(): int
    {
        return $this->wordsCount;
    }

    /**
     * @param string $avgWordLen
     */
    public function setAvgWordLen(string $avgWordLen): void
    {
        $this->avgWordLen = $avgWordLen;
    }

    /**
     * @return string
     */
    public function getFileName():string
    {
       return $this->fileName;
    }

    /**
     * @return array
     */
    public function getMostUsedWords(): array
    {
        return $this->mostUsedWords;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return  array(
            'Number of characters' => $this->getWordsCount(),
            'Number of words' => $this->getWordsCount(),
            'Frequency of characters' => $this->getGetCharactersFrequency(),
            'Number of sentences' => $this->getSentencesCount(),
            'Distribution of characters as a percentage of total' => $this->getCharactersDistribution(),
            'Average word length' => $this->getAvgWordLen(),
            'The average number of words in a sentence' => $this->getWordsInSentenceCount(),
            'Top 10 most used words' => $this->getMostUsedWords(),
            'Top 10 longest words' => $this->getLongestWords(),
            'Top 10 shortest words' => $this->getTopShortestWords(),
            'Number of palindrome words' => $this->getPalindromeCount(),
            'Top 10 longest palindrome words' => $this->getLongestPalindromes(),
            'date' => $this->getDateTime()->format('Y-m-d-h-m'),
            'The reversed text' => $this->getReversedText(),
            'The reversed words text' => $this->getReversedWords()
        );
    }
}
