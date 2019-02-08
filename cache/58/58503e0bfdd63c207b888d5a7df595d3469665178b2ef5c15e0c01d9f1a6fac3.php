<?php

/* page.html.twig */
class __TwigTemplate_782e1bf9ca0b625dc9d6c9d1c90c5caa4646a29439d307da808f4bb360575e42 extends Twig_Template
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
        echo "Selamat datang di halaman Page ";
        echo twig_escape_filter($this->env, ($context["model"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html.twig", "/home/fachrz/framework/src/Application/Views/page.html.twig");
    }
}
