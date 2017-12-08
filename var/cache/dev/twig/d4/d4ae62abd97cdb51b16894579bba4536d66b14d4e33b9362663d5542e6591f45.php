<?php

/* MyAppHotelBundle:Hotel:rechercheHotel.html.twig */
class __TwigTemplate_9c4ced94fa9840b9990852f278f12cc44d32d18d2ca711fdba634f686054e2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig", 1);
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
        $__internal_184ba9f26117cb10f7a5dccd28eeb9ef42be75cce22e7c4d932976f27000c856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184ba9f26117cb10f7a5dccd28eeb9ef42be75cce22e7c4d932976f27000c856->enter($__internal_184ba9f26117cb10f7a5dccd28eeb9ef42be75cce22e7c4d932976f27000c856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_184ba9f26117cb10f7a5dccd28eeb9ef42be75cce22e7c4d932976f27000c856->leave($__internal_184ba9f26117cb10f7a5dccd28eeb9ef42be75cce22e7c4d932976f27000c856_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_5987f631613f43058bbc85ff068fa05d37fd76e46c4ebd2270e07c2c40d3b114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5987f631613f43058bbc85ff068fa05d37fd76e46c4ebd2270e07c2c40d3b114->enter($__internal_5987f631613f43058bbc85ff068fa05d37fd76e46c4ebd2270e07c2c40d3b114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_5987f631613f43058bbc85ff068fa05d37fd76e46c4ebd2270e07c2c40d3b114->leave($__internal_5987f631613f43058bbc85ff068fa05d37fd76e46c4ebd2270e07c2c40d3b114_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e36560db76fcb0ade21781977deb32e2a76e71ffecbc9a9dab9e793192fcb859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36560db76fcb0ade21781977deb32e2a76e71ffecbc9a9dab9e793192fcb859->enter($__internal_e36560db76fcb0ade21781977deb32e2a76e71ffecbc9a9dab9e793192fcb859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        // line 4
        echo "

<h1>rechercher hotel  par nom ou ville </h1>


    <form method=\"GET\">

        nom : <input type=\"text\" name=\"nom\">


        <input type=\"submit\" value=\"rechercher\">
    </form>



";
        
        $__internal_e36560db76fcb0ade21781977deb32e2a76e71ffecbc9a9dab9e793192fcb859->leave($__internal_e36560db76fcb0ade21781977deb32e2a76e71ffecbc9a9dab9e793192fcb859_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:rechercheHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  51 => 3,  43 => 20,  41 => 3,  35 => 2,  11 => 1,);
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


<h1>rechercher hotel  par nom ou ville </h1>


    <form method=\"GET\">

        nom : <input type=\"text\" name=\"nom\">


        <input type=\"submit\" value=\"rechercher\">
    </form>



{% endblock content %}

{% endblock video %}", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/rechercheHotel.html.twig");
    }
}
