<?php

/* test.html.twig */
class __TwigTemplate_5eb91598caa03e5b7cefb74232a7c9e71e267f0c7fdee1654194d66453c67b2a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "test";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test.html.twig", "/home/fachrz/framework/src/Application/View/test.html.twig");
    }
}
