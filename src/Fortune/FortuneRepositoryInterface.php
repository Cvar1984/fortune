<?php

namespace Cvar1984\Fortune;

/**
 * Interface: FortuneRepositoryInterface
 *
 */
interface FortuneRepositoryInterface
{
    /**
     * @return string
     */
    public function getRandomFortune(): string;
}
