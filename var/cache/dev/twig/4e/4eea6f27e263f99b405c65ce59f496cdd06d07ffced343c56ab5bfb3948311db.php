<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_abdb277e555680fae31f20101d64ea095e460c43900cf3e59557871c161913f8 extends Twig_Template
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
        $__internal_c19fbe2860bc78dddd5c60a8090be314411251b8dd58219ac301c16c301dc53f = $this->env->getExtension("native_profiler");
        $__internal_c19fbe2860bc78dddd5c60a8090be314411251b8dd58219ac301c16c301dc53f->enter($__internal_c19fbe2860bc78dddd5c60a8090be314411251b8dd58219ac301c16c301dc53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c19fbe2860bc78dddd5c60a8090be314411251b8dd58219ac301c16c301dc53f->leave($__internal_c19fbe2860bc78dddd5c60a8090be314411251b8dd58219ac301c16c301dc53f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
