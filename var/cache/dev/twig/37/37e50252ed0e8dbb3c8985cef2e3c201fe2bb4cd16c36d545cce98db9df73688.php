<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d833ec3fa12f8620826ea43fcb08fad5936c3e251a05bdec01cf84c5a0da7bbb extends Twig_Template
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
        $__internal_5e30e6d4e8c0ac37d4dd23dde126de90b1d764fa11d06bc777957f9f3be76cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e30e6d4e8c0ac37d4dd23dde126de90b1d764fa11d06bc777957f9f3be76cb6->enter($__internal_5e30e6d4e8c0ac37d4dd23dde126de90b1d764fa11d06bc777957f9f3be76cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e30e6d4e8c0ac37d4dd23dde126de90b1d764fa11d06bc777957f9f3be76cb6->leave($__internal_5e30e6d4e8c0ac37d4dd23dde126de90b1d764fa11d06bc777957f9f3be76cb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43d3e4ce67a40b0565cb9efaef8a23b5b7b101d4d909efaf8ab5e67869d08471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d3e4ce67a40b0565cb9efaef8a23b5b7b101d4d909efaf8ab5e67869d08471->enter($__internal_43d3e4ce67a40b0565cb9efaef8a23b5b7b101d4d909efaf8ab5e67869d08471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43d3e4ce67a40b0565cb9efaef8a23b5b7b101d4d909efaf8ab5e67869d08471->leave($__internal_43d3e4ce67a40b0565cb9efaef8a23b5b7b101d4d909efaf8ab5e67869d08471_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40c5edb94b7028a36c6546e96612d4b8c155f9f043ab5f2a9c2fe23406c47efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c5edb94b7028a36c6546e96612d4b8c155f9f043ab5f2a9c2fe23406c47efd->enter($__internal_40c5edb94b7028a36c6546e96612d4b8c155f9f043ab5f2a9c2fe23406c47efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40c5edb94b7028a36c6546e96612d4b8c155f9f043ab5f2a9c2fe23406c47efd->leave($__internal_40c5edb94b7028a36c6546e96612d4b8c155f9f043ab5f2a9c2fe23406c47efd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a90029b3a148e99e57a6ef6aa510d7e5e048fc2b3356ed176d880d5b7a4cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a90029b3a148e99e57a6ef6aa510d7e5e048fc2b3356ed176d880d5b7a4cc7->enter($__internal_38a90029b3a148e99e57a6ef6aa510d7e5e048fc2b3356ed176d880d5b7a4cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_38a90029b3a148e99e57a6ef6aa510d7e5e048fc2b3356ed176d880d5b7a4cc7->leave($__internal_38a90029b3a148e99e57a6ef6aa510d7e5e048fc2b3356ed176d880d5b7a4cc7_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\HolidaysIN\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
