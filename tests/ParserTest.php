<?php

use PHPUnit\Framework\TestCase;

final class ParserTest extends TestCase {

    /**
     * @dataProvider dataProvider
     */
    function testParser($input, $expectedOutput) {
        $parser = new Rutinerad\TorrentNameParser\Parser();
        $this->assertEquals($parser->parse($input), $expectedOutput);
    }

    function dataProvider() {
        $inputs = json_decode(file_get_contents(__DIR__.'/files/input.json'), true);
        $outputs = json_decode(file_get_contents(__DIR__.'/files/output.json'), true);

        return array(array($inputs[0], $outputs[0]));

        // return array_map(function($i) use ($inputs, $outputs) {
        //     return array($inputs[$i], $outputs[$i], $i);
        // }, array_keys($inputs));
    }
}

?>
