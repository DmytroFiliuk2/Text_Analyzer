<?php

namespace src\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @final
 *
 * @ORM\Entity
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
     * @ORM\Column(type="integer")
     */
    private array $getCharactersFrequency;
    private array $charactersDistribution;
    private string $avgWordLen;
    private int $wordsCountInSentence;
    private array $topUsedWords;
    private array $topShortestWords;
    private int $palindromeCount;
    private array $longestPalindromes;
    private DateTime $dateTime;
    private string $mbStrRev;
    private string $mbStrRevWords;

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
        $this->topUsedWords = $topUsedWords;

        return $this;
    }

    /**
     * @param array $topLongestWords
     *
     * @return $this
     */
    public function setMostLongestWords(array $topLongestWords) : Report
    {
        $this->topUsedWords = $topLongestWords;

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
     * @param string $mbStrRev
     *
     * @return $this
     */
    public function setReversedText(string $mbStrRev) : Report
    {
        $this->mbStrRev = $mbStrRev;

        return $this;
    }

    /**
     * @param string $mbStrRevWords
     *
     * @return $this
     */
    public function setReversedWords(string $mbStrRevWords) : Report
    {
        $this->mbStrRevWords = $mbStrRevWords;

        return $this;
    }
}
