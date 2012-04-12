<?php

/* ILLVisitBundle:Admin:index.html.twig */
class __TwigTemplate_d0e7f3876bf5f5a9529823047f9b7ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ILLVisitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"span2\">
\t\t    <ul class=\"nav nav-list\">
\t\t    \t<li class=\"nav-header\">Institutes</li>
\t\t   \t\t<li>
\t\t    \t\t<a href=\"#\">Institutes</a>
\t\t    \t</li>
\t\t   \t \t<li>
\t\t    \t\t<a href=\"\">Add institute</a>
\t\t    \t</li>
\t\t    </ul>
\t\t</div>
\t\t<div class=\"span10\">
\t\t\t<h1>Administration</h1>
\t\t\t
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
