<?php

namespace Cvar1984\Fortune;

use Cvar1984\Fortune\FortuneRepositoryInterface;
use Cvar1984\Fortune\FileBasedFortuneRepository;

/**
 * Class: Fortune
 *
 */
class Fortune
{
    /**
     * __construct
     *
     * @param FortuneRepositoryInterface $fortunes
     */
    public function __construct(FortuneRepositoryInterface $fortunes)
    {
        $this->fortunes = $fortunes;
    }

    /**
     * make
     * @return string
     */
    public static function make(): string
    {
        $instance = new static(
            new FileBasedFortuneRepository(
                dirname(dirname(__DIR__)) . '/assets/fortunes.txt'
            )
        );
        return $instance->fortunes->getRandomFortune();
    }
}
