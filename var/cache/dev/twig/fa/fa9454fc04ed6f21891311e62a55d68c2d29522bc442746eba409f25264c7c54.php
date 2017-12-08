<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b135b6436818c704b61a8cdb332e5f4f00d1ae1bd87cf2ac6b4a5730e2d36f32 extends Twig_Template
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
        $__internal_327c940084b2c3fa4061db81370c08600292c45949043ae24de8b84498a85056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327c940084b2c3fa4061db81370c08600292c45949043ae24de8b84498a85056->enter($__internal_327c940084b2c3fa4061db81370c08600292c45949043ae24de8b84498a85056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327c940084b2c3fa4061db81370c08600292c45949043ae24de8b84498a85056->leave($__internal_327c940084b2c3fa4061db81370c08600292c45949043ae24de8b84498a85056_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af705b58836f95785999d96ede6aaa66e93734113c7b28a030c4aa8ce88ce953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af705b58836f95785999d96ede6aaa66e93734113c7b28a030c4aa8ce88ce953->enter($__internal_af705b58836f95785999d96ede6aaa66e93734113c7b28a030c4aa8ce88ce953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_af705b58836f95785999d96ede6aaa66e93734113c7b28a030c4aa8ce88ce953->leave($__internal_af705b58836f95785999d96ede6aaa66e93734113c7b28a030c4aa8ce88ce953_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ecb45dde242632f6127333fdfdaabd45da5016d5f599d5316295c4fbafba79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecb45dde242632f6127333fdfdaabd45da5016d5f599d5316295c4fbafba79b->enter($__internal_9ecb45dde242632f6127333fdfdaabd45da5016d5f599d5316295c4fbafba79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ecb45dde242632f6127333fdfdaabd45da5016d5f599d5316295c4fbafba79b->leave($__internal_9ecb45dde242632f6127333fdfdaabd45da5016d5f599d5316295c4fbafba79b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe576bc548457e82fc066482e15276dd24648253389166c9266704e3d8b6d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe576bc548457e82fc066482e15276dd24648253389166c9266704e3d8b6d005->enter($__internal_fe576bc548457e82fc066482e15276dd24648253389166c9266704e3d8b6d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe576bc548457e82fc066482e15276dd24648253389166c9266704e3d8b6d005->leave($__internal_fe576bc548457e82fc066482e15276dd24648253389166c9266704e3d8b6d005_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
