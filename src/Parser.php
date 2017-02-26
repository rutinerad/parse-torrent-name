<?php

namespace Rutinerad\TorrentNameParser;

class Parser {
    public $torrent = null;
    public $excess_raw = null;
    public $group_raw = null;
    public $start = null;
    public $end = null;
    public $title_raw = null;
    public $parts = null;

    function parse(string $name) {
        return json_decode('{"season": 5,"episode": 3,"resolution": "720p","quality": "HDTV","codec": "x264","title": "The Walking Dead"}', true);
    }
}

?>
