<?php

/* MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig */
class __TwigTemplate_13a38799fa38f58d945a1e9dc614829381f4e348b4df0d4fdc31e7a649e64107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig", 1);
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
        $__internal_6381e8e4801b9186bea11f30cc8a1ac69a864b804ba5a54ad8af5b8ebff517e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6381e8e4801b9186bea11f30cc8a1ac69a864b804ba5a54ad8af5b8ebff517e6->enter($__internal_6381e8e4801b9186bea11f30cc8a1ac69a864b804ba5a54ad8af5b8ebff517e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6381e8e4801b9186bea11f30cc8a1ac69a864b804ba5a54ad8af5b8ebff517e6->leave($__internal_6381e8e4801b9186bea11f30cc8a1ac69a864b804ba5a54ad8af5b8ebff517e6_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_076652c101619400a2cdf1f0c1a920c544a9b9e28fc3ceba8e5b80d2d02ad1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076652c101619400a2cdf1f0c1a920c544a9b9e28fc3ceba8e5b80d2d02ad1e4->enter($__internal_076652c101619400a2cdf1f0c1a920c544a9b9e28fc3ceba8e5b80d2d02ad1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_076652c101619400a2cdf1f0c1a920c544a9b9e28fc3ceba8e5b80d2d02ad1e4->leave($__internal_076652c101619400a2cdf1f0c1a920c544a9b9e28fc3ceba8e5b80d2d02ad1e4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_12413d9f13b0301ad527167982b067407e545c4445b09a7f90597734fb09c7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12413d9f13b0301ad527167982b067407e545c4445b09a7f90597734fb09c7d7->enter($__internal_12413d9f13b0301ad527167982b067407e545c4445b09a7f90597734fb09c7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig"));

        // line 4
        echo "
<h1>Ajouter une reservation </h1>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "


";
        
        $__internal_12413d9f13b0301ad527167982b067407e545c4445b09a7f90597734fb09c7d7->leave($__internal_12413d9f13b0301ad527167982b067407e545c4445b09a7f90597734fb09c7d7_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig";
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

<h1>Ajouter une reservation </h1>
{{  form(f) }}


{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:ReservationHotel:addReservationHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/ReservationHotel/addReservationHotel.html.twig");
    }
}
