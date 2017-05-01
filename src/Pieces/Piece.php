<?php
/**
 * @author James Parker <jamseyp@gmail.com>
 * @date   01/05/2017
 */

namespace Chess\Pieces;

use Chess\Board\ChessBoard;
use Chess\Board\Coordinate;

/**
 * Class Piece
 * Provides an concrete class for a Piece object.
 *
 * @package Chess\Pieces
 * @author  James Parker <james.parker@dixonscarphone.com>
 */
abstract class Piece
{
    /** @var Coordinate */
    private $coordinate;
    /** @var ChessBoard board */
    private $board;
    /** @var string */
    private $color;
    /** @var bool */
    private $moved;

    /**
     * Piece constructor.
     *
     * @param ChessBoard $board
     * @param Coordinate $coordinate
     */
    public function __construct(ChessBoard $board, Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
        $this->board = $board;
    }

    /**
     * Returns whether the piece has moved
     *
     * @return true if the piece has been moved, false otherwise
     */
    public function hasMoved()
    {
        return $this->moved;
    }

    /**
     * Performs the actual move and sets has moved.
     *
     * @param Coordinate $to
     *
     * @return void
     */
    protected function absoluteMove(Coordinate $to)
    {
        $this->coordinate = $to;
        $this->moved = true;
    }


    /**
     * Moves a piece from a coordinate to a new coordinate.
     *
     * @param Coordinate $from the current location of the piece
     * @param Coordinate $to   the new coordinate of the piece
     *
     * @return bool returns true or false if the piece is moved
     */
    abstract public function moveTo(Coordinate $from, Coordinate $to): bool;

    /**
     * Removes the piece from the game
     *
     * @return bool
     */
    abstract public function remove(): bool;

    /**
     * Gets the type
     *
     * @return string
     */
    abstract public function getType(): string;

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Sets color
     *
     * @param string $color
     *
     * @return void
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }


    /**
     * Checks if a move is valid.
     * This is the basic function and can be overidden.
     *
     * @param Coordinate $from
     * @param Coordinate $to
     *
     * @return bool
     */
    protected function isValidMove(Coordinate $from, Coordinate $to): bool
    {
        // Can't move to same position.
        if ($from->isSamePositionAs($to)) {
            return false;
        }

        // Checks if the current move will be out of bounds.
        if ($this->board->isOutOfBounds($from, $to)) {
            return false;
        }

        return true;
    }
}
