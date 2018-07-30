<?php

namespace G1astartertest2\Cli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * Multiply two numbers together
     *
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \G1astartertest2\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
