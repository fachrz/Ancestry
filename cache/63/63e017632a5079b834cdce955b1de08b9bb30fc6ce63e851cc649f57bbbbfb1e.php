<?php

/* v_home.html */
class __TwigTemplate_ca68d51b4f3b9713f6752a0f55af6caa52f7ed99e4b482356bf6851ea85e848a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"http://localhost/framework/public/Assets/Bootstrap/css/bootstrap.css\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["home"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>
    <nav class=\"navbar navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    </nav>
            <table class=\"table table-dark\">
                <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Nama</th>
                        <th scope=\"col\">Umur</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["siswa"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d_siswa"]) {
            // line 24
            echo "                    <tr>    
                        <th scope=\"row\">1</th>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d_siswa"], "name", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d_siswa"], "age", []), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d_siswa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  
                </tbody>
                </table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "v_home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  62 => 27,  58 => 26,  54 => 24,  50 => 23,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "v_home.html", "/home/fachrz/webserver/framework/src/Application/Views/v_home.html");
    }
}
