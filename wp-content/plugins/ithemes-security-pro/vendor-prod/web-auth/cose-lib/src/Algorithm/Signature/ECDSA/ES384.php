<?php
/**
 * @license MIT
 *
 * Modified using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2021 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace iThemesSecurity\Strauss\Cose\Algorithm\Signature\ECDSA;

use iThemesSecurity\Strauss\Cose\Key\Ec2Key;

final class ES384 extends ECDSA
{
    public const ID = -35;

    public static function identifier(): int
    {
        return self::ID;
    }

    protected function getHashAlgorithm(): int
    {
        return OPENSSL_ALGO_SHA384;
    }

    protected function getCurve(): int
    {
        return Ec2Key::CURVE_P384;
    }

    protected function getSignaturePartLength(): int
    {
        return 96;
    }
}