<?php
/**
 * @author James Parker <james.parker05@dixonscarphone.com>
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
    private $xAxis;
    /** @var int */
    private $yAxis;

    /**
     * Coordinate constructor.
     *
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->xAxis = $x;
        $this->yAxis = $y;
    }

    /**
     * Gets the X and Y Position.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->xAxis . '.' . $this->yAxis;
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
        return $coordinate->getX() === $this->xAxis && $coordinate->getY() === $this->yAxis ? true : false;
    }

    /**
     * Gets xAxis
     *
     * @return int
     */
    public function getX()
    {
        return $this->xAxis;
    }

    /**
     * Gets yAxis
     *
     * @return int
     */
    public function getY()
    {
        return $this->yAxis;
    }
}
