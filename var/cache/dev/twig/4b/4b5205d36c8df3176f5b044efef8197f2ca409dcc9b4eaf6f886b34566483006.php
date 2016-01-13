<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3facbb3aa3996eca491455483722efa33a77ef7d7f24760e8fb0d47df40ab97a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c0e77091b085fb45ea30f6a1d6ac4e32efa98d3770896f899f1a905c56f8cc5 = $this->env->getExtension("native_profiler");
        $__internal_0c0e77091b085fb45ea30f6a1d6ac4e32efa98d3770896f899f1a905c56f8cc5->enter($__internal_0c0e77091b085fb45ea30f6a1d6ac4e32efa98d3770896f899f1a905c56f8cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0e77091b085fb45ea30f6a1d6ac4e32efa98d3770896f899f1a905c56f8cc5->leave($__internal_0c0e77091b085fb45ea30f6a1d6ac4e32efa98d3770896f899f1a905c56f8cc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba0365d04cf5ff7a02b26089b4dc1fc87f00d6adef54b845537a0e10e82debc7 = $this->env->getExtension("native_profiler");
        $__internal_ba0365d04cf5ff7a02b26089b4dc1fc87f00d6adef54b845537a0e10e82debc7->enter($__internal_ba0365d04cf5ff7a02b26089b4dc1fc87f00d6adef54b845537a0e10e82debc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba0365d04cf5ff7a02b26089b4dc1fc87f00d6adef54b845537a0e10e82debc7->leave($__internal_ba0365d04cf5ff7a02b26089b4dc1fc87f00d6adef54b845537a0e10e82debc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58fc4481b8537bab5a54c8d101d6f8cb81cb3495bd60cdfc9aa0539e9fc878f0 = $this->env->getExtension("native_profiler");
        $__internal_58fc4481b8537bab5a54c8d101d6f8cb81cb3495bd60cdfc9aa0539e9fc878f0->enter($__internal_58fc4481b8537bab5a54c8d101d6f8cb81cb3495bd60cdfc9aa0539e9fc878f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58fc4481b8537bab5a54c8d101d6f8cb81cb3495bd60cdfc9aa0539e9fc878f0->leave($__internal_58fc4481b8537bab5a54c8d101d6f8cb81cb3495bd60cdfc9aa0539e9fc878f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dace2ff1ebb22c7b8e23836049894e6b28caf310886c5e715ca121d3c56a45b2 = $this->env->getExtension("native_profiler");
        $__internal_dace2ff1ebb22c7b8e23836049894e6b28caf310886c5e715ca121d3c56a45b2->enter($__internal_dace2ff1ebb22c7b8e23836049894e6b28caf310886c5e715ca121d3c56a45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dace2ff1ebb22c7b8e23836049894e6b28caf310886c5e715ca121d3c56a45b2->leave($__internal_dace2ff1ebb22c7b8e23836049894e6b28caf310886c5e715ca121d3c56a45b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
