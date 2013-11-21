<?php

/**
 * php-markdown
 */

namespace Michelf;

/**
 * MarkdownTagFlavored adds links to mongodb documents
 */
class MarkdownTagFlavored extends Markdown
{

    public function __construct()
    {
        parent::__construct();
        $this->span_gamut['doAnchorTags'] = 25;
    }

    protected function doAnchorTags($text)
    {
        return preg_replace_callback('#@([\da-f]{24})#', function($matches) {
                    return "<a>{$matches[1]}</a>";
                }, $text);
    }

}