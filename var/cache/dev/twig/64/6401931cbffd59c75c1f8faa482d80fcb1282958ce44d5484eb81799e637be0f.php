<?php

/* MyAppHotelBundle:Hotel:afficheAllHotel.html.twig */
class __TwigTemplate_bf00e22b37c55b64a8e5ebec822a800f8f9eae769aa56068de5ff272b4c55b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig", 1);
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
        $__internal_1c79b5d1e317b5b5c0643be2c30bb40e5f42c08331dbb96b65855b8fb8196170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c79b5d1e317b5b5c0643be2c30bb40e5f42c08331dbb96b65855b8fb8196170->enter($__internal_1c79b5d1e317b5b5c0643be2c30bb40e5f42c08331dbb96b65855b8fb8196170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c79b5d1e317b5b5c0643be2c30bb40e5f42c08331dbb96b65855b8fb8196170->leave($__internal_1c79b5d1e317b5b5c0643be2c30bb40e5f42c08331dbb96b65855b8fb8196170_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_32b85a30040aa51dfd90069d1d66de0b790edeb69c21fe934c63b1794747255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b85a30040aa51dfd90069d1d66de0b790edeb69c21fe934c63b1794747255c->enter($__internal_32b85a30040aa51dfd90069d1d66de0b790edeb69c21fe934c63b1794747255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_32b85a30040aa51dfd90069d1d66de0b790edeb69c21fe934c63b1794747255c->leave($__internal_32b85a30040aa51dfd90069d1d66de0b790edeb69c21fe934c63b1794747255c_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_f6ba025e44ff77d699c41b1d9e02efd69a7bf0b38f86710435884e03af956925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ba025e44ff77d699c41b1d9e02efd69a7bf0b38f86710435884e03af956925->enter($__internal_f6ba025e44ff77d699c41b1d9e02efd69a7bf0b38f86710435884e03af956925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        // line 4
        echo "
<h1> la liste de tous les hotels</h1>


";
        // line 9
        echo "<div class=\"count\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " hotel trouvé
</div>
<table>
    <tr>
        ";
        // line 15
        echo "        <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
        <th";
        // line 16
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
    </tr>
    ";
        // line 19
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 20
            echo "    <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
<form>
    <fieldset style=\"width:360px;\">
        <legend>
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "
        </legend>
        ID : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idHotel", array()), "html", null, true);
            echo " <br>
        Ville : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ville", array()), "html", null, true);
            echo " <br>
        Etoile : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etoile", array()), "html", null, true);
            echo "<br>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update_hotel", array("id" => $this->getAttribute($context["m"], "idHotel", array()))), "html", null, true);
            echo "\">modifier</a>
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete_hotel", array("id" => $this->getAttribute($context["m"], "idHotel", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet hotel   ?')\">
            supprimer </a>

    </fieldset>
</form>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
    ";
        // line 39
        echo "    <div class=\"navigation\">
        ";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
";
        
        $__internal_f6ba025e44ff77d699c41b1d9e02efd69a7bf0b38f86710435884e03af956925->leave($__internal_f6ba025e44ff77d699c41b1d9e02efd69a7bf0b38f86710435884e03af956925_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  156 => 39,  153 => 37,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  111 => 24,  101 => 20,  83 => 19,  74 => 16,  69 => 15,  62 => 10,  59 => 9,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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

<h1> la liste de tous les hotels</h1>


{# total items count #}
<div class=\"count\">
    {{ pagination.getTotalItemCount }} hotel trouvé
</div>
<table>
    <tr>
        {# sorting of properties based on query components #}
        <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
        <th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
    </tr>
    {# table body #}
    {% for m in pagination %}
    <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
<form>
    <fieldset style=\"width:360px;\">
        <legend>
            {{ m.nom }}
        </legend>
        ID : {{ m.idHotel }} <br>
        Ville : {{ m.ville }} <br>
        Etoile : {{ m.etoile }}<br>
        <a href=\"{{ path('Update_hotel',{'id': m.idHotel })}}\">modifier</a>
        <a href=\"{{ path('Delete_hotel',{'id': m.idHotel })}}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet hotel   ?')\">
            supprimer </a>

    </fieldset>
</form>
    </tr>
    {% endfor %}
</table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endblock content %}
{% endblock video %}
", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\HotelBundle/Resources/views/Hotel/afficheAllHotel.html.twig");
    }
}
