<?php

/* MyAppHotelBundle:Chambre:addChambre.html.twig */
class __TwigTemplate_f6fb9e6b617becd5078ddab3eb3b029df9ac85dfbad0a8f8f9e82e456b585cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Chambre:addChambre.html.twig", 1);
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
        $__internal_822a78811419f7adffcf5aef8a95b823430282d742535806a86ac10d9a697883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822a78811419f7adffcf5aef8a95b823430282d742535806a86ac10d9a697883->enter($__internal_822a78811419f7adffcf5aef8a95b823430282d742535806a86ac10d9a697883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Chambre:addChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822a78811419f7adffcf5aef8a95b823430282d742535806a86ac10d9a697883->leave($__internal_822a78811419f7adffcf5aef8a95b823430282d742535806a86ac10d9a697883_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_3e0b8048ed9e7bdd595dce096fb5662738a03414e7cfa36445899272dd222b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0b8048ed9e7bdd595dce096fb5662738a03414e7cfa36445899272dd222b3a->enter($__internal_3e0b8048ed9e7bdd595dce096fb5662738a03414e7cfa36445899272dd222b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:addChambre.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "

";
        
        $__internal_3e0b8048ed9e7bdd595dce096fb5662738a03414e7cfa36445899272dd222b3a->leave($__internal_3e0b8048ed9e7bdd595dce096fb5662738a03414e7cfa36445899272dd222b3a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5cbb7730be728151275d9936841bba2040732b33b2631556af7ec44a5913472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cbb7730be728151275d9936841bba2040732b33b2631556af7ec44a5913472->enter($__internal_a5cbb7730be728151275d9936841bba2040732b33b2631556af7ec44a5913472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:addChambre.html.twig"));

        // line 4
        echo "<h1>Ajouter une chambre  </h1>
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
        
        $__internal_a5cbb7730be728151275d9936841bba2040732b33b2631556af7ec44a5913472->leave($__internal_a5cbb7730be728151275d9936841bba2040732b33b2631556af7ec44a5913472_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Chambre:addChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  58 => 4,  52 => 3,  43 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
<h1>Ajouter une chambre  </h1>
{{  form(f) }}
{% endblock content %}


{% endblock video %}", "MyAppHotelBundle:Chambre:addChambre.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Chambre/addChambre.html.twig");
    }
}
