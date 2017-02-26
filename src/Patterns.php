<?php

namespace Rutinerad\TorrentNameParser;

const PATTERNS = array(
    array('season' => '(s?([0-9]{1,2}))[ex]'),
    array('episode' => '([ex]([0-9]{2})(?:[^0-9]|$))'),
    array('year' => '([\[\(]?((?:19[0-9]|20[01])[0-9])[\]\)]?)'),
    array('resolution' => '([0-9]{3,4}p)'),
    array('quality' => array(
        '((?:PPV\.)?[HP]DTV|(?:HD)?CAM|B[DR]Rip|(?:HD-?)?TS|',
        '(?:PPV )?WEB-?DL(?: DVDRip)?|HDRip|DVDRip|DVDRIP|',
        'CamRip|W[EB]BRip|BluRay|DvDScr|hdtv|telesync)'
    )),
    array('codec' => '(xvid|[hx]\.?26[45])'),
    array('audio' => array(
        '(MP3|DD5\.?1|Dual[\- ]Audio|LiNE|DTS|',
        'AAC[.-]LC|AAC(?:\.?2\.0)?|',
        'AC3(?:\.5\.1)?)'
    )),
    array('group' => '(- ?([^-]+(?:-={[^-]+-?$)?))$'),
    array('region' => 'R[0-9]'),
    array('extended' => '(EXTENDED(:?.CUT)?)'),
    array('hardcoded' => 'HC'),
    array('proper' => 'PROPER'),
    array('repack' => 'REPACK'),
    array('container' => '(MKV|AVI|MP4)'),
    array('widescreen' => 'WS'),
    array('website' => '^(\[ ?([^\]]+?) ?\])'),
    array('language' => '(rus\.eng|ita\.eng)'),
    array('sbs' => '(?:Half-)?SBS'),
    array('unrated' => 'UNRATED'),
    array('size' => '(\d+(?:\.\d+)?(?:GB|MB))'),
    array('3d' => '3D')
);

const TYPES = array(
    'season' => 'integer',
    'episode' => 'integer',
    'year' => 'integer',
    'extended' => 'boolean',
    'hardcoded' => 'boolean',
    'proper' => 'boolean',
    'repack' => 'boolean',
    'widescreen' => 'boolean',
    'unrated' => 'boolean',
    '3d' => 'boolean'
);

?>
