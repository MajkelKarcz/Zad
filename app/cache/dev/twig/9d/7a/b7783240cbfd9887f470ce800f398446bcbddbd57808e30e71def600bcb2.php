<?php

/* login.html.twig */
class __TwigTemplate_9d7ab7783240cbfd9887f470ce800f398446bcbddbd57808e30e71def600bcb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h3>Logowanie</h3>
<p>
<form action=\"check\" method=\"POST\">
Name:<br>
<input type=\"text\" name=\"name\">
<br>
Password:<br>
<input type=\"password\" name=\"pass\">
<br><br>
<input type=\"submit\" value=\"Submit\">
</form>
</p>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
