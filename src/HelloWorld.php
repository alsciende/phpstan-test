<?php declare(strict_types=1);

namespace App;
class HelloWorld
{
    /**
     * @param array<int> $years
     */
    public function __invoke(array $years): void
    {
        $yearsStr = array_map('strval', $years);
        $totals = [];
        foreach ($yearsStr as $year) {
            $totals[$year] = ["01" => 0];
        }
        self::normalize($totals);
    }

    /**
     * @param array<string, array<string, int>> $data
     */
    private static function normalize(array $data): void
    {

    }
}
