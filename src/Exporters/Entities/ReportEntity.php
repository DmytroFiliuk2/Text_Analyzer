<?php

namespace src\Exporters\Entities;

use DateTime;

/**
 * @final
 */
class ReportEntity
{
    private int $charsCount;
    private int $wordsCount;
    private int $sentencesCount;
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
    public function setCharsCount(int $charsCount) : ReportEntity
    {
        $this->charsCount = $charsCount;

        return $this;
    }

    /**
     * @param int $wordsCount
     *
     * @return $this
     */
    public function setWordsCount(int $wordsCount) : ReportEntity
    {
        $this->wordsCount = $wordsCount;

        return $this;
    }

    /**
     * @param int $sentencesCount
     *
     * @return $this
     */
    public function setSentencesCount(int $sentencesCount) : ReportEntity
    {
        $this->sentencesCount = $sentencesCount;

        return $this;
    }

    /**
     * @param array $charactersFrequency
     *
     * @return $this
     */
    public function setCharsFrequency(array $charactersFrequency) : ReportEntity
    {
        $this->getCharactersFrequency = $charactersFrequency;

        return $this;
    }

    /**
     * @param array $charactersDistribution
     *
     * @return $this
     */
    public function setCharsDistributionPercentages(array $charactersDistribution) : ReportEntity
    {
        $this->charactersDistribution = $charactersDistribution;

        return $this;
    }

    /**
     * @param string $avgWordLen
     * @return $this
     */
    public function setAverageWordLength(string $avgWordLen) : ReportEntity
    {
        $this->avgWordLen = $avgWordLen;

        return $this;
    }

    /**
     * @param int $wordsCountInSentence
     *
     * @return $this
     */
    public function setNumberOfWordsPercentages(int $wordsCountInSentence) : ReportEntity
    {
        $this->wordsCountInSentence = $wordsCountInSentence;

        return $this;
    }

    /**
     * @param array $topUsedWords
     *
     * @return $this
     */
    public function setMostUsedWords(array $topUsedWords) : ReportEntity
    {
        $this->topUsedWords = $topUsedWords;

        return $this;
    }

    /**
     * @param array $topLongestWords
     *
     * @return $this
     */
    public function setMostLongestWords(array $topLongestWords) : ReportEntity
    {
        $this->topUsedWords = $topLongestWords;

        return $this;
    }

    /**
     * @param array $topShortestWords
     *
     * @return $this
     */
    public function setMostShortestWords(array $topShortestWords) : ReportEntity
    {
        $this->topShortestWords = $topShortestWords;

        return $this;
    }

    /**
     * @param int $palindromeCount
     *
     * @return $this
     */
    public function setPalindromeCount(int $palindromeCount) : ReportEntity
    {
        $this->palindromeCount = $palindromeCount;

        return $this;
    }

    /**
     * @param array $longestPalindromes
     *
     * @return $this
     */
    public function setMostLongestPalindromes(array $longestPalindromes) : ReportEntity
    {
        $this->longestPalindromes = $longestPalindromes;

        return $this;
    }

    /**
     * @param DateTime $dateTime
     *
     * @return ReportEntity
     */
    public function setDate(DateTime $dateTime) : ReportEntity
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @param string $mbStrRev
     *
     * @return $this
     */
    public function setReversedText(string $mbStrRev) : ReportEntity
    {
        $this->mbStrRev = $mbStrRev;

        return $this;
    }

    /**
     * @param string $mbStrRevWords
     *
     * @return $this
     */
    public function setReversedWords(string $mbStrRevWords) : ReportEntity
    {
        $this->mbStrRevWords = $mbStrRevWords;

        return $this;
    }
}
