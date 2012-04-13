<?php

/* ILLVisitBundle:Admin:showInstitutes.html.twig */
class __TwigTemplate_eb6c4859c9f641e4a09bc7d4bd7357e3 extends Twig_Template
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
\t\t\t<h2> List of the institutes</h2>
\t\t\t<br />
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<tr>
\t\t\t\t    <th>Name</th>
\t\t\t\t    <th>Printable name</th>
\t\t\t \t</tr>
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "institutes"));
        foreach ($context['_seq'] as $context["_key"] => $context["institute"]) {
            // line 15
            echo "\t\t\t    <tr>
\t\t\t\t    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "institute"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "institute"), "printableName"), "html", null, true);
            echo "</td>
\t\t\t \t</tr>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['institute'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "\t\t\t</table>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Admin:showInstitutes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
