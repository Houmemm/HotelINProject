<?php

/* MyAppHotelBundle:Hotel:addHotel.html.twig */
class __TwigTemplate_1061f5e5ea57b267647fbeb61df66c7c3f85831dda20ded96f39c716c548da33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:addHotel.html.twig", 1);
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
        $__internal_445d2f5340e4d538020e39776548c5484641eac2f96284efad522c9beb245e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445d2f5340e4d538020e39776548c5484641eac2f96284efad522c9beb245e55->enter($__internal_445d2f5340e4d538020e39776548c5484641eac2f96284efad522c9beb245e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:addHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445d2f5340e4d538020e39776548c5484641eac2f96284efad522c9beb245e55->leave($__internal_445d2f5340e4d538020e39776548c5484641eac2f96284efad522c9beb245e55_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_5d6fc240392d1f784d0e84fdb9a1f22782f600b24a7446faadb42deb16f7d5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6fc240392d1f784d0e84fdb9a1f22782f600b24a7446faadb42deb16f7d5a1->enter($__internal_5d6fc240392d1f784d0e84fdb9a1f22782f600b24a7446faadb42deb16f7d5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:addHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5d6fc240392d1f784d0e84fdb9a1f22782f600b24a7446faadb42deb16f7d5a1->leave($__internal_5d6fc240392d1f784d0e84fdb9a1f22782f600b24a7446faadb42deb16f7d5a1_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8ed6b87917f799643692533df8d75a9a9487efb85defee9cfc2a70c6dbe90856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6b87917f799643692533df8d75a9a9487efb85defee9cfc2a70c6dbe90856->enter($__internal_8ed6b87917f799643692533df8d75a9a9487efb85defee9cfc2a70c6dbe90856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:addHotel.html.twig"));

        // line 4
        echo "
<h1>Ajouter un hotel </h1>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

";
        
        $__internal_8ed6b87917f799643692533df8d75a9a9487efb85defee9cfc2a70c6dbe90856->leave($__internal_8ed6b87917f799643692533df8d75a9a9487efb85defee9cfc2a70c6dbe90856_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:addHotel.html.twig";
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

<h1>Ajouter un hotel </h1>
{{  form(f) }}

{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:Hotel:addHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/addHotel.html.twig");
    }
}
