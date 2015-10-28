<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_533bf874ee6c501a3c683b64450d2b88d549b797f467a8057abfee043110413f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d085e15fe149d1cd9d1990e5ef0b16bc658490473d404115fb056850ed55da59 = $this->env->getExtension("native_profiler");
        $__internal_d085e15fe149d1cd9d1990e5ef0b16bc658490473d404115fb056850ed55da59->enter($__internal_d085e15fe149d1cd9d1990e5ef0b16bc658490473d404115fb056850ed55da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d085e15fe149d1cd9d1990e5ef0b16bc658490473d404115fb056850ed55da59->leave($__internal_d085e15fe149d1cd9d1990e5ef0b16bc658490473d404115fb056850ed55da59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a39be7ece447f10af4666aeae87384d2d55070d600e2ce0d499ac0ad8372d51 = $this->env->getExtension("native_profiler");
        $__internal_3a39be7ece447f10af4666aeae87384d2d55070d600e2ce0d499ac0ad8372d51->enter($__internal_3a39be7ece447f10af4666aeae87384d2d55070d600e2ce0d499ac0ad8372d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a39be7ece447f10af4666aeae87384d2d55070d600e2ce0d499ac0ad8372d51->leave($__internal_3a39be7ece447f10af4666aeae87384d2d55070d600e2ce0d499ac0ad8372d51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f0b0eefcda11edee96b1cabd2eaa4dc294c8a65f152d121cc0a2b1f7e177d8 = $this->env->getExtension("native_profiler");
        $__internal_f9f0b0eefcda11edee96b1cabd2eaa4dc294c8a65f152d121cc0a2b1f7e177d8->enter($__internal_f9f0b0eefcda11edee96b1cabd2eaa4dc294c8a65f152d121cc0a2b1f7e177d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9f0b0eefcda11edee96b1cabd2eaa4dc294c8a65f152d121cc0a2b1f7e177d8->leave($__internal_f9f0b0eefcda11edee96b1cabd2eaa4dc294c8a65f152d121cc0a2b1f7e177d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c424ab8823beb2c10631509dd2f5967c6f5e54af8055741c19e8b1151781d90c = $this->env->getExtension("native_profiler");
        $__internal_c424ab8823beb2c10631509dd2f5967c6f5e54af8055741c19e8b1151781d90c->enter($__internal_c424ab8823beb2c10631509dd2f5967c6f5e54af8055741c19e8b1151781d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c424ab8823beb2c10631509dd2f5967c6f5e54af8055741c19e8b1151781d90c->leave($__internal_c424ab8823beb2c10631509dd2f5967c6f5e54af8055741c19e8b1151781d90c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
