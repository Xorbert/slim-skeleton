<?php

/* base.twig */
class __TwigTemplate_f90c6b66bd1440dcc2fd9b0569051b7fb1376599dd60ea3780a83d145c0f4dbe extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/master.css\" media=\"screen,projection\"/>
    
    <!--Let browser know website might and should be optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <style>
        html {
            font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }
    </style>
</head>

<body class=\"\">
    
    ";
        // line 19
        $this->loadTemplate("navigation.twig", "base.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        $this->loadTemplate("footer.twig", "base.twig", 21)->display($context);
        // line 22
        echo "
<!--Import jQuery before materialize.js-->

<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 22,  44 => 21,  41 => 20,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/master.css\" media=\"screen,projection\"/>
    
    <!--Let browser know website might and should be optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <style>
        html {
            font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }
    </style>
</head>

<body class=\"\">
    
    {% include 'navigation.twig' %}

    {% include 'footer.twig' %}

<!--Import jQuery before materialize.js-->

<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>
</html>", "base.twig", "C:\\Users\\rob\\Desktop\\marcello\\app\\templates\\base.twig");
    }
}
