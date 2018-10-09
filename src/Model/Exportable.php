<?php

namespace BananaService\Model;

/**
 * Interface Exportable
 */
interface Exportable {
    /**
     * @return array
     */
    function export() : array;
}