<?php
/**
 * @author Rizart Dokollari <r.dokollari@linkwi.se>
 * @since 8/23/16
 */

namespace App;

class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * Money constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param $multiplier
     * @return $this
     */
    public function times($multiplier)
    {
        return new $this($this->amount * $multiplier);
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }
}