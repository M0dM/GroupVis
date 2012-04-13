<?php

/* ILLVisitBundle:Admin:index.html.twig */
class __TwigTemplate_2efb8334e08f9e63e045738f4dce8084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ILLVisitBundle::baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"span10\">
\t\t\t<h1>Administration</h1>
\t\t\t<h2> Welcome</h2>
\t\t\t<br />
\t\t\t<p>Welcome in the administrator border</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
