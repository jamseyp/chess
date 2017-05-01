<?php
/**
 * @author James Parker <jamseyp@gmail.com>
 * @date   01/05/2017
 */

namespace Chess\Pieces;

use Chess\Board\Coordinate;

/**
 * Class King
 *
 * @package Chess\Pieces
 * @author  James Parker <james.parker@dixonscarphone.com>
 */
class King extends Piece
{

    /**
     * Moves a piece from a coordinate to a new coordinate.
     *
     * @param Coordinate $from the current location of the piece
     * @param Coordinate $to   the new coordinate of the piece
     *
     * @return bool returns true or false if the piece is moved
     */
    public function moveTo(Coordinate $from, Coordinate $to): bool
    {
        // TODO: Implement moveTo() method.
        $this->absoluteMove($to);
        return true;
    }

    /**
     * Removes the piece from the game
     *
     * @return bool
     */
    public function remove(): bool
    {
        // Can never remove the king as this will cause game over!
        return false;
    }

    /**
     * Gets the type
     *
     * @return string
     */
    public function getType(): string
    {
        return 'King';
    }
}