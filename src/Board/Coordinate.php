<?php
/**
 * @author James Parker <jamseyp@gmail.com>
 * @date   01/05/2017
 */

namespace Chess\Board;

/**
 * Class Coordinate
 *
 * @package Chess\Board
 * @author  James Parker <james.parker@dixonscarphone.com>
 */
class Coordinate
{
    /** @var int */
    private $xPosition;
    /** @var int */
    private $yPosition;

    /**
     * Coordinate constructor.
     *
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->xPosition = $x;
        $this->yPosition = $y;
    }

    /**
     * Gets the X and Y Position.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->xPosition . '.' . $this->yPosition;
    }

    /**
     * Checks if a given coordinate is the same as the current one.
     *
     * @param Coordinate $coordinate
     *
     * @return bool
     */
    public function isSamePositionAs(Coordinate $coordinate): bool
    {
        return $coordinate->getX() === $this->xPosition && $coordinate->getY() === $this->yPosition ? true : false;
    }

    /**
     * Gets xPosition
     *
     * @return int
     */
    public function getX(): int
    {
        return $this->xPosition;
    }

    /**
     * Gets yPosition
     *
     * @return int
     */
    public function getY(): int
    {
        return $this->yPosition;
    }
}
