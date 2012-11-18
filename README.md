# Minimee... for Blocks

A [Blocks](http://blockscms.com) CMS port of the popular [Minimee](https://github.com/johndwells/Minimee) add-on for ExpressionEngine.

---

## Usage

Minimee is (currently) written as a Twig [filter](http://twig.sensiolabs.org/doc/tags/filter.html), and therefore uses the filter/endfilter tag syntax:

### CSS:

	{% filter minimee('css') %}
		<link rel="stylesheet" href="/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/assets/css/responsive.css">
	{% endfilter %}

	{# example of how to pass options to minimee filter #}
	{% filter minimee('css', {'combine' : 'no'}) %}
		<link rel="stylesheet" href="/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/assets/css/responsive.css">
	{% endfilter %}

### JS:

	{% filter minimee('js') %}
		<script src="/assets/js/vendor.min.js" type="text/javascript"></script>
		<script src="/assets/js/main.js" type="text/javascript"></script>
	{% endfilter %}
	
