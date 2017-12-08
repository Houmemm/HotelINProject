<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d0a15903c33d861c28f512b6a2dccfda1a5e27613edffd7815db1dee5c48d19 extends Twig_Template
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
        $__internal_42546c80ccede7dde792c179255f84f0d29c1f6566f21fcbadd6ea55161188d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42546c80ccede7dde792c179255f84f0d29c1f6566f21fcbadd6ea55161188d0->enter($__internal_42546c80ccede7dde792c179255f84f0d29c1f6566f21fcbadd6ea55161188d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42546c80ccede7dde792c179255f84f0d29c1f6566f21fcbadd6ea55161188d0->leave($__internal_42546c80ccede7dde792c179255f84f0d29c1f6566f21fcbadd6ea55161188d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56615e3b45c491811d13934ab78d21f623d97cf65d2ff07d182852b62a0f46ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56615e3b45c491811d13934ab78d21f623d97cf65d2ff07d182852b62a0f46ed->enter($__internal_56615e3b45c491811d13934ab78d21f623d97cf65d2ff07d182852b62a0f46ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_56615e3b45c491811d13934ab78d21f623d97cf65d2ff07d182852b62a0f46ed->leave($__internal_56615e3b45c491811d13934ab78d21f623d97cf65d2ff07d182852b62a0f46ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c48f4b73cbfa229fc721a52320f072c758850f0e1d0e9c63d659fdca70ee075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c48f4b73cbfa229fc721a52320f072c758850f0e1d0e9c63d659fdca70ee075->enter($__internal_0c48f4b73cbfa229fc721a52320f072c758850f0e1d0e9c63d659fdca70ee075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c48f4b73cbfa229fc721a52320f072c758850f0e1d0e9c63d659fdca70ee075->leave($__internal_0c48f4b73cbfa229fc721a52320f072c758850f0e1d0e9c63d659fdca70ee075_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c86d0e21bd16f1720096923548b890d6d6a3e9f892130da0b99240543b8cbb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d0e21bd16f1720096923548b890d6d6a3e9f892130da0b99240543b8cbb5d->enter($__internal_c86d0e21bd16f1720096923548b890d6d6a3e9f892130da0b99240543b8cbb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c86d0e21bd16f1720096923548b890d6d6a3e9f892130da0b99240543b8cbb5d->leave($__internal_c86d0e21bd16f1720096923548b890d6d6a3e9f892130da0b99240543b8cbb5d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\HolidaysIN\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
