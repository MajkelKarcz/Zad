<?php

/* ::layoutplay.html.twig */
class __TwigTemplate_d1cd289f71ea4c90aada47a7871b24830d971c0d45f03a439fd5936a01be4ed9 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("url_new", array("nick" => "nick"));
        echo "\">New game</a></li>

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
        return array (  59 => 19,  48 => 21,  46 => 19,  38 => 14,  27 => 6,  20 => 1,);
    }
}
