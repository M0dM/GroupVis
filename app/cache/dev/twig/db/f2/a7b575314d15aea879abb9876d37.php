<?php

/* ILLVisitBundle:Visit:searchAttendee.json.twig */
class __TwigTemplate_dbf2a7b575314d15aea879abb9876d37 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "{
\t\"attendees\":
\t[
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attendees"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 5
            echo "\t";
            if ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                // line 6
                echo "\t\t{
\t\t\t\"id\"\t\t: \"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "id"), "html", null, true);
                echo "\",
\t\t\t\"fullName\"\t: \"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "fullName"), "html", null, true);
                echo "\",
\t\t\t\"birthDate\"\t: \"";
                // line 9
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "birthDate"), "d-m-Y"), "html", null, true);
                echo "\",
\t\t\t\"url\"\t\t: \"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_addattendee", array("id" => $this->getContext($context, "visitId"), "attendeeId" => $this->getAttribute($this->getContext($context, "attendee"), "id"))), "html", null, true);
                echo "\"
\t\t}
\t";
            } else {
                // line 13
                echo "\t\t{
\t\t\t\"id\"\t\t: \"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "id"), "html", null, true);
                echo "\",
\t\t\t\"fullName\"\t: \"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "fullName"), "html", null, true);
                echo "\",
\t\t\t\"birthDate\"\t: \"";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "birthDate"), "d-m-Y"), "html", null, true);
                echo "\",
\t\t\t\"url\"\t\t: \"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_addattendee", array("id" => $this->getContext($context, "visitId"), "attendeeId" => $this->getAttribute($this->getContext($context, "attendee"), "id"))), "html", null, true);
                echo "\"
\t\t},
\t";
            }
            // line 20
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t]

}";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Visit:searchAttendee.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
