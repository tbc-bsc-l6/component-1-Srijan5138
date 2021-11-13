<?php


namespace awe;


class GameProduct extends ShopProduct
{
    private $gameRating;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $gameRating
    )
    {

        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->gameRating = $gameRating;
    }

    public function getNumberofgameRating()
    {
        return $this->gameRating;
    }
}