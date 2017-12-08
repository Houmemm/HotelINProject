<?php

/* MyAppHotelBundle:Hotel:updateHotel.html.twig */
class __TwigTemplate_73d554fec5743e025c588fca7714f76b9262cb069a5ac8b053852cee5d12a130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:updateHotel.html.twig", 1);
        $this->blocks = array(
            'video' => array($this, 'block_video'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyAppUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd4e2b44f65c13326d0e01bcfcccc41eb9c50236181aec1e048e2b05d40ba38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd4e2b44f65c13326d0e01bcfcccc41eb9c50236181aec1e048e2b05d40ba38->enter($__internal_fcd4e2b44f65c13326d0e01bcfcccc41eb9c50236181aec1e048e2b05d40ba38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd4e2b44f65c13326d0e01bcfcccc41eb9c50236181aec1e048e2b05d40ba38->leave($__internal_fcd4e2b44f65c13326d0e01bcfcccc41eb9c50236181aec1e048e2b05d40ba38_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_57262ffe3968e9dcb9a8081272b6821f19642b477980a95c636b5eecfaea411d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57262ffe3968e9dcb9a8081272b6821f19642b477980a95c636b5eecfaea411d->enter($__internal_57262ffe3968e9dcb9a8081272b6821f19642b477980a95c636b5eecfaea411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_57262ffe3968e9dcb9a8081272b6821f19642b477980a95c636b5eecfaea411d->leave($__internal_57262ffe3968e9dcb9a8081272b6821f19642b477980a95c636b5eecfaea411d_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_74f813529eee4e5165430590f8a84b21550e484331876f2db50950799d003f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f813529eee4e5165430590f8a84b21550e484331876f2db50950799d003f88->enter($__internal_74f813529eee4e5165430590f8a84b21550e484331876f2db50950799d003f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        // line 4
        echo "
<h1>Modifier un hotel </h1>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

";
        
        $__internal_74f813529eee4e5165430590f8a84b21550e484331876f2db50950799d003f88->leave($__internal_74f813529eee4e5165430590f8a84b21550e484331876f2db50950799d003f88_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:updateHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block video  %}
{% block content %}

<h1>Modifier un hotel </h1>
{{  form(f) }}

{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:Hotel:updateHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\HotelBundle/Resources/views/Hotel/updateHotel.html.twig");
    }
}
