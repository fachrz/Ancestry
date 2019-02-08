<?php

/* test.html.twig */
class __TwigTemplate_ca89c68442074901e786e75e6986e926542dd4dca71d11eea989a95fe7e95dcd extends Twig_Template
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
        return new Twig_Source("", "test.html.twig", "/home/fachrz/framework/src/View/test.html.twig");
    }
}
