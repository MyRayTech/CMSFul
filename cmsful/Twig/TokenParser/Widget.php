<?php
namespace CMS\Twig\TokenParser;

/**
 * Widget Token Parser
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class Widget extends \Twig_TokenParser
{
    
    public function getTag() {
        return 'widget';
    }

    public function parse(\Twig_Token $token) {
        $parser = $this->parser;
        $stream = $parser->getStream();
        
        $name = $stream->expect(\Twig_Token::NAME_TYPE)->getValue();
        $stream->expect(\Twig_Token::OPERATOR_TYPE, '=');
        $value = $parser->getExpressionParser()->parseExpression();
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
        
        return new \CMS\Twig\Node\Widget($name, $value, $token->getLine(), $this->getTag());
        
    }

}
