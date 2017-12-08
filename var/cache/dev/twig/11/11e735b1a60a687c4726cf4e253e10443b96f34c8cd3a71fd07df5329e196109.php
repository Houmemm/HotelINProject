<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_23270caebf1aaf90a46fbe31e43660f22498b005293288cbff1891f5d420df38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_426062db460ff1c1667ddf5bc65db0721d00bbebde3cacb6f7fd008110325599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426062db460ff1c1667ddf5bc65db0721d00bbebde3cacb6f7fd008110325599->enter($__internal_426062db460ff1c1667ddf5bc65db0721d00bbebde3cacb6f7fd008110325599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426062db460ff1c1667ddf5bc65db0721d00bbebde3cacb6f7fd008110325599->leave($__internal_426062db460ff1c1667ddf5bc65db0721d00bbebde3cacb6f7fd008110325599_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94bed8f6654552d6a627bbcc91a56e91fc6f92cb1c5b6d8d96a2b98d9b47e934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bed8f6654552d6a627bbcc91a56e91fc6f92cb1c5b6d8d96a2b98d9b47e934->enter($__internal_94bed8f6654552d6a627bbcc91a56e91fc6f92cb1c5b6d8d96a2b98d9b47e934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_94bed8f6654552d6a627bbcc91a56e91fc6f92cb1c5b6d8d96a2b98d9b47e934->leave($__internal_94bed8f6654552d6a627bbcc91a56e91fc6f92cb1c5b6d8d96a2b98d9b47e934_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
