<?php
/**
 * @author James Parker <james.parker05@dixonscarphone.com>
 * @date   01/05/2017
 */

namespace Chess\Board;

use Chess\Pieces\Piece;

/**
 * Class ChessBoard
 *
 * @package Chess\Board
 * @author  James Parker <james.parker@dixonscarphone.com>
 */
class ChessBoard
{
    const UPPER_LIMIT = 7;
    const LOWER_LIMIT = 0;

    /** @var Piece[] */
    private $pieces;

    /**
     * Checks if set of coordinates is out of bounds.
     * @param Coordinate $from
     * @param Coordinate $to
     *
     * @return bool
     */
    public function isOutOfBounds(Coordinate $from, Coordinate $to): bool
    {
        if ($from->getX() < self::LOWER_LIMIT ||
            $from->getX() > self::UPPER_LIMIT ||
            $to->getX() > self::LOWER_LIMIT ||
            $to->getX() > self::UPPER_LIMIT
        ) {
            return false;
        }

        if ($from->getY() < self::LOWER_LIMIT ||
            $from->getY() > self::UPPER_LIMIT ||
            $to->getY() > self::LOWER_LIMIT ||
            $to->getY() > self::UPPER_LIMIT
        ) {
            return false;
        }

        return true;
    }
}