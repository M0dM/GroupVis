<?php

/* ILLVisitBundle::baseAdmin.html.twig */
class __TwigTemplate_e2863d9aab2836acc9abcad1192b0826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"row\">
\t\t<div class=\"span2\">
\t\t    <ul class=\"nav nav-list\">
\t\t    \t<li class=\"nav-header\">Institutes</li>
\t\t   \t\t<li>
\t\t    \t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_admin_showinstitutes"), "html", null, true);
        echo "\">Institutes</a>
\t\t    \t</li>
\t\t   \t \t<li>
\t\t    \t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_admin_create"), "html", null, true);
        echo "\">Add institute</a>
\t\t    \t</li>
\t\t    </ul>
\t\t</div>
\t";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
