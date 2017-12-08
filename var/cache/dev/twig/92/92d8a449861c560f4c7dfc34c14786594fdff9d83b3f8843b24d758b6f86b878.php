<?php

/* MyAppHotelBundle:Hotel:test.html.twig */
class __TwigTemplate_e6284ce09a76ddb83e1da1cde47aaef0393e018e21a3fd373cc4fd55e6827226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:test.html.twig", 1);
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
        $__internal_6c461467d12ba9e73695c0bbe231c1470bff24c1666145f624a02f3e07c6a68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c461467d12ba9e73695c0bbe231c1470bff24c1666145f624a02f3e07c6a68d->enter($__internal_6c461467d12ba9e73695c0bbe231c1470bff24c1666145f624a02f3e07c6a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c461467d12ba9e73695c0bbe231c1470bff24c1666145f624a02f3e07c6a68d->leave($__internal_6c461467d12ba9e73695c0bbe231c1470bff24c1666145f624a02f3e07c6a68d_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_b01c42a00f32736885628b86928ac3db71a45f21708ceb5d7459fc0673c1f257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01c42a00f32736885628b86928ac3db71a45f21708ceb5d7459fc0673c1f257->enter($__internal_b01c42a00f32736885628b86928ac3db71a45f21708ceb5d7459fc0673c1f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:test.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
";
        
        $__internal_b01c42a00f32736885628b86928ac3db71a45f21708ceb5d7459fc0673c1f257->leave($__internal_b01c42a00f32736885628b86928ac3db71a45f21708ceb5d7459fc0673c1f257_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e14191ba57edcb6b22ddecc026926bb4bcdfd1b18df062925fb9676f855aad45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14191ba57edcb6b22ddecc026926bb4bcdfd1b18df062925fb9676f855aad45->enter($__internal_e14191ba57edcb6b22ddecc026926bb4bcdfd1b18df062925fb9676f855aad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:test.html.twig"));

        // line 4
        echo "

<h1>rechercher hotel  par nom ou ville </h1>


<form method=\"GET\">

    nom : <input type=\"text\" name=\"nom\">


    <input type=\"submit\" value=\"rechercher\">
</form>



";
        // line 20
        echo "<div class=\"count\">
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
</div>
<table>
    <tr>
        ";
        // line 26
        echo "        <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
        <th";
        // line 27
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
    </tr>

    ";
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "        <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "ville", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "etoile", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</table>
";
        // line 40
        echo "<div class=\"navigation\">
    ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        
        $__internal_e14191ba57edcb6b22ddecc026926bb4bcdfd1b18df062925fb9676f855aad45->leave($__internal_e14191ba57edcb6b22ddecc026926bb4bcdfd1b18df062925fb9676f855aad45_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 41,  152 => 40,  149 => 38,  132 => 35,  128 => 34,  124 => 33,  117 => 32,  99 => 31,  89 => 27,  84 => 26,  77 => 21,  74 => 20,  57 => 4,  51 => 3,  43 => 45,  41 => 3,  35 => 2,  11 => 1,);
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



{# total items count #}
<div class=\"count\">
    {{ pagination.getTotalItemCount }}
</div>
<table>
    <tr>
        {# sorting of properties based on query components #}
        <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
        <th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
    </tr>

    {# table body #}
    {% for article in pagination %}
        <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
            <td>{{ article.nom }}</td>
            <td>{{ article.ville }}</td>
            <td>{{ article.etoile }}</td>
        </tr>
    {% endfor %}
</table>
{# display navigation #}
<div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
</div>

{% endblock content %}

{% endblock video %}", "MyAppHotelBundle:Hotel:test.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/test.html.twig");
    }
}
