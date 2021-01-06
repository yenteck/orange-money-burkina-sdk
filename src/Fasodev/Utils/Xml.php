<?php
/**
 * @author Yentema Nadjoari <n.yenteck@gmail.com> ,
 * @author S.C Jerôme ONADJA <jeromeonadja28@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Fasodev\Utils;

/**
 * Class Xml
 * @package Fasodev\Utils
 */
final class Xml
{
    public static function toObject(string $xmlString)
    {
        return json_decode(json_encode(simplexml_load_string($xmlString)));
    }
}