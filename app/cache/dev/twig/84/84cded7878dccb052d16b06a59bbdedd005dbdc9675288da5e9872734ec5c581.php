<?php

/* ParkBundle::base.html.twig */
class __TwigTemplate_17cc3493ccb3563eb29245902c6183aa9b19d2a747f929f73727b963fff68af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f94a680fefff95ae6e1c1a3699b229c7368d33fdb6a19d728784e11276000839 = $this->env->getExtension("native_profiler");
        $__internal_f94a680fefff95ae6e1c1a3699b229c7368d33fdb6a19d728784e11276000839->enter($__internal_f94a680fefff95ae6e1c1a3699b229c7368d33fdb6a19d728784e11276000839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f94a680fefff95ae6e1c1a3699b229c7368d33fdb6a19d728784e11276000839->leave($__internal_f94a680fefff95ae6e1c1a3699b229c7368d33fdb6a19d728784e11276000839_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a985817d4a6eae181487b4ab225de99ff7fb8a86c54ff514874bdb225647305 = $this->env->getExtension("native_profiler");
        $__internal_9a985817d4a6eae181487b4ab225de99ff7fb8a86c54ff514874bdb225647305->enter($__internal_9a985817d4a6eae181487b4ab225de99ff7fb8a86c54ff514874bdb225647305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Manage Park
";
        
        $__internal_9a985817d4a6eae181487b4ab225de99ff7fb8a86c54ff514874bdb225647305->leave($__internal_9a985817d4a6eae181487b4ab225de99ff7fb8a86c54ff514874bdb225647305_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - Manage Park*/
/* {% endblock %}*/
