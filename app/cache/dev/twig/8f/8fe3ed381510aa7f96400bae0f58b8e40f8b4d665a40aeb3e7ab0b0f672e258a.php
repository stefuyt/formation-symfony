<?php

/* ParkBundle:Computer:Status/index.html.twig */
class __TwigTemplate_7146a958f178eb0cdb1ab4ffb8d1085688f16a74e59e7bfb713b9dfcbd8fcde4 extends Twig_Template
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
        $__internal_307a423e3da59829b36897fb8645f3ba5783375ed31a171e6d3def13d6756e4f = $this->env->getExtension("native_profiler");
        $__internal_307a423e3da59829b36897fb8645f3ba5783375ed31a171e6d3def13d6756e4f->enter($__internal_307a423e3da59829b36897fb8645f3ba5783375ed31a171e6d3def13d6756e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:Status/index.html.twig"));

        // line 1
        echo "<span class=\"glyphicon glyphicon-";
        echo (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) ? ("ok") : ("remove"));
        echo " color-";
        echo (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) ? ("green") : ("red"));
        echo "\" aria-hidden=\"true\"></span>


";
        
        $__internal_307a423e3da59829b36897fb8645f3ba5783375ed31a171e6d3def13d6756e4f->leave($__internal_307a423e3da59829b36897fb8645f3ba5783375ed31a171e6d3def13d6756e4f_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Computer:Status/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="glyphicon glyphicon-{{ status ? 'ok' : 'remove' }} color-{{ status ? 'green' : 'red' }}" aria-hidden="true"></span>*/
/* */
/* */
/* */
