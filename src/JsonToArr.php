<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 3/26/19
 * Time: 3:47 PM
 */

namespace JsonToArr;


class JsonToArr
{

    public static function main($json)
    {
        $content = json_decode($json, true);

        if (is_array($content)) {

            $result = '[';

            array_map(function ($item, $key) use (&$result) {
                $result .=
                    sprintf(
                        '\'%s\' => %s,',
                        $key,
                        self::main(json_encode($item))
                    );
            }, $content, array_keys($content));

            $result .= ']';

        } else {
            $result = '"$content"';
        }

        return $result;
    }
}