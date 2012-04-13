<?php

/* ILLVisitBundle:Admin:addInstitute.json.twig */
class __TwigTemplate_287597360f788ccbcf2f6e9fcd0f024e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "{
\t\"success\": \"true\",
\t\"message\": \"The institute has been added\",
  \t\"institute\":
\t{
\t\t\"name\"\t\t: \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "institute"), "name"), "html", null, true);
        echo "\",
\t\t\"printableName\" \t: \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "institute"), "printableName"), "html", null, true);
        echo "\"
\t}
}";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Admin:addInstitute.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
