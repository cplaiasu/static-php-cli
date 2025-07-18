<?php

declare(strict_types=1);

namespace SPC\builder\macos\library;

class fastlz extends MacOSLibraryBase
{
    use \SPC\builder\unix\library\fastlz;

    public const NAME = 'fastlz';
}
