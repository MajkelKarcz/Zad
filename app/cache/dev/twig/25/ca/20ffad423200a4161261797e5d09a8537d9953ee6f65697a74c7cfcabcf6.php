<?php

/* statistic.html.twig */
class __TwigTemplate_25ca20ffad423200a4161261797e5d09a8537d9953ee6f65697a74c7cfcabcf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutplay.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutplay.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h3>Statistics</h3>
<p>
Name ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : $this->getContext($context, "nick")), "html", null, true);
        echo "<br>
Exp ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")), "html", null, true);
        echo " <br>
HP ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hp"]) ? $context["hp"] : $this->getContext($context, "hp")), "html", null, true);
        echo " <br>
Stamina ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["stam"]) ? $context["stam"] : $this->getContext($context, "stam")), "html", null, true);
        echo " <br>
Str ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["str"]) ? $context["str"] : $this->getContext($context, "str")), "html", null, true);
        echo " <br>
Weight ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : $this->getContext($context, "weight")), "html", null, true);
        echo " <br>
Item ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["item1"]) ? $context["item1"] : $this->getContext($context, "item1")), "html", null, true);
        echo "<br>
Item ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["item2"]) ? $context["item2"] : $this->getContext($context, "item2")), "html", null, true);
        echo "<br>
Item ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["item3"]) ? $context["item3"] : $this->getContext($context, "item3")), "html", null, true);
        echo "<br>

</p>
";
    }

    public function getTemplateName()
    {
        return "statistic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
