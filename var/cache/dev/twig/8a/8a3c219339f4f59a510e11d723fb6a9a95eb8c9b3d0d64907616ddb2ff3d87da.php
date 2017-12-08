<?php

/* MyAppHotelBundle:Default:index.html.twig */
class __TwigTemplate_6a8be46072f446af180542acfc512677965c65a1e30f20db770415b72645465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyAppUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b5f9e6f0d26d9c00c8212be022e5e89937fb58f0250573ff9cd538008bf73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b5f9e6f0d26d9c00c8212be022e5e89937fb58f0250573ff9cd538008bf73a->enter($__internal_13b5f9e6f0d26d9c00c8212be022e5e89937fb58f0250573ff9cd538008bf73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b5f9e6f0d26d9c00c8212be022e5e89937fb58f0250573ff9cd538008bf73a->leave($__internal_13b5f9e6f0d26d9c00c8212be022e5e89937fb58f0250573ff9cd538008bf73a_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@MyAppUser/layout.html.twig\" %}
", "MyAppHotelBundle:Default:index.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\HotelBundle/Resources/views/Default/index.html.twig");
    }
}
