# Minimee... for Blocks

A [Blocks](http://blockscms.com) CMS port of the popular [Minimee](https://github.com/johndwells/Minimee) add-on for ExpressionEngine.

---

## Usage

Minimee is (currently) written as a Twig [filter](http://twig.sensiolabs.org/doc/tags/filter.html), and therefore uses the filter/endfilter tag syntax:

### CSS:

	{% filter minimee('css') %}
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/responsive.css">
	{% endfilter %}

	{# Passing options as 2nd parameter #}
	{% filter minimee('css', {'combine' : 'no'}) %}
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/responsive.css">
	{% endfilter %}
	
	{# Alternate syntax #}
	{{ '<link rel="stylesheet" href="/css/override.css" />' | minimee('css') }}

### JS:

	{% filter minimee('js') %}
		<script src="/js/vendor.min.js" type="text/javascript"></script>
		<script src="/js/main.js" type="text/javascript"></script>
	{% endfilter %}

	{# Passing options as 2nd parameter #}
	{% filter minimee('js', {'combine' : 'no'}) %}
		<script src="/js/vendor.min.js" type="text/javascript"></script>
		<script src="/js/main.js" type="text/javascript"></script>
	{% endfilter %}
	
	{# Alternate syntax #}
	{{ '<script src="/js/plugin.js" type="text/javascript"></script>' | minimee('js') }}

	
