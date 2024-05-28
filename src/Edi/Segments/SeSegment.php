<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class SeSegment
 * @package BrodSolutions\Edi\Segments
 */
class SeSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To indicate the end of the transaction set and provide the count of the transmitted segments (including the beginning (ST) and ending (SE) segments)
        1 => 'number_of_segments', //Number of Included Segments - Total number of segments included in a transaction set including ST and SE segments
        2 => 'transaction_control_number', //Transaction Set Control Number - Identifying control number that must be unique within the transaction set functional group assigned by the originator for a transaction set
    ];
}
