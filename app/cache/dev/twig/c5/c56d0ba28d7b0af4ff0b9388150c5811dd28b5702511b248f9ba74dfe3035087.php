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
        $__internal_64c6b3993fef2c29ba0f8567625b7e4fbeb892e08ac3af9e919f14574dd56c2c = $this->env->getExtension("native_profiler");
        $__internal_64c6b3993fef2c29ba0f8567625b7e4fbeb892e08ac3af9e919f14574dd56c2c->enter($__internal_64c6b3993fef2c29ba0f8567625b7e4fbeb892e08ac3af9e919f14574dd56c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">List</a></li>
        </ul>
    </li>

</ul>
";
        
        $__internal_64c6b3993fef2c29ba0f8567625b7e4fbeb892e08ac3af9e919f14574dd56c2c->leave($__internal_64c6b3993fef2c29ba0f8567625b7e4fbeb892e08ac3af9e919f14574dd56c2c_prof);

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
        return array (  36 => 10,  27 => 4,  22 => 1,);
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
/*             <li><a href="{{ path('computer') }}">List</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
