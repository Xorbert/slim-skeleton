<?php

/* navigation.twig */
class __TwigTemplate_6598d8f3b8585a9565f860d197a4176b1b9c533a04ef98912ee7950cecc7591c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar-fixed mntop2\">
    <nav class=\"white\">
        <div class=\"container\">
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo left\">RD</a>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down black\">
                    <li class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pages"] ?? null), "profile", array()), "html", null, true);
        echo "\"><a class=\"waves-effect waves-light\" href=\"profile\">Profil</a></li>
                    <li class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pages"] ?? null), "work", array()), "html", null, true);
        echo "\"><a class=\"waves-effect waves-light\" href=\"work\">Projekte</a></li>
                    <li class=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pages"] ?? null), "index", array()), "html", null, true);
        echo "\"><a class=\"waves-effect waves-light\" href=\"/\">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-fixed mntop2\">
    <nav class=\"white\">
        <div class=\"container\">
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo left\">RD</a>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down black\">
                    <li class=\"{{ pages.profile }}\"><a class=\"waves-effect waves-light\" href=\"profile\">Profil</a></li>
                    <li class=\"{{ pages.work }}\"><a class=\"waves-effect waves-light\" href=\"work\">Projekte</a></li>
                    <li class=\"{{ pages.index }}\"><a class=\"waves-effect waves-light\" href=\"/\">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>", "navigation.twig", "C:\\Users\\rob\\Desktop\\marcello\\app\\templates\\navigation.twig");
    }
}
