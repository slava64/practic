<?php

namespace farm_v2\harvest;

class HarvestConsolePrinter
{
    const ALIGMENT_LEFT = 1;
    const ALIGMENT_RIGHT = 2;
    const ALIGMENT_CENTER = 3;
    const WIDHT_COLUMN = 100;

    /**
     *
     * @var Harvest
     */
    private $harvest;

    public function __construct(Harvest $harvest)
    {
        $this->harvest = $harvest;
    }

    public function printReport(): string
    {
        $text = $this->printHeader();
        $text .= $this->printBody();
        $text .= $this->printFooter();

        return $text;
    }

    private function printHeader(): string
    {
        $text = $this->printSymbol("=", 100) . "\n";
        $text .= '*' . $this->printStr("Ферма: " . $this->harvest->getFarm(), 98, 3) . "*\n";
        $text .= $this->printSymbol("=", 100) . "\n";

        return $text;
    }

    private function printBody(): string
    {
        $text = '';
        foreach ($this->harvest->getItems() as $item) {
            $text .= "|" . $this->printStr($item->getAnimal(), 78, 1);
            $text .= "|" . $this->printStr($item->getAmount(), 9, 1);
            $text .= "|" . $this->printStr($item->getProductUnit(), 9, 1);
            $text .= "|" . "\n";
        }
        return $text;
    }

    private function printFooter(): string
    {
        $sum = [];
        foreach ($this->harvest->getItems() as $item) {
            if (!isset($sum[$item->getProductName()])) {
                $sum[$item->getProductName()] = 0;
            }
            $sum[$item->getProductName()] = $sum[$item->getProductName()] + $item->getAmount();
        }

        $text = $this->printSymbol("-", 100) . "\n";
        $text .= "|" . $this->printStr("Итого", 78, 3) . "|\n";
        $text .= $this->printSymbol("-", 100) . "\n";

        foreach ($sum as $name => $item) {
            $text .= "|" . $this->printStr($name, 78, 1);
            $text .= "|" . $this->printStr($item, 9, 1);
            $text .= "|" . $this->printStr("л.", 9, 1);
            $text .= "|" . "\n";
        }

        $text .= $this->printSymbol("=", 100) . "\n";

        return $text;
    }

    private function printStr(string $str, int $widthColumn, int $alignment): string
    {
        if ($alignment == self::ALIGMENT_LEFT) { // выравнивание по левому краю
            return $str . $this->printSymbol(" ", $widthColumn - strlen($str));
        } elseif ($alignment == self::ALIGMENT_RIGHT) { // выравнивание по правому краю
            return $this->printSymbol(" ", $widthColumn - strlen($str)) . $str;
        } elseif ($alignment == self::ALIGMENT_CENTER) { // выравнивание по центру краю
            $countSymbolCenter = floor($widthColumn / 2) - floor(strlen($str) / 2);
            return $this->printSymbol(" ", $countSymbolCenter) . $str . $this->printSymbol(" ", $countSymbolCenter);
        }
        return '';
    }

    private function printSymbol(string $str, int $count): string
    {
        $line = '';
        for ($i = 0; $i < $count; $i++) {
            $line .= $str;
        }
        return $line;
    }


}