<?php

namespace App\Faker;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageProvider extends Base
{
    const URL = 'https://dummyimage.com/';
    const DELIMITER = '/';

    public function dummyimage(string $dir = '', int $width = 500, int $height = 500, string $color = '#bbbbbb')
    {
        $name = $dir . self::DELIMITER . Str::random(6) . '.jpg';

        Storage::put(
            $name,
            file_get_contents(
                self::URL
                . $width
                . self::DELIMITER
                . Str::substrReplace($color, '', 0, 1)
                . self::DELIMITER
                . $height
            )
        );

        return '/storage/' . $name;
    }
}
