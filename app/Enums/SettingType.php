<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SettingType extends Enum
{
    const Tel           =   0;
    const OpenTime      =   1;
    const Address       =   2;
    const OnlineSupport =   3;
}
