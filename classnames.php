<?php
function classnames() {
    $classes = array();

    foreach(func_get_args() as $arg) {
        $type = gettype($arg);

        if ($type === 'string') {
            $classes[] = $arg;
        }

        if ($type === 'array') {
            foreach($arg as $class_name => $expression) {
                $res = $expression;

                if (is_callable($expression)) {
                    $res = $expression();
                }

                if ($res) {
                    $classes[] = $class_name;
                }
            }
        }
    }

    return implode(' ', $classes);
}
