<?php
/**
 * User: Jasmine2
 * Date: 2018/9/10 19:19
 * Email: youjingqiang@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */

namespace jasmine2\GBT2260\Region;

interface RegionInterface
{
    /**
     * Get the Region Code.
     *
     * @return int
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function code(): int;

    /**
     * Get Province Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function province(): string;

    /**
     * Get City Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function city(): string;

    /**
     * Get County Of The Region.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function county(): string;

    /**
     * Get The Region Tree.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function tree(): array;

    /**
     * Get The Region Tree String.
     *
     * @param string $glue Join Array Elements With A Glue String
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function treeString(string $glue = ''): string;
}