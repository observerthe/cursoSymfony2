<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdf839eb84bd933410b305d24810a91dea29534cc6d8afd147eb2664c51d8e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_163b85f416fb2f5c312cbaa8c0d396f19358a7770738c2576fad8b51c607a243 = $this->env->getExtension("native_profiler");
        $__internal_163b85f416fb2f5c312cbaa8c0d396f19358a7770738c2576fad8b51c607a243->enter($__internal_163b85f416fb2f5c312cbaa8c0d396f19358a7770738c2576fad8b51c607a243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163b85f416fb2f5c312cbaa8c0d396f19358a7770738c2576fad8b51c607a243->leave($__internal_163b85f416fb2f5c312cbaa8c0d396f19358a7770738c2576fad8b51c607a243_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4e52dda8de4ff45cb6283d033ee317b2bd01c1e9b04b254d3260a9a845fb02c = $this->env->getExtension("native_profiler");
        $__internal_d4e52dda8de4ff45cb6283d033ee317b2bd01c1e9b04b254d3260a9a845fb02c->enter($__internal_d4e52dda8de4ff45cb6283d033ee317b2bd01c1e9b04b254d3260a9a845fb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4e52dda8de4ff45cb6283d033ee317b2bd01c1e9b04b254d3260a9a845fb02c->leave($__internal_d4e52dda8de4ff45cb6283d033ee317b2bd01c1e9b04b254d3260a9a845fb02c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e950670ab7f388da5e690b6c07207729dcb90518969d3554aa943f8d2d4e153 = $this->env->getExtension("native_profiler");
        $__internal_0e950670ab7f388da5e690b6c07207729dcb90518969d3554aa943f8d2d4e153->enter($__internal_0e950670ab7f388da5e690b6c07207729dcb90518969d3554aa943f8d2d4e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e950670ab7f388da5e690b6c07207729dcb90518969d3554aa943f8d2d4e153->leave($__internal_0e950670ab7f388da5e690b6c07207729dcb90518969d3554aa943f8d2d4e153_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea99b5e5409b11a644c183b8876cc6710182746595add17685edd788942ac6e9 = $this->env->getExtension("native_profiler");
        $__internal_ea99b5e5409b11a644c183b8876cc6710182746595add17685edd788942ac6e9->enter($__internal_ea99b5e5409b11a644c183b8876cc6710182746595add17685edd788942ac6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea99b5e5409b11a644c183b8876cc6710182746595add17685edd788942ac6e9->leave($__internal_ea99b5e5409b11a644c183b8876cc6710182746595add17685edd788942ac6e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
