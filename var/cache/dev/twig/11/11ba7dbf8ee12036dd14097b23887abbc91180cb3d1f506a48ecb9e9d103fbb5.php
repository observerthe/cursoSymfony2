<?php

/* base.html.twig */
class __TwigTemplate_d39a924c26fcdca86720488c0bf48ad336f30ccdf1845b3be1ba6edb651e8f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b64c13d912541e86ecb249121d2536e415ed2c59cbd74cbd2a56a7572d6add7 = $this->env->getExtension("native_profiler");
        $__internal_7b64c13d912541e86ecb249121d2536e415ed2c59cbd74cbd2a56a7572d6add7->enter($__internal_7b64c13d912541e86ecb249121d2536e415ed2c59cbd74cbd2a56a7572d6add7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7b64c13d912541e86ecb249121d2536e415ed2c59cbd74cbd2a56a7572d6add7->leave($__internal_7b64c13d912541e86ecb249121d2536e415ed2c59cbd74cbd2a56a7572d6add7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6fe20c3691f3cb70acc563c7d9421eade2384f137ba2f618c5a7e0363d38b98 = $this->env->getExtension("native_profiler");
        $__internal_d6fe20c3691f3cb70acc563c7d9421eade2384f137ba2f618c5a7e0363d38b98->enter($__internal_d6fe20c3691f3cb70acc563c7d9421eade2384f137ba2f618c5a7e0363d38b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6fe20c3691f3cb70acc563c7d9421eade2384f137ba2f618c5a7e0363d38b98->leave($__internal_d6fe20c3691f3cb70acc563c7d9421eade2384f137ba2f618c5a7e0363d38b98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85fb774e45fb20d758068ed198627775180b36b15d304eeef9e088a74fd3cf86 = $this->env->getExtension("native_profiler");
        $__internal_85fb774e45fb20d758068ed198627775180b36b15d304eeef9e088a74fd3cf86->enter($__internal_85fb774e45fb20d758068ed198627775180b36b15d304eeef9e088a74fd3cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85fb774e45fb20d758068ed198627775180b36b15d304eeef9e088a74fd3cf86->leave($__internal_85fb774e45fb20d758068ed198627775180b36b15d304eeef9e088a74fd3cf86_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e1e6e29371869a9f400d4789d0a634a1e74017eb7d3ef53d9344383a38518e = $this->env->getExtension("native_profiler");
        $__internal_81e1e6e29371869a9f400d4789d0a634a1e74017eb7d3ef53d9344383a38518e->enter($__internal_81e1e6e29371869a9f400d4789d0a634a1e74017eb7d3ef53d9344383a38518e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81e1e6e29371869a9f400d4789d0a634a1e74017eb7d3ef53d9344383a38518e->leave($__internal_81e1e6e29371869a9f400d4789d0a634a1e74017eb7d3ef53d9344383a38518e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7edcd058922772c09b4d1c93a6c6a7538d40526da4abdb802e0f2052780c7684 = $this->env->getExtension("native_profiler");
        $__internal_7edcd058922772c09b4d1c93a6c6a7538d40526da4abdb802e0f2052780c7684->enter($__internal_7edcd058922772c09b4d1c93a6c6a7538d40526da4abdb802e0f2052780c7684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7edcd058922772c09b4d1c93a6c6a7538d40526da4abdb802e0f2052780c7684->leave($__internal_7edcd058922772c09b4d1c93a6c6a7538d40526da4abdb802e0f2052780c7684_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
