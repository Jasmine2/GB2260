<?php
/**
 * User: Jasmine2
 * Date: 2018/9/10 19:20
 * Email: youjingqiang@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */

namespace jasmine2\GBT2260\Region;

class Region implements RegionInterface
{
    /**
     * All regions data.
     *
     * @var array
     */
    protected static $regions = [];
    /**
     * The Init Region Code.
     *
     * @var int
     */
    protected $code;

    /**
     * Create A Region instance.
     *
     * @param int $regionCode The Instance Init Region Code.
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function __construct(int $regionCode)
    {
        if (empty(static::$regions)) {
            // Seting regions to [static::$regions],
            // Using `json_decode` function decode json RAW string.
            static::$regions = json_decode(
                file_get_contents(__DIR__ . "/../../dist/gb-t-2620.json"), true
            );
        }
        // Setting init region code.
        $this->code = (string)$regionCode;
    }

    /**
     * Get the Region Code.
     *
     * @return int
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function code(): int
    {
        return (int)$this->code;
    }

    /**
     * Get Province Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function province(): string
    {
        $provinceCode = substr($this->code, 0, 2) . '0000';
        return static::$regions[$provinceCode];
    }

    /**
     * Get City Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function city(): string
    {
        // Get city code of the region.
        $cityCode = substr($this->code, 0, 4) . '00';
        if (isset(static::$regions[$cityCode])) {
            return static::$regions[$cityCode];
        }
        return '';
    }

    /**
     * Get County Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function county(): string
    {
        return static::$regions[$this->code];
    }

    /**
     * Get The Region Tree.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function tree(): array
    {
        return array_values(array_filter([
            $this->province(),
            $this->city(),
            $this->county(),
        ]));
    }

    /**
     * Get The Region Tree String.
     *
     * @param string $glue Join Array Elements With A Glue String
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function treeString(string $glue = ''): string
    {
        return implode($glue, $this->tree());
    }
}