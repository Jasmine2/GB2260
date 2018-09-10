<?php
/**
 * User: Jasmine2
 * Date: 2018/9/10 19:17
 * Email: youjingqiang@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */

namespace jasmine2\IdentityCard\China;

use jasmine2\IdentityCard\China\Region\RegionInterface;

interface IdentityInterface
{
    /**
     * Check The ID Card is legal.
     *
     * @return bool
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function legal(): bool;

    /**
     * Get Region of The ID Card People.
     */
    public function region(): RegionInterface;

    /**
     * Get The ID Card People Birthday.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function birthday(): string;

    /**
     * Get the ID Card People Gender.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function gender(): string;
}
