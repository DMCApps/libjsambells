<?php
namespace YouTrack;



/**
 * A class describing a youtrack group.
 */
class Group extends Object {
    public function __construct(\SimpleXMLElement $xml = NULL, Connection $youtrack = NULL) {
        parent::__construct($xml, $youtrack);
    }
}
