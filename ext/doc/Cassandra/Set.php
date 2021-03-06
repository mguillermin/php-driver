<?php

/**
 * Copyright 2015 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

use Countable;
use IteratorAggregate;

/**
 * A PHP representation of the CQL `set` datatype
 */
final class Set implements Countable, IteratorAggregate
{
    /**
     * Creates a new collection of a given type
     * @param string $type one of `Cassandra::TYPE_*`
     */
    public function __construct(string $type) {}

    /**
     * The type of this set
     * @return string one of `Cassandra::TYPE_*`
     */
    public function string type() {}

    /**
     * Array of values in this set
     * @return array values
     */
    public function array values() {}

    /**
     * Adds a value to this set
     * @param  mixed   $value Value
     * @return bool whether the value has been added
     */
    public function bool add(mixed $value) {}

    /**
     * Removes a value to this set
     * @param  mixed   $value Value
     * @return bool whether the value has been removed
     */
    public function bool remove(mixed $value) {}

    /**
     * Returns whether a value is in this set
     * @param  mixed   $value Value
     * @return bool whether the value is in the set
     */
    public function bool has(mixed $value) {}
}
