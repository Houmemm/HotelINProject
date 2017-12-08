<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a387736e137cc04e6960257b75b6ce2fdedca2cbd4808d778866d3b52dabed7f extends Twig_Template
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
        $__internal_ecefd39535db0f2d5dbb2171c5ecb186fef6dabafc5124f0ceb8de4e2137d54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecefd39535db0f2d5dbb2171c5ecb186fef6dabafc5124f0ceb8de4e2137d54f->enter($__internal_ecefd39535db0f2d5dbb2171c5ecb186fef6dabafc5124f0ceb8de4e2137d54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecefd39535db0f2d5dbb2171c5ecb186fef6dabafc5124f0ceb8de4e2137d54f->leave($__internal_ecefd39535db0f2d5dbb2171c5ecb186fef6dabafc5124f0ceb8de4e2137d54f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f4963b68e2c30216e7f3b66766fbc7765b63c854ffa39c9756c986c05bb6e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4963b68e2c30216e7f3b66766fbc7765b63c854ffa39c9756c986c05bb6e30->enter($__internal_9f4963b68e2c30216e7f3b66766fbc7765b63c854ffa39c9756c986c05bb6e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f4963b68e2c30216e7f3b66766fbc7765b63c854ffa39c9756c986c05bb6e30->leave($__internal_9f4963b68e2c30216e7f3b66766fbc7765b63c854ffa39c9756c986c05bb6e30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_442804434df9a4280cf0726d3e04afb0afaf616a6e0b9e8c3b64d8110443a143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442804434df9a4280cf0726d3e04afb0afaf616a6e0b9e8c3b64d8110443a143->enter($__internal_442804434df9a4280cf0726d3e04afb0afaf616a6e0b9e8c3b64d8110443a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_442804434df9a4280cf0726d3e04afb0afaf616a6e0b9e8c3b64d8110443a143->leave($__internal_442804434df9a4280cf0726d3e04afb0afaf616a6e0b9e8c3b64d8110443a143_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1b238dd3606a9950b017050e14cf5b5a1ea52a6df7e0488bdbbb8d2143ecded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b238dd3606a9950b017050e14cf5b5a1ea52a6df7e0488bdbbb8d2143ecded->enter($__internal_e1b238dd3606a9950b017050e14cf5b5a1ea52a6df7e0488bdbbb8d2143ecded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1b238dd3606a9950b017050e14cf5b5a1ea52a6df7e0488bdbbb8d2143ecded->leave($__internal_e1b238dd3606a9950b017050e14cf5b5a1ea52a6df7e0488bdbbb8d2143ecded_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
