<?php

/* ::layout.html.twig */
class __TwigTemplate_842e200c75d88f577e9eafc1078ff2b6a8f640f0fa976ae256876e97bdb9c778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>Game</title>
<meta charset=\"UTF-8\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"pojemnik\">
<div id=\"naglowek\">
<h1>Game</h1>
<ol id=\"menuglowne\">
<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("url_register");
        echo "\">Rejestracja</a></li>
<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("url_login");
        echo "\">Logowanie</a></li>
</ol>
</div>
<div id=\"tresc\">
";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "</div>
<div id=\"stopka\">
Game v 1.0 Michal Karcz
</div>
</div>
</body>
</html>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  50 => 20,  48 => 18,  41 => 14,  37 => 13,  27 => 6,  20 => 1,  31 => 3,  28 => 2,);
    }
}
