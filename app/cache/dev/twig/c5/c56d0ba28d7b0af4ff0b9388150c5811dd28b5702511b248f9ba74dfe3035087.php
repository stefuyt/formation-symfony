<?php

/* ::menu.html.twig */
class __TwigTemplate_ae8400c6bbc0fef8ecbe3b474a87675310b2e65eefe0902e2cc73efb08a09d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28b71e65d8dcfc21ba5f0310a9d67c1a8dfbb6448dd9f7427a886faf56f0f80e = $this->env->getExtension("native_profiler");
        $__internal_28b71e65d8dcfc21ba5f0310a9d67c1a8dfbb6448dd9f7427a886faf56f0f80e->enter($__internal_28b71e65d8dcfc21ba5f0310a9d67c1a8dfbb6448dd9f7427a886faf56f0f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">

    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Home</a>
    </li>

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Computers <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("computer_debug");
        echo "\">Debug</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">List</a></li>
        </ul>
    </li>

</ul>
";
        
        $__internal_28b71e65d8dcfc21ba5f0310a9d67c1a8dfbb6448dd9f7427a886faf56f0f80e->leave($__internal_28b71e65d8dcfc21ba5f0310a9d67c1a8dfbb6448dd9f7427a886faf56f0f80e_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 10,  27 => 4,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* */
/*     <li>*/
/*         <a href="{{ path('app_homepage') }}"><span class="glyphicon glyphicon-home"></span> Home</a>*/
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computers <span class="caret"></span></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('computer_debug') }}">Debug</a></li>*/
/*             <li><a href="{{ path('computer') }}">List</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
