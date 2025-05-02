<?php

/**
 * Smarty compiler exception class
 *
 * @package Smarty
 */
class SmartyCompilerException extends SmartyException
{
    public function __toString()
    {
        return ' --> Smarty Compiler: ' . $this->message . ' <-- ';
    }

    /**
     * The line number of the template error
     *
     * Musi być dokładnie int, tak jak w Exception
     */
    public int $line = 0;

    /**
     * The template source snippet relating to the error
     *
     * @type string|null
     */
    public ?string $source = null;

    /**
     * The raw text of the error message
     *
     * @type string|null
     */
    public ?string $desc = null;

    /**
     * The resource identifier or template name
     *
     * @type string|null
     */
    public ?string $template = null;
}
