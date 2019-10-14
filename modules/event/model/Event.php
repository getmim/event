<?php
/**
 * Event
 * @package event
 * @version 0.0.1
 */

namespace Event\Model;

class Event extends \Mim\Model
{

    protected static $table = 'event';

    protected static $chains = [];

    protected static $q = ['title'];
}