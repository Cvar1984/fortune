<?php

namespace Cvar1984\Fortune;

/**
 * Class: FileBasedFortuneRepository
 *
 * @see FortuneRepositoryInterface
 */
class FileBasedFortuneRepository implements FortuneRepositoryInterface
{
    /**
     * __construct
     *
     * @param mixed $fortuneDataFile
     */
    public function __construct($fortuneDataFile)
    {
        $this->file = file($fortuneDataFile);
    }

    /**
     * getRandomFortune
     * @return string
     */
    public function getRandomFortune(): string
    {
        return substr($this->file[array_rand($this->file)], 2);
    }
}
