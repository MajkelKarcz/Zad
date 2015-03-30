<?php

/* ::layoutplay.html.twig */
class __TwigTemplate_a2412c7d58a39b058de5d1a108c695a405d4948a663695527b80a857dfe5e7f8 extends Twig_Template
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
<h2>Login</h2>
<ol id=\"menuglowne\">
<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("url_new", array("nick" => "mik"));
        echo "\">New game</a></li>
<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("url_statistic", array("nick" => "mik"));
        echo "\">Statistic</a></li>
</ol>
</div>
<div id=\"tresc\">
";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "</div>
<div id=\"stopka\">
Game v 1.0 Michal Karcz
</div>
</div>
</body>
</html>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layoutplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  51 => 21,  49 => 19,  42 => 15,  38 => 14,  27 => 6,  20 => 1,);
    }
}
