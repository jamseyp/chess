<?php
/**
 * @author James Parker <james.parker05@dixonscarphone.com>
 * @date   01/05/2017
 */

namespace Chess\Pieces;

use Chess\Board\ChessBoard;
use Chess\Board\Coordinate;

/**
 * Class Piece
 *
 * @package Chess\Pieces
 * @author  James Parker <james.parker@dixonscarphone.com>
 */
abstract class Piece
{

    /** @var string */
    private $id;
    /** @var Coordinate */
    private $coordinate;
    /** @var bool */
    private $availble;
    /** @var ChessBoard board */
    private $board;
    /** @var string */
    private $color;


    /**
     * Piece constructor.
     *
     * @param ChessBoard $board
     * @param Coordinate $coordinate
     */
    public function __construct(ChessBoard $board, Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
        $this->id = uniqid('piece', true);
        $this->board = $board;
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
    public function getColor()
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
    public function setColor($color)
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
    protected function isValidMove(Coordinate $from, Coordinate $to)
    {
        // Can't move to same position.
        if ($from->isSamePositionAs($to)) {
            return false;
        }

        if ($this->board->isOutOfBounds($from, $to)) {
            return false;
        }

        return true;
    }
}